<?php
/*
 * Created on Jul 21, 2009
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

require_once dirname(__FILE__) . '/ConnectionManager.php';
require_once dirname(__FILE__) . '/FileManager.php';
require_once dirname(__FILE__) . '/Image.php';
require_once dirname(__FILE__) . '/Note.php';
require_once dirname(__FILE__) . '/Category.php';
require_once dirname(__FILE__) . '/User.php';
 
class ConfigFile{

	public static $HOST = "localhost";
	
	public static $USER_UPDATE = "pediatria";
	public static $PASS_UPDATE = "Practica46";
	
	public static $USER_SELECT = "pediatria_select";
	public static $PASS_SELECT = "Practica_select1";
	
	public static $DATABASE = "pediatria";
	
	public static $FILES_PATH = "upload_files/";
	
	public static $URL =  "http://localhost/pediatria/"; //"http://www.pediatriapractica.com.ar/";
	
	public static $HTTP =  "http://";
}
?>