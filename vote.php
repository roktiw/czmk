<?php                                                                        
try {                                                                        
  $val = $_GET['val'] == 1 ? 1 : -1;                                         
  $user = null;                                                              
                                                                             
  include('pass.php');                                                       
  include('defaults.php');                                                   
  include('dbconnect.php');                                                  
  $q = $dbh->prepare('INSERT INTO votes (user, val) VALUES(:user, :val)');   
  $q->bindParam("user", $user);                                              
  $q->bindParam("val", $val);                                                
  $res = $q->execute();                                                      

  header("Location: http://maciejjankowski.com/czy-metro-kursuje/");

                                                                             
  print_r($res);                                                             
  $dbh = null;
  
  die();

} catch (PDOException $e) {                                                  
  print "Error!: " . $e->getMessage() . "<br/>";                             
  die();                                                                     
}                                                                            
?>                                                                           

