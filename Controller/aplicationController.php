<?php
session_start();

require_once '../Repository/login.php';

require_once 'trateFunctions.php';

if(!empty($_POST['email'])  && !empty($_POST['password'])){
   
    $user = $_POST['email'];
    $password = $_POST['password'];
    $filter = filter($user,$password);

    if($filter){
       $success =  login($filter);
       if($success){
           $_SESSION['email'] = $success;
           header("Location:../Views/logado.php");
           exit();  
       }
    } else{
       
    }
}

