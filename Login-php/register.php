<?php
  session_start();
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
    $password = md5($password);

    //Procura na DB se existe um utilizador correspondente ao que foi inserido no registro
    $query = "SELECT * FROM users WHERE username='$username';";
    $resultado = mysqli_query($connection, $query);
    $linha = mysqli_fetch_assoc($resultado);
    $total = mysqli_num_rows($resultado);

    // Caso não exista nenhum utilizador com esse nickname, cria um novo.
    if(empty($total)){
      $query = "INSERT into users values ('$username', '$name', null, '$email', '$password', '$lastAccess', 0, null, null)";
      mysqli_query($connection, $query);
      header('Location: ../index.php');
    }elseif(strlen($username)<3){ // Validação para não criar utilizadores com poucos caracteres
      $_SESSION['registroErro'] = "Nome de utilizador não pode ser inferior a 3 caracteres.";
      header('Location: ../LoginForm.php#tab-register');
    }else{ //Se houver algum utilizador a utilizar o nickname, não permite a criação
      $_SESSION['registroErro'] = "Este usuário já existe.";
      header('Location: ../LoginForm.php#tab-register');
    }
  }

?>