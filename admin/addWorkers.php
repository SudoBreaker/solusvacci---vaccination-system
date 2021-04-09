<?php
    require 'includes/adminheader.php';
?>

<?php

  if(isset($_SESSION['sys_id'])) {
    echo
'<style>
.page-content .signup-container{
    margin: auto 300px;
    justify-content: center;
    align-items: center;
  }

  .page-content .signup-container form .user-details{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .page-content form .user-details .input-box{
    width: calc(100% / 2 - 20px);
  }

  .page-content .user-details .input-box input{
    height: 45px;
    width: 100%;
  }

  .page-content .signup-container form .button{
    margin: 20px auto;
    height: 100%;
    width: 100%;
    outline: none;
  }
</style>

<div class="page-content p-5" id="content">
  <!-- Toggle button -->
  <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
 
  <form action="includes/addworker.inc.php" method="post">
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
                    <span class="details">Gender</span>
                    <select name="gender" id="">
                        <option value="">---</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
            </div>
            <h2>Working Details</h2>
            <div class="input-box">
                <span class="details">Working Province</span>
                <select name="wprov" id="">
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
                <span class="details">Working City</span>
                <input type="text" name="wcity" placeholder="Working City">
            </div>
            <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="pwd" placeholder="Password">
            </div>
            <div class="input-box">
                    <span class="details">Repeat Password</span>
                    <input type="password" name="re_pwd" placeholder="Repeat Password">
            </div>

            
            <button class="button" name="addworker-submit" type="submit">Add Worker</button>
        </div>
    </form>
</div>'
;
    require 'includes/adminfooter.php';

  }else{
    header("Location ../../healthlogin.php");
  }
?>

