<?php
/*
 * Created on Jul 21, 2009
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

require_once 'ConfigFile.php';

class FileManager{

	private static function filename_safe($string)
	{ 
		return preg_replace('/[^a-z0-9]/i','',$string); 
	}

	public static function extension($filename){
		$path_parts = pathinfo($filename);
		return ('.'.strtolower($path_parts['extension']));
	}
	
	public static function insertFiles($tagName, $index)
	{
		$fileName = $_FILES[$tagName]['name'][$index];
		$ext = self::extension($fileName);
		$uniqName = uniqid(self::filename_safe($fileName));
		$fileName = $uniqName . $ext;
		
		if($fileName != "")
		{
			$fileTempName = $_FILES[$tagName]['tmp_name'][$index];
			
			self::putFile($fileTempName, $fileName);
			return $fileName;
		}
		return "";
	}
	
	
	private static function putFile($fileTempName, $fileName)
	{
		$path = ConfigFile::$FILES_PATH . $fileName;
		copy($fileTempName, "../" . $path);
	}
	
	public static function deleteFile($fileName)
	{	
		self::deleteFileLocal($fileName);
	}
	
	private static function deleteFileLocal($fileName)
	{
		if($fileName != "")
		{
			$path = "../" . ConfigFile::$FILES_PATH . $fileName;
			unlink($path);
		}
	}
}
?>
