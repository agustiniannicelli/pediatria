<?php
require_once 'smartyConfig.php';

class Printer{
	
	
	public static function execute($params, $template)
	{
		$smarty = getSmarty("smarty");
		foreach($params as $key => $val)
		{
			$smarty->assign($key, $val);
		}
		$smarty->display($template);
	}
	
	
	/////////////////////////////////////////////////////////////////////////////////////// AUTOCOMPLETE
	public static function write_ac_script($input, $data){
		$script = "	<script language='javascript' type='text/javascript'>";
	
		$script .= "	data = [";
		foreach ($data as $value)
			$script .= "'".$value."', ";
		if (!empty($data)) $script = substr($script, 0, -2);
		$script .= "].sort();";
		$script .= "		AutoComplete_Create('".$input."', data, 20);";
	
		$script .= "	</script>";
	
		echo $script;
	}
}
?>
