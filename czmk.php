<?php
include('pass.php');
include('defaults.php');

try {
	include('dbconnect.php');
  $res = $dbh->query('SELECT SUM(val) as sum,(SELECT val FROM votes ORDER BY `date` DESC LIMIT 1) as last_vote from votes WHERE date > NOW() - INTERVAL 1 HOUR');
  print_r($res->fetchObject());
  $dbh = null;
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage() . "<br/>";
  die();
}

?>
