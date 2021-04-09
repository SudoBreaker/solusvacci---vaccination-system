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
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    background: linear-gradient(135deg,#0990d3,#ff1464);
}

.signup-container{
    max-width: 700px;
    width: 100%;
    background: #fff;
    padding:25px 30px;
    border-radius: 5px;
}

.signup-container .title{
    font-size: 25px;
    font-weight: 500;
    position: relative;
}

.signup-container .title::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    background: linear-gradient(135deg,#0990d3,#ff1464);
}

.signup-container form .user-details{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px 0 12px 0;
}

form .user-details .input-box{
    margin-bottom: 15px;
    width: calc(100% / 2 - 20px);
}

.user-details .input-box .details{
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
}

.user-details .input-box input{
    height: 45px;
    width: 100%;
    outline:none;
    border: 0;
    border-radius: 20px;
    border-bottom: 2px solid #444;
    padding: 12px 40px 12px 20px;
    font-size: 16px;
    border-bottom-width: 2px;
    transition: all 0.3s ease;
}

.input-box input:focus,.input-box input:focus::placeholder{
    color: #000000;
    border-bottom: 3px solid #ff1464;
}

form .gender-details .gender-title{
    font-size: 20px;
    font-weight: 500;
}

form .gender-details .category{
    display: flex;
    width: 50%;
    margin: 14px 0;
    justify-content: space-between;
}

.gender-details .category label{
    display: flex;
    align-items: center;
}
.gender-details .category .dot{
    height: 18px;
    width: 18px;
    background: #d9d9d9;
    border-radius: 50%;
    margin-right: 10px;
    border: 5px solid transparent;
}

#dot-1:checked ~ .category label .one,
#dot-2:checked ~ .category label .two{
    border-color: #d9d9d9;
    background: #ff1464;
}

form input[type="radio"]{
    display: none;
}

form .button{
    height: 45px;
    margin: 45px 0;
    width: 100%;
    outline: none;
    cursor: pointer;
    color: #fff;
    border: none;
    font-size: 18px;
    font-weight: 500;
    border-radius: 5px;
    letter-spacing: 1px;
    background: linear-gradient(135deg,#0990d3,#ff1464);
}

form .button:hover{
    background: linear-gradient(-135deg,#0990d3,#ff1464);
}

p a{
    text-decoration: none;
    color: #ff1464;
}

p a:hover{
    text-decoration: underline;
    color: #0990d3;
}

@media (max-width: 584px) {
    .signup-container{
        max-width: 100%;
    }

    form .user-details .input-box{
        margin-bottom: 15px;
        width: 100%;
    }

    .signup-container form .user-details{
        max-height: 300px;
        overflow-y: scroll;
    }    
}

</style>

  </head>

<body>
<div class="signup-container">
    <div class="title"><h5>REGISTRATION</h5></div>
    <?php
        if(isset($_GET['error'])) {
            if($_GET['error'] == "empty"){
                echo '<p class="error">Fill in all fields!</p>';
            }else if($_GET['error'] == "invalidemail"){
                echo '<p class="error">Invalid Email!</p>';
            }else if($_GET['error'] == "match"){
                echo '<p class="error">Password do not match!</p>';
            }else if($_GET["register"] == "success"){
                echo '<p class="success">Register succesful!</p>';
            }
        }
    ?>
    <form action="includes/signup.inc.php" method="post">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Names</span>
                <input type="text" name="fname" placeholder="Names">
            </div>
            <div class="input-box">
                <span class="details">Surname</span>
                <input type="text" name="lname" placeholder="Surname">
            </div>
            <div class="input-box">
                <span class="details">Identity Number</span>
                <input type="text" name="idnum" placeholder="Identity Number">
            </div>
            <div class="input-box">
                <span class="details">Email</span>
                <input type="text" name="email" placeholder="Email">
            </div>
            <div class="input-box">
                <span class="details">Phone</span>
                <input type="text" name="phone" placeholder="Phone">
            </div>
            <div class="input-box">
                <span class="province-title">Province</span>
                <select name="prov" id="">
                        <option value="">---</option>
                        <option value="Mpumalanga">Mpumalanga</option>
                        <option value="Guateng">Guateng</option>
                        <option value="Limpopo">Limpopo</option>
                        <option value="KZN">KZN</option>
                        <option value="North West">North West</option>
                        <option value="Western Cape">Western Cape</option>
                        <option value="Eastern Cape">Eastern Cape</option>
                        <option value="Free State">Free State</option>
                        <option value="Northern Cape">Northern Cape</option>
                </select>
            </div>
            <div class="input-box">
                <span class="details">City</span>
                <input type="text" name="city" placeholder="City">
            </div> 
            <div class="input-box">
                <span class="details">Street</span>
                <input type="text" name="street" placeholder="Street">
            </div>
            <div class="input-box">
                <span class="details">Zip</span>
                <input type="text" name="zip" placeholder="Zip">
            </div>
            <div class="input-box">
                <span class="details">Any Disability?</span>
                <select name="disa" id="">
                        <option value="">---</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
            </div>
            <div class="input-box">
                    <span class="details">Essential Worker</span>
                    <select name="eworker" id="">
                        <option value="">---</option>
                        <option value="Police">Police</option>
                        <option value="Nurse">Nurse</option>
                        <option value="Doctor">Doctor</option>
                        <option value="Soldier">Soldier</option>
                        <option value="None">None</option>
                    </select>
            </div>
            <div class="input-box">
                    <span class="details">Gender</span>
                    <select name="gender" id="">
                        <option value="">---</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
            </div>
            <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="pwd" placeholder="Password">
            </div>
            <div class="input-box">
                    <span class="details">Repeat Password</span>
                    <input type="password" name="re_pwd" placeholder="Repeat Password">
            </div>

            
            <button class="button" name="signup-submit" type="submit">REGISTER</button>
        </div>
    </form>
    <p class="ss">Registered ? <a href="login.php">LOGIN</a></p>
</div>
</body>
</html>



