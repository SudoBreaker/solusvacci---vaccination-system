<?php

if(isset($_POST['login-submit'])){

    require 'dbh.inc.php';

    $username = $_POST['idemail'];
    $password = $_POST['pwd'];

    if(empty($username) || empty($password)){
        header("Location: ../login.php?error=empty");
        exit();

    }else{
        $sql = "SELECT * FROM PATIENT WHERE PAT_EMAIL=? OR PAT_IDNUM=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../login.php?error=sqlerror");
            exit();

        }else {

            mysqli_stmt_bind_param($stmt,"ss",$username,$username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['PAT_PASSWORD']);
                if($pwdCheck == false){
                    header("Location: ../login.php?error=wrongpwd");
                    exit();
                }else if($pwdCheck == true){
                    session_start();
                    $_SESSION['pat_id'] = $row['PATIENT_ID'];
                    $_SESSION['pat_idnum'] = $row['PAT_IDNUM'];
                    $_SESSION['pat_fname'] = $row['PAT_FNAME'];
                    $_SESSION['pat_lname'] = $row['PAT_LNAME'];
                    $_SESSION['pat_gender'] = $row['PAT_GENDER'];
                    $_SESSION['pat_email'] = $row['PAT_EMAIL'];
                    $_SESSION['pat_phone'] = $row['PAT_PHONE'];
                    $_SESSION['pat_street'] = $row['PAT_STREET'];
                    $_SESSION['pat_city'] = $row['PAT_CITY'];
                    $_SESSION['pat_zip'] = $row['PAT_ZIP'];
                    $_SESSION['pat_eworker'] = $row['PAT_ESSENTIAL'];
                    $_SESSION['pat_prov'] = $row['PAT_PROV'];
                    
                    header("Location: ../index.php?login=success");
                    exit();

                }else{
                    header("Location: ../login.php?error=wrongpwd");
                    exit();
                }

            }else{
                header("Location: ../login.php?error=nouser");
            }

        }
    }


















}else{
    header("Location: ../login.php");
    exit();
}