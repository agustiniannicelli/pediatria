<?php
require_once 'smartyConfig.php';

class PrinterPrivate{
	
	
	public static function execute($params, $template)
	{
		$smarty = getSmarty("../smarty");
		foreach($params as $key => $val)
		{
			$smarty->assign($key, $val);
		}
		$smarty->display("private/" . $template);
	}
}
?>
