<?php

function filter($email,$senha):string|bool{

  $email =  filter_var($email,FILTER_SANITIZE_EMAIL);
  

  if($email){
      return $email;
  }

  //return $email;
   
}