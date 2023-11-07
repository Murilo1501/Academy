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
        $stm = "SELECT * FROM users";
        $resultStm = $this->conn->prepare($stm);
        $resultStm->execute();

        $users = $resultStm->fetchAll();
        
        return $users ? $users:false;


    }

    public function insert($data,$path){
        $stm = "INSERT INTO users (name,email,password,course,phone,gender,birthDate,image) VALUES (?,?,?,?,?,?,?,?)";
        $resultStm = $this->conn->prepare($stm);
        $resultStm->bindParam(1,$data['name']);
        $resultStm->bindParam(2,$data['email']);
        $resultStm->bindParam(3,$data['password']);
        $resultStm->bindParam(4,$data['course']);
        $resultStm->bindParam(5,$data['phone']);
        $resultStm->bindParam(6,$data['gender']);
        $resultStm->bindParam(7,$data['birthDate']);
        $resultStm->bindParam(8,$path);
       
       if($resultStm->execute()){
            return true;
       }
       
       return false;
    }

}