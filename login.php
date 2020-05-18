<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="
    IE=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    
    </head>
    <body>
        <div class="login"> 
            <div class="avatar">
                <i class="fa fa-user"></i>
            </div>
            <h2>Login Form</h2>
            <form method="post" action="validation.php" >
            <div class="box-login">
                <i class="fas fa-bookmark"></i>
                <input type="text" name="nama" placeholder="nama" >
            </div>
            <div class="box-login">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" placeholder="email" >
            </div>
            <div class="box-login">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="password">
            </div>
            <button type="submit" class="btn-login">
              Login
            </button>
            <div class="bottom">
                <a href="register.php">Register</a>
                <a href="forgot.php">Forgot password</a>
            </div>
</form>

        </div>
        </body>
</html> 