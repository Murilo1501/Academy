<?php

namespace App\Controller;

use App\Controller\controller;
use App\Model\UserModel;


class UserController implements Controller
{
    private $model;

    function __construct()
    {
        $this->model = new UserModel();
    }

    public function index()
    {
        $index = $this->model->select();
        require_once __DIR__ . '/../View/logged/dashboard.php';
    }

    public function create()
    {
        require_once __DIR__ . '/../View/form.php';
    }

    public function store()
    {
        $data = $_POST;
        $file = $_FILES['photo'];
        $dir = "image/";
        $path = "$dir" . $file["name"];
        move_uploaded_file($file["tmp_name"], $path);

        $store = $this->model->insert($data,$path);
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
