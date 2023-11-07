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
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        #header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
        }

        #user-profile {
            display: flex;
            align-items: center;
        }

        #user-photo {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        #user-name {
            font-size: 18px;
        }

        #counters {
            display: flex;
            align-items: center;
            
        }

        #user-count, #ticket-count {
            margin-right: 20px;
        }

        #user-table {
            background-color: #fff;
            border-radius: 10px;
            margin: 20px;
            padding: 20px;
        }

        #search-bar {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .img{
            width:50px;
            height:50px;
            border-radius:50%;
        }
    </style>
</head>
<body>
   
    <?php 
        
    ?>

<div id="header">
        <div id="user-profile">
            <img class="img" id="user-photo" src="<?php echo  $image?>" alt="User Photo">
            <div id="user-name"><?php echo $_SESSION['user']['name']?></div>
        </div>
        <div id="counters">
            <div id="user-count">Users: 100</div>
            <div id="ticket-count">Tickets: 50</div>
            <a href="View/logout.php"><button>Logout</button></a>
        </div>

        .
    </div>

    <div id="user-table">
        <input type="text" id="search-bar" placeholder="Search Users">
      <?php 
      
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
    </div>

    
</body>
</html>