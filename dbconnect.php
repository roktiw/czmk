<?php
// $dbh = new PDO('mysql:host=mysql3.mydevil.net;dbname=m1515_czmk;encoding=utf8', $user, $pass);
$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname;encoding=utf8", $dbuser, $dbpass);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->exec("SET NAMES 'utf8';");
?>
