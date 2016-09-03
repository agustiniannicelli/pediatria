<?php

require_once 'ConfigFile.php';

class Category
{
	const TABLE = "category";
	const INSERT_SQL = "INSERT INTO category (id, name) VALUES ";
	const SELECT_SQL = "SELECT * FROM category ";
	const UPDATE_SQL = "UPDATE category SET ";
	const DELETE_SQL = "DELETE FROM category WHERE id = ";
	
	function __construct()
	{
		$this->id = NULL;
		$this->name = "";
	}
	
	public static function load($row)
	{
		$instance = new Category();
		$instance->id = $row->id;
		$instance->name = $row->name;
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
		$query = self::SELECT_SQL . " WHERE id = '$id'";
		$resultSet = ConnectionManager::executeSelect($query);
		$category = NULL;
        if ($row = mysqli_fetch_object($resultSet)) 
        {
        	$category = self::load($row);
		}
		$resultSet->close();
		return $category;
		
	}
}