<?php

require_once '../database/conn.php';


function login($data) {
   $conn =  connect();
   //var_dump($data);


    $sql = "SELECT * FROM users WHERE email = ?";
    $resultSql = mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($resultSql,'s',$data['email']);
    mysqli_execute($resultSql);

    $result = mysqli_stmt_get_result($resultSql);
    $returnData = mysqli_fetch_assoc($result);


    if(mysqli_num_rows($result) == 0 ){
        return false;
    }



    $conn->close();
    return $returnData;



  

}


