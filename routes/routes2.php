<?php

use App\Route\Route;
require_once '../index.php';

Route::get('/academyOne/ola',function(){
    echo  'ola';
});


echo Route::redirect($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);