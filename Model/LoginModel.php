<?php

namespace App\Model;
use App\Connect\Connect;

class LoginModel{

    
    private $db;
    private $conn;

    function __construct()
    {
        $this->db = new Connect;
        $this->conn = $this->db->connect();
    }

    public function login($data):array|bool{
        $stm = "SELECT * FROM users WHERE email = ? ";
        $resultStm = $this->conn->prepare($stm);
        $resultStm->bindParam(1,$data['email']);
        $resultStm->execute();
       

        if($resultStm->rowCount() > 0  ){
            $user = $resultStm->fetch();

            if($data['password'] == $user['password']){
                return $user;
            }
        }

        return false;
    }
}