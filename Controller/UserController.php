<?php

namespace App\Controller;

use App\Model\UserModel;
use App\Controller\{UserController,LoginController,TreatingController};
require_once 'treatingController.php';


class UserController extends TreatingController implements Controller
{
    private $model;
    private $filter;

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
        $this->filter = TreatingController::sendInputs($data);
        //die();
        $file = $_FILES['photo'];
        $dir = "image/";
        $path = "$dir" . $file["name"];
        move_uploaded_file($file["tmp_name"], $path);

        $store = $this->model->insert($data,$path);

        if($store){
            header("Location:/academyOne/");
        }
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
