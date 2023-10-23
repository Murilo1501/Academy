<?php

require_once 'trateFunctions.php';

if(!empty($_POST['email'])  && !empty($_POST['password'])){
   
    $user = $_POST['email'];
    $password = $_POST['password'];
    $filter = filter($user,$password);

    if($filter){
        echo $filter;
    }
}

