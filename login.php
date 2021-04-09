<?php
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Solus Vacci</title>
    <style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    color: #444;
}
  
body{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    width: 100vw;
}

.login{
    text-align: center;
    position: relative;
    width: 280px;
}

input, button{
    width: 100%;
    border: 0;
    border-radius: 20px;
}

input{
    border-bottom: 2px solid #444;
    padding: 12px 40px 12px 20px;
}

input, button, p, a{
    font-size: 13.3333px;
    font-weight: 600;
}

.group{
    margin-bottom: 10px;
    position: relative;
}

button{
    padding: 12px;
    background: linear-gradient(135deg,#575757,#353434);
    margin-bottom: 20px;
    cursor: pointer;
}

button:hover{
    background: linear-gradient(-135deg,#575757,#353434);
}

button, button i{
    color: #fff;
}

button i{
    margin-right: 5px;
}

p{
    margin-bottom: 20px;
}

i.fa.fa-empire, a{
    color: #69bde7;
}

i.fa.fa-empire{
    font-size: 60px;
    margin-bottom: 20px;
}

h2{
    margin-bottom: 20px;
}

input:focus,input:focus::placeholder, input:focus+i{
    color: #000000;
}

input:focus, button:focus{
    outline: 0;
}

body::before, body:after{
    content: "";
    position: absolute;
    height: 300px;
    width: 500px;
}

body::before{
    background-image: linear-gradient(to right,#575757,#353434);
    bottom: 0;
    left: 0;
    clip-path: polygon(0 0, 0 100%, 100% 100%);
}

body:after{
    background-image: linear-gradient(to right,#575757,#353434);
    top: 0;
    right: 0;
    clip-path: polygon(100% 0, 0 0, 100% 100%);
}

@media(max-width:767px){
    body:before, body:after{
        height: 150px;
        width: 300px;
    }
}
</style>
  </head>
<body>
<div class="login">
    <i class="fa fa-empire"></i>
    <h2>Solusvacci</h2>
    <form class="login-form" action="includes/login.inc.php" method='post'>
        <div class="group"><input class="input" type="text" name="idemail" placeholder="ID/Email"></div>
        <div class="group"><input class="input" type="password" name="pwd" placeholder="Password"></div>
        <button class="button" name="login-submit" type="submit"> <i class="fa fa-send"></i> LOGIN</button>
    </form>
    <p class="fs">Forgot <a href="#">Username</a> / <a href="#">Password</a> ? </p>
    <p class="ss">Haven't Registered ? <a href="signup.php">REGISTER</a></p>
</div>
</body>
</html>



