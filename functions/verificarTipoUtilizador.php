<?php

function isLogged(){
  if(isset($_SESSION['userGroup'])){
   return true;
  }else{
    return false;
  }
}

function sendToIndex(){
  if(isset($_SESSION['userGroup'])){
    header('Location: index.php');
  }
}

function isNotAdmin(){
  if(isset($_SESSION['userGroup'])){
    if($_SESSION['userGroup']!= 777){
    header('Location: ../index.php');
    }
  }
}
?>