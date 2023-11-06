<?php

namespace App\Model;
use App\Connect\Connect;

class UserModel {

    private $db;
    private $conn;

    function __construct()
    {
       $this->db = new Connect;
       $this->conn = $this->db->connect();
    }
    public function select(){
        
    }

    public function insert($data,$path){
        $stm = "INSERT INTO users (name,email,course,phone,gender,birthDate,image) VALUES (?,?,?,?,?,?,?)";
        $resultStm = $this->conn->prepare($stm);
        $resultStm->bindParam(1,$data['name']);
    }
}