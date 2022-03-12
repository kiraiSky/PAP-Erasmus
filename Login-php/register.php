<?php
  include_once('../connection.php');
 

  if(isset($_POST['register-form-submit'])){
    register($con);
  }

  function register($connection){

  $name = mysqli_real_escape_string($connection, $_POST['register-form-name']);
  $username = mysqli_real_escape_string($connection, $_POST['register-form-username']);
  $email = mysqli_real_escape_string($connection, $_POST['register-form-email']);
  $password = mysqli_real_escape_string($connection, $_POST['register-form-password']);
  $lastAccess = date('Y-m-d H:i:s');
  $password = mysqli_real_escape_string($connection, $password);

  $query = "INSERT into users values ('$username', '$name', null, '$email', '$password', '$lastAccess', null, null, null)";

  mysqli_query($connection, $query);

  header('Location: ../index.php');

  }

?>