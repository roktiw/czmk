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
                                                                             
  print_r($res);                                                             
  $dbh = null;                                                               
} catch (PDOException $e) {                                                  
  print "Error!: " . $e->getMessage() . "<br/>";                             
  die();                                                                     
}                                                                            
?>                                                                           

