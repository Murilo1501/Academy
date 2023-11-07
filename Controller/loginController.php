<?php

namespace App\Controller;
use App\Model\LoginModel;
session_start();

class LoginController{

    private $model;

    function __construct()
    {
        $this->model = new LoginModel;
    }

    public function index(){
       require_once 'View/index.php';
    }

    public function login(){
        $data = $_POST;
        $user = $this->model->login($data);

        if($user){
            $_SESSION['user'] = $user;
            header("Location:/academyOne/admin");

        } else{
            header("Location:/academyOne/");
        }
    }
}