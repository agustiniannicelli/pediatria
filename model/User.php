<?php

require_once 'ConfigFile.php';

class User
{
	const INSERT_SQL = "INSERT INTO user VALUES ";
	const SELECT_SQL = "SELECT * FROM user ";
	const UPDATE_SQL = "UPDATE user SET ";
	const DELETE_SQL = "DELETE FROM user ";
	
	public static function load($row)
	{
		$instance = new User();
		$instance->id = $row->id;
		$instance->username = $row->username;
		$instance->password = $row->password;
		return $instance;
	}
	
	public static function getAll()
	{
		$query = self::SELECT_SQL;
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
		$user = NULL;
        if ($row = mysqli_fetch_object($resultSet)) 
        {
        	$user = self::load($row);
		}
		
		$resultSet->close();
		return $user;
	}
	
	public static function isUser($username, $password)
	{
		$query = self::SELECT_SQL . " WHERE username = \"$username\" AND password = \"$password\"";
		$resultSet = ConnectionManager::executeSelect($query);
		$user = NULL;
        if ($row = mysqli_fetch_object($resultSet)) 
        {
        	$user = self::load($row);
		}
		
		$resultSet->close();
		return $user;
	}
	
	public static function insert()
	{	
		$error = self::validate($_POST["User_username"], $_POST["User_password"], 0);
		
		if($error == "")
		{	
			$query = self::INSERT_SQL;
			$query .= " ( NULL, \"$_POST[User_username]\" , \"$_POST[User_password]\" , \"$_POST[User_isSuperAdmin]\", \"$_POST[User_isAdmin]\") ";
			ConnectionManager::executeUpdate($query);
			return true;
		}
		else
		{
			throw new Exception($error);
		}
	}
	
	public static function update()
	{
		$error = self::validate($_POST["User_username"], $_POST["User_password"], $_POST["User_id"]);

		if($error == "")
		{		
			$query = self::UPDATE_SQL;
			$query .= " username = \"$_POST[User_username]\" , password = \"$_POST[User_password]\", is_super_admin = \"$_POST[User_isSuperAdmin]\", is_admin = \"$_POST[User_isAdmin]\" WHERE id = $_POST[User_id]";
			ConnectionManager::executeUpdate($query);
			return true;
		}
		else
		{
			throw new Exception($error);
		}
	}
	
	public static function delete()
	{
		$query = self::DELETE_SQL;
		$query .= "WHERE id = $_POST[User_id]";
		ConnectionManager::executeUpdate($query);
		return true;
	}
	
	
	private static function validate($username, $password, $id)
	{
		$error = "";
		if($username == "")
		{
			$error .= "* El username no puede ser vacio <br>";
		}
		
		if($password == "")
		{
			$error .= "* La password no puede ser vacia <br>";
		}
		
		if(self::existUsername($username, $id))
		{
			$error .= "* Nombre $username ya existe";
		}
		
		return $error;
	}
	
	
	private static function existUsername($username, $id)
	{
		$query = self::SELECT_SQL . " WHERE username = \"$username\" AND id <> $id";
		$resultSet = ConnectionManager::executeSelect($query);
		
        if ($row = mysqli_fetch_object($resultSet)) 
        {
        	return TRUE;
		}
		else 
		{
			return FALSE;
		}
	}
}