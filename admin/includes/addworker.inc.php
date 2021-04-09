<?php

if(isset($_POST['addworker-submit'])){

    require '../../includes/dbh.inc.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $idnum = $_POST['idnum'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $prov = $_POST['prov'];
    $wprov = $_POST['wprov'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $wcity = $_POST['wcity'];
    $zip = $_POST['zip'];
    $gender = $_POST['gender'];
    $pwd = $_POST['pwd'];
    $re_pwd = $_POST['re_pwd'];

    if(empty($fname) || empty($lname) || empty($idnum) || empty($email) || empty($phone || empty($prov) || empty($pwd) 
    || empty($disa) ||empty($eworker) || empty($street) || empty($city)|| empty($zip) || empty($gender)) || empty($re_pwd)){

        header("Location: ../addWorkers.php?error=empty&fname=".$fname."&lname=".$lname."&idnum=".
        $idnum."&gender".$gender."&email=".$email."&prov=".$prov."&disa=".$disa."&phone=".$phone."&street=".$street."&city=".$city."&zip=".$zip."&eworker=".$eworker);
        exit();
    
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../addWorkers.php?error=invalidemail&fname=".$fname."&lname=".$lname."&idnum=".
        $idnum."&gender".$gender."&phone=".$phone."&prov=".$prov."&disa=".$disa."&street=".$street."&city=".$city."&zip=".$zip."&eworker=".$eworker);
        exit();

    }else if($pwd !== $re_pwd){
        header("Location: ../addWorkers.php?error=match&fname=".$fname."&lname=".$lname."&idnum=".
        $idnum."&gender".$gender."&prov=".$prov."&email=".$email."&disa=".$disa."&phone=".$phone."&street=".$street."&city=".$city."&zip=".$zip."&eworker=".$eworker);
        exit();
    }else {

        $sql = "INSERT INTO HEALTH_WORKER (HW_IDNUM, HW_FNAME,HW_LNAME, HW_GENDER, HW_EMAIL, HW_PHONE, HW_WORKING_PROV, HW_WORKING_CITY, HW_PROV,
        HW_CITY, HW_ZIP, HW_PASSWORD) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../addWorkers.php?error=sqlerror");
            exit();
        }else{
            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "ssssssssssss",$idnum,$fname,$lname,$gender,$email,$phone,$wprov,
            $wcity,$prov,$city,$zip,$hashedPwd);
            mysqli_stmt_execute($stmt);
            header("Location: ../addWorkers.php?added=success");
            exit();
            
        }
    }
    myqli_stmt_close($stmt);
    myqli_close($conn);



















}else {
    header("Location: ../addWorkers.php");
}