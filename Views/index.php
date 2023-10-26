<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>

</head>
<body>
    <div class="box">
        <div class="container">
            <h2>Login</h2>
            <form action="../Controller/LoginController.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="email" placeholder="Your username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Your password">
                </div>
                <div class="form-group">
                    <input type="submit" value="Login">
                </div>
                <div class="form-group">
                    <p>Don't have an account? <a href="#">Register here</a></p>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>

</body>
</html>