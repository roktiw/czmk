<?php
$logFile = "appLog.txt";
ini_set("error_log", $logFile);
ini_set("log_errors", "1");
ini_set("html_errors", 0);
//===================================================================================================
if (1){
	ini_set("display_errors","0");
	error_reporting(E_ERROR);
} 
elseif( _a()) {
	ini_set("display_errors","1");
	error_reporting(E_ALL | E_STRICT);
}
//===================================================================
date_default_timezone_set("Europe/Warsaw");
setlocale(LC_ALL, "pl_PL");

header('Access-Control-Allow-Origin: *');
?>
