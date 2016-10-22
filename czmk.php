<?php
include('pass.php');
include('defaults.php');
try {
  include('dbconnect.php');
  $res = $dbh->query('SELECT val, date, (SELECT SUM(val) as sum from votes WHERE date > NOW() - INTERVAL 1 HOUR) as sum FROM votes ORDER BY `date` DESC LIMIT 1');
  echo(json_encode($res->fetchObject(), JSON_PRETTY_PRINT));
  $dbh = null;
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage() . "<br/>";
  die();
}
?>
