<?php

require_once("libs/Smarty.class.php");

function getSmarty($dir){
		$smarty = new Smarty;
		$smarty->template_dir = $dir."/templates";
		$smarty->config_dir = $dir."/config";
		$smarty->cache_dir = $dir."/cache";
		$smarty->compile_dir = $dir."/templates_c";
		return $smarty;
}		

?>
