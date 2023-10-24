<?php
    session_start();

if(!isset($_SESSION['email'])){
    header("Location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logado</title>
</head>
<body>
    <?php echo $_SESSION['email']['email']?>

    <button><a href="../Controller/logout.php">Sair</a></button>
</body>
</html>