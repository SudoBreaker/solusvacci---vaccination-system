<?php

if(isset($_POST['application-submit'])){

    require 'dbh.inc.php';

    $patid = $_POST['patid'];
    $vcode = $_POST['vcode'];
    $date = date(DATE_RFC822);
    $prov = $_POST['prov'];
    $city = $_POST['city'];


    $chestpain = $_POST['chestpain'];
    $hiv = $_POST['hiv'];
    $sob = $_POST['sob'];
    $chrocough = $_POST['chrocough'];
    $highblood = $_POST['highblood'];
    $highcho = $_POST['highcho'];
    $resp = $_POST['resp'];

    if(empty($patid) || empty($vcode) || empty($date) || empty($prov) || empty($city) 
    || empty($chestpain) ||empty($hiv) || empty($sob) || empty($chrocough)|| empty($highblood) || empty($highcho) || empty($resp)){

        header("Location: ../application.php?error=empty&patid=".$patid."&vcode=".$vcode."&date=".
        $date."&prov".$prov."&city=".$city."&chestpain=".$chestpain."&hiv=".$hiv."&sob=".$sob."&chrocough=".$chrocough."&highblood=".$highblood."&highcho=".$highcho."&resp=".$resp);
        exit();
    }else {

        $sql = "SELECT APP_VACCICODE FROM VACCI_APP WHERE APP_VACCICODE=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../application.php?error=sqlerror");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, "s", $vcode);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0){
                header("Location: ../application.php?error=userapplied");
                exit();
            }else{
                $sql = "INSERT INTO VACCI_APP (PATIENT_ID,APP_DATE, APP_PROV, APP_CITY, APP_VACCICODE) VALUES (?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
        
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../application.php?error=sqlerror");
                    exit();
                }else{
        
                    mysqli_stmt_bind_param($stmt, "sssss",$patid,$date,$prov,$city,$vcode);
                    mysqli_stmt_execute($stmt);
                    
                    $sql = "INSERT INTO MEDICAL_RECORD (PATIENT_ID,MR_CHESTPAIN, MR_HIV, MR_SOB, MR_CHRONIC, MR_HBP, MR_HIGHCHO, MR_RESP) VALUES (?,?,?,?,?,?,?,?)";
                    $stmt = mysqli_stmt_init($conn);
        
                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        header("Location: ../application.php?error=sqlerror");
                        exit();
                    }else{
        
                        mysqli_stmt_bind_param($stmt, "ssssssss",$patid,$chestpain,$hiv,$sob,$chrocough,$highblood,$highcho,$resp);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../application.php?register=success");
                        exit();
                    }
                    exit();
                    
                }



            }
        }
           

        
    }
    myqli_stmt_close($stmt);
    myqli_close($conn);



















}else {
    header("Location: ../application.php");
}