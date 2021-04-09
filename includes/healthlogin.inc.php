<?php

if(isset($_POST['health-login'])){

    require 'dbh.inc.php';

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    $sql = "SELECT * FROM SYSTEM_ADMIN WHERE SYS_USERNAME=?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../healthlogin.php?error=sqlerror");
        exit();

    }else {

        mysqli_stmt_bind_param($stmt,"s",$username,);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)) {
            $pwdCheck = password_verify($pwd, $row['SYS_PASSWORD']);
            if($pwdCheck == false){
                header("Location: ../login.php?error=wrongpwd");
                exit();
            }else if($pwdCheck == true){

                if($username == "Admin") {
                    session_start();
                    $_SESSION['sys_id'] = $row['SYS_ID'];
                    
                
                    header("Location: ../admin/admin.php?login=success");
                    exit();
                }
                
            }else{
                header("Location: ../login.php?error=wrongpwd");
                exit();
            }

        }else{
            $sql = "SELECT * FROM HEALTH_WORKER WHERE HW_IDNUM=?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../healthlogin.php?error=sqlerror");
        exit();

    }else {

        mysqli_stmt_bind_param($stmt,"s",$username,);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)) {
            $pwdCheck = password_verify($pwd, $row['HW_PASSWORD']);
            if($pwdCheck == false){
                header("Location: ../../healthlogin.php?error=wrongpwd");
                exit();
            }else if($pwdCheck == true){

                session_start();
                $_SESSION['hw_id'] = $row['HW_ID'];
                $_SESSION['hw_idnum'] = $row['HW_IDNUM'];
                $_SESSION['hw_fname'] = $row['HW_FNAME'];
                $_SESSION['hw_lname'] = $row['HW_LNAME'];
                $_SESSION['hw_gender'] = $row['HW_GENDER']; 
                $_SESSION['hw_email'] = $row['HW_EMAIL'];
                $_SESSION['hw_phone'] = $row['HW_PHONE'];
                $_SESSION['hw_workprov'] = $row['HW_WORKING_PROV'];
                $_SESSION['hw_workcity'] = $row['HW_WORKING_CITY'];
                $_SESSION['hw_prov'] = $row['HW_PROV'];
                $_SESSION['hw_city'] = $row['HW_CITY'];
                $_SESSION['hw_zip'] = $row['HW_ZIP'];
                
                    header("Location: ../worker/application.php?login=success");
                    exit();
                
            }else{
                header("Location: ../../healthlogin.php?error=wrongpwd");
                exit();
            }

        }else{
            header("Location: ../../healthlogin.php?error=nouser");
        }
        }

    }

  }
}
