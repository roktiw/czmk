<?php
require('pass.php');
try {
    $dbh = new PDO('mysql:host=mysql3.mydevil.net;dbname=m1515_czmk', $user, $pass);
    $res = $dbh->query('SELECT SUM(val) from votes WHERE date > NOW() - INTERVAL 1 HOUR');
	print_r($res);
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
