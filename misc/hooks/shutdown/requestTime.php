<?php
if(!defined('ROOT')) exit('No direct script access allowed');

if(MASTER_DEBUG_MODE && !defined("SERVICE_ROOT")) {
	if(isset($_SERVER["REQUEST_TIME_FLOAT"])) {
		//Use server's inbuilt time
		echo "<div style='position:fixed;right:0px;bottom:0px;padding:5px;background:maroon;color:white;z-index:99999999999999999;'>DT:".
			(microtime(true)-$_SERVER["REQUEST_TIME_FLOAT"])." secs</div>";
	} else {
		echo "<div style='position:fixed;right:0px;bottom:0px;padding:5px;background:maroon;color:white;z-index:99999999999999999;'>DT:".
			(microtime(true)-$_SERVER['REQUEST_PAGE_START'])." secs</div>";
	}
}
?>
