<?php

function filter($email,$senha):array{

  $email =  filter_var($email,FILTER_VALIDATE_EMAIL);
  $email = htmlspecialchars($email);
  $email = addslashes($email);

  $senha = htmlspecialchars($senha);
  $senha = addslashes($senha);
  

  $data = [
    'email' => $email,
    'password' => $senha
  ];

  return $data;
   
}