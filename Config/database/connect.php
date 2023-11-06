<?php
namespace App\Connect;
use PDO;

class Connect{
    private $user;
    private $pass;
    private $pdo;

    function __construct()
    {
        $this->user = 'root';
        $this->pass = '';
        $pdo = $this->pdo;
    
    }

    public function connect(){
        $pdo = new PDO("mysql:host=localhost;dbname=academy;",$this->user,$this->pass);

        return $pdo;
    }
}
