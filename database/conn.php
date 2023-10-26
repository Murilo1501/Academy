<?php

function connect(){

  $user = 'root';
  $pass = '';
  $server = 'localhost';
  $database = 'academy';

  $conn = mysqli_connect($server,$user,$pass,$database);

  if(mysqli_connect_errno()){
    die('fail'.mysqli_connect_error());
  } 

  //echo "Connected successfully";

  return $conn;
}

