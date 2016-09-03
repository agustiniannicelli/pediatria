<?php

require_once 'ConfigFile.php';;

class Image
{
	const SELECT_SQL = "SELECT * FROM image ";
	const INSERT_SQL = "INSERT INTO image (id, id_note, path, position, text) VALUES ";
	const UPDATE_SQL = "UPDATE image SET ";
	const DELETE_SQL = "DELETE FROM image ";
	
	function __construct()
	{
		$this->id = NULL;
		$this->path = "";
		$this->position = 1;
		$this->text = "";
	}
	
	public static function load($row)
	{
		$instance = new Image();
		$instance->id = $row->id;
		$instance->path = $row->path;
		$instance->position = $row->position;
		$instance->text = $row->text;
		return $instance;
	}
	
	public static function getAllForNote($idNote)
	{
		$query = self::SELECT_SQL . " WHERE id_note = $idNote ORDER BY position";
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
	
	
	public static function get($id)
	{
		$query = self::SELECT_SQL . " WHERE id = $id";
		$resultSet = ConnectionManager::executeSelect($query);
		$image = NULL;
        if ($row = mysqli_fetch_object($resultSet)) 
        {
        	$image = self::load($row);
		}
		$resultSet->close();
		return $image;
	}
	
	public static function insert($id_note, $path, $position, $text)
	{
		$query = self::INSERT_SQL;
		$query .= " ( NULL, \"$id_note\", \"$path\", $position, \"$text\") ";
		
		ConnectionManager::executeUpdate($query);
	}
	
	public static function update($id, $position, $text)
	{
		$query = self::UPDATE_SQL;
		$query .= " position = $position, text = \"$text\" WHERE id = $id";
		
		ConnectionManager::executeUpdate($query);
	}
	
	public static function delete()
	{
		if(isset($_POST["Note_image_deleted"]))
		{
			$ids = $_POST["Note_image_deleted"];
			
			for ($i = 0; $i < count($ids); $i++)
			{
				if($ids[$i] != 0)
				{
					$image = self::get($ids[$i]);
					FileManager::deleteFile($image->path);
					
					$query = self::DELETE_SQL;
					$query .= " WHERE id = $ids[$i]";
					ConnectionManager::executeUpdate($query);
				}
			}	
			return true;
		}
	}
	
	public static function deleteById($id)
	{
		$image = self::get($id);
		FileManager::deleteFile($image->path);
		
		$query = self::DELETE_SQL;
		$query .= " WHERE id = $id";
		ConnectionManager::executeUpdate($query);			
		return true;
	}
}