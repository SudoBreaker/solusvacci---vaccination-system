<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- css stylesheet link -->
    <link rel="stylesheet" href="css/style.css">
    <title>Solus Vacci</title>
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="login-form">
    <form action="includes/healthlogin.inc.php" method="post">
        <h2 class="text-center">Health Worker</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name="username"placeholder="Username/ID" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="pwd" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="health-login" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <a href="#" class="float-right">Forgot Password?</a>
        </div>        
    </form>
</div>
</body>
</html>