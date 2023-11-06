<?php

namespace App\Controller;
use App\Controller\controller;
use App\Model\UserModel;

class UserController implements Controller{
    private $model;

    function __construct(){
        $this->model = new UserModel;
    }

    public function index(){
       $index = $this->model->select();
       require_once '../View/logged/dashboard.php';
    }

    public function create(){

    }

    public function store(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
    
}