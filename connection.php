<?php
  // Database configuration    
  $db_hostname = "localhost"; 
  $db_username = "root"; 
  $db_password = ""; 
  $db_name = "erasmus_example";
   
  // Create database connection 
 $con = new mysqli($db_hostname, $db_username, $db_password, $db_name); 
   
  // Check connection 
  if ($con->connect_error) { 
      die("Connection failed: " . $con->connect_error); 
  }
?>