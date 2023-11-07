<?php
if(!isset($_SESSION['user'])){
    header("Location:/academyOne/");
}

$image = $_SESSION['user']['image'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>

    <style>
        .img{
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    dashboard
    <a href="View/logout.php"><button>Logout</button></a>
    <?php 
        echo "<img class='img' src='$image'>";
        echo $_SESSION['user']['name'];
        echo $_SESSION['user']['email'];

        echo "<table>";

            echo "<tr>
                    <th>#</th>
                    <th>photo</th>
                    <th>name</th>
                    <th>birthDate</th>
                    <th>gender</th>
                    <th>phone</th>
                    <th>email</th>
                    <th>course</th>
                    <th>edit</th>
                </tr>";
       
            foreach($index as $data){
                echo "<tr>
                <td>$data[id]</th>
                <td><img class='img' src='$data[image]'></img></td>
                <td>$data[name]</td>
                <td>$data[birthDate]</td>
                <td>$data[gender]</td>
                <td>$data[phone]</td>
                <td>$data[email]</td>
                <td>$data[course]</td>
                <td>edit</td>
            </tr>";
            }

        echo "</table>";
        
    ?>
</body>
</html>