<?php

use App\Controller\UserController;
use App\Controller\LoginController;


return [ 
    'GET|/academyOne/'=> [LoginController::class,'index'],
    'POST|/academyOne/login'=> [LoginController::class,'login'],
    'GET|/academyOne/form' => [UserController::class,'create'],
    'POST|/academyOne/store' => [UserController::class,'store'],
    'GET|/academyOne/admin'=> [UserController::class,'index']
];
