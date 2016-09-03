<?php

require_once 'ConfigFile.php';

class Note
{
	const SELECT_SQL = "SELECT * FROM note ";
	const INSERT_SQL = "INSERT INTO note (id, id_category, date, title, subtitle, text, topic, published) VALUES ";
	const UPDATE_SQL = "UPDATE note SET ";
	const DELETE_SQL = "DELETE FROM note ";
	
	function __construct()
	{
		$this->id = NULL;
		$this->category = new Category();
		$this->date = date("Y-m-d h:i:s");
		$this->title = "";
		$this->subtitle = "";
		$this->text = "";
		$this->topic = "";
		$this->published = 0;
		$this->images =  array();
	}
	
	public static function load($row)
	{
		$instance = new Note();
		$instance->category = Category::get($row->id_category);
		$instance->id = $row->id;
		$instance->date = $row->date;
		$instance->title = $row->title;
		$instance->subtitle = $row->subtitle;
		$instance->text = $row->text;
		$instance->topic = $row->topic;
		$instance->published = $row->published;
		$instance->images = Image::getAllForNote($row->id);
		return $instance;
	}
	
	public static function getAll()
	{
		$query = self::SELECT_SQL . " ORDER BY title ASC ";
		$resultSet = ConnectionManager::executeSelect($query);

		$objetcs = array();
        while ($row = mysqli_fetch_object($resultSet)) 
        {
        	$instance = self::load($row);
            array_push($objetcs, $instance);
		}
		
		$resultSet->close();
		return $objetcs;
	}
	
	public static function getAllByCategory($category)
	{
		$query = self::SELECT_SQL . " WHERE published = 1 AND id_category = $category->id ORDER BY date DESC ";
		$resultSet = ConnectionManager::executeSelect($query);
	
		$objetcs = array();
		while ($row = mysqli_fetch_object($resultSet))
		{
			$instance = self::load($row);
			array_push($objetcs, $instance);
		}
	
		$resultSet->close();
		return $objetcs;
	}
	
	public static function getLast($category, $limit)
	{
		$query = self::SELECT_SQL . " WHERE published = 1 AND id_category = $category->id ORDER BY date DESC LIMIT $limit";
		$resultSet = ConnectionManager::executeSelect($query);

		$objetcs = array();
        while ($row = mysqli_fetch_object($resultSet)) 
        {
        	$instance = self::load($row);
            array_push($objetcs, $instance);
		}
		
		$resultSet->close();
		return $objetcs;
	}
	
	public static function find($key)
	{
		$query = self::SELECT_SQL . " WHERE published = 1 AND (text LIKE '%$key%' OR title LIKE '%$key%' OR topic LIKE '%$key%')  ORDER BY date";
		$resultSet = ConnectionManager::executeSelect($query);

		$objetcs = array();
        while ($row = mysqli_fetch_object($resultSet)) 
        {
        	$instance = self::load($row);
            array_push($objetcs, $instance);
		}
		
		$resultSet->close();
		return $objetcs;
	}
	
	public static function getLastSince($limit, $date)
	{
		$query = self::SELECT_SQL . " WHERE date <= $date ORDER BY date DESC LIMIT $limit";
		$resultSet = ConnectionManager::executeSelect($query);

		$objetcs = array();
        while ($row = mysqli_fetch_object($resultSet)) 
        {
        	$instance = self::load($row);
            array_push($objetcs, $instance);
		}
		for ($i = count($objetcs); $i < $limit; $i++) 
		{
			array_push($objetcs, new Note());
		}
		
		$resultSet->close();
		return $objetcs;
	}
	
	public static function get($id)
	{
		$query = self::SELECT_SQL . " WHERE id = '$id'";
		$resultSet = ConnectionManager::executeSelect($query);
		$note = NULL;
        if ($row = mysqli_fetch_object($resultSet)) 
        {
        	$note = self::load($row);
		}
		$resultSet->close();
		return $note;
	}
	
	public static function insert()
	{
		self::validate(0);
		
		$id_category = $_POST["Note_idCategory"];
		$date = $_POST["Note_date"];
		$title = $_POST["Note_title"];
		$subtitle = $_POST["Note_subtitle"];
		
		$text = str_replace("\"", "'", $_POST["Note_text"]);
		
		$topic = $_POST["Note_topic"];
		
		$published = 0;
		if(isset($_POST["Note_published"]))
		{
			$published = 1;
		}
		
		$query = self::INSERT_SQL;
		$query .= " ( NULL, \"$id_category\", \"$date\", \"$title\", \"$subtitle\", \"$text\", \"$topic\", \"$published\") ";
		
		$idNote = ConnectionManager::executeUpdate($query);
		
		for ($i = 0; $i < sizeof($_FILES["Image_file"]["name"]); $i++)
		{
			$fileName = $_FILES["Image_file"]["name"][$i];
	    	if($fileName != "")
	    	{
	    		$imgName = FileManager::insertFiles("Image_file", $i);
	    	}
	    	
	    	Image::insert($idNote, $imgName, $_POST["Image_position"][$i], $_POST["Image_text"][$i]);
		}
		$_SESSION["idNote"] = $idNote;
		return true;
	}
	
	public static function update()
	{
		self::validate($_POST["Note_id"]);

		$id = $_POST["Note_id"];
		$id_category = $_POST["Note_idCategory"];
		$date = $_POST["Note_date"];
		$title = $_POST["Note_title"];
		$subtitle = $_POST["Note_subtitle"];
		$text = str_replace("\"", "'", $_POST["Note_text"]);
		$topic = $_POST["Note_topic"];

		$published = 0;
		if(isset($_POST["Note_published"]))
		{
			$published = 1;
		}
		
		$query = self::UPDATE_SQL;
		$query .= " id_category = \"$id_category\", date = \"$date\", title = \"$title\", subtitle = \"$subtitle\", text = \"$text\", topic = \"$topic\", published = \"$published\" WHERE id = $id";
		ConnectionManager::executeUpdate($query);

		for ($i = 0; $i < sizeof($_POST["Image_id"]); $i++)
		{
			$imageId = $_POST["Image_id"][$i];
			$fileName = $_FILES["Image_file"]["name"][$i];
	    	if($fileName != "")
	    	{
    			$imgName = FileManager::insertFiles("Image_file", $i);
	    		
    			if($_POST["Image_id"][$i] != NULL)
	    		{
	    			Image::deleteById($imageId);
	    		}
			    Image::insert($id, $imgName, $_POST["Image_position"][$i], $_POST["Image_text"][$i]);
	    	}
	    	else
	    	{
	    		Image::update($imageId, $_POST["Image_position"][$i], $_POST["Image_text"][$i]);
	    	}
		}
	    	
		
		
		Image::delete();
		$_SESSION["idNote"] = $id;
		return true;
	}
	
	public static function delete()
	{
		Image::delete();
		
		$query = self::DELETE_SQL;
		$query .= " WHERE id = $_POST[Note_id] ";
		ConnectionManager::executeUpdate($query);

		
		return true;
	}
	
	private static function validate($id)
	{
		$error = "";
		if($_POST["Note_date"] == "")
		{
			$error .= "* La fecha no puede ser vacia <br>";
		}
		if($_POST["Note_text"] == "")
		{
			$error .= "* La nota no puede ser vacia <br>";
		}
		if ($error != "") 
		{
			$error = "Fallo la carga: <br>" . $error; 
			throw new Exception($error);
		}
	}
}