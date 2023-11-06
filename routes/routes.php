<?php

use App\Controller\UserController;
use App\Controller\LoginController;

return [ 
    'GET|/academyOne/'=> [LoginController::class,'index'],
    'GET|/academyOne/admin'=> [UserController::class,'index']
];