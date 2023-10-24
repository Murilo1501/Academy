<?php

require_once '../database/conn.php';


function login($data) {
   $conn =  connect();
    var_dump($data);

    $sql = "SELECT * FROM users WHERE email = ?";
    $resultSql = $conn->prepare($sql);
    $resultSql->bindParam(1,$data['email']);
    $resultSql->execute();

    $resultData = $resultSql->fetch(PDO::FETCH_ASSOC);
    //var_dump($resultData);

    if(count($resultData) > 0 ){
        if($data['password'] == $resultData['password']){
        return $resultData;
       }

    } 

    return false;

}


