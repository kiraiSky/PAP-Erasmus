<?php
  session_start();
  include_once('../connection.php');

  $username = mysqli_real_escape_string($con, $_POST['login-form-username']);
  $password = mysqli_real_escape_string($con, $_POST['login-form-password']);

  if($username != "" && $password != ""){
    
    $password = md5($password);

    login($con, $username, $password);
  }else{
    $_SESSION['loginErro'] = "Usuário ou senha inválido";
    header("Location: ../loginForm.php");
  }

  function login($connection, $username, $password){

    $lastAccess = date('Y-m-d H:i:s');

    $query = "SELECT * FROM users WHERE username='$username' and userpassword='$password' LIMIT 1";

    $resultado =  mysqli_query($connection, $query);
    $linha =  mysqli_fetch_assoc($resultado);
    $total = mysqli_num_rows($resultado);
    if(empty($resultado)){
      $_SESSION['loginErro'] = "Usuário ou senha inválido";
      header("Location: ../loginForm.php");
    }elseif($total > 0){
      $_SESSION['username'] = $username;
      header("Location: ../index.php");
    }else{
      $_SESSION['loginErro'] = "Usuário ou senha inválido";
      header("Location: ../loginForm.php");
    }
  }

?>