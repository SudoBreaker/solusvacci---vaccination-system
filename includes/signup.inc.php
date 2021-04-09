<?php

if(isset($_POST['signup-submit'])){

    require 'dbh.inc.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $idnum = $_POST['idnum'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $prov = $_POST['prov'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $disa = $_POST['disa'];
    $eworker = $_POST['eworker'];
    $gender = $_POST['gender'];
    $pwd = $_POST['pwd'];
    $re_pwd = $_POST['re_pwd'];
    $stat = " ";
    $vac = " ";

    if(empty($fname) || empty($lname) || empty($idnum) || empty($email) || empty($phone || empty($prov) || empty($pwd) 
    || empty($disa) ||empty($eworker) || empty($street) || empty($city)|| empty($zip) || empty($gender)) || empty($re_pwd)){

        header("Location: ../signup.php?error=empty&fname=".$fname."&lname=".$lname."&idnum=".
        $idnum."&gender".$gender."&email=".$email."&prov=".$prov."&disa=".$disa."&phone=".$phone."&street=".$street."&city=".$city."&zip=".$zip."&eworker=".$eworker);
        exit();
    
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=invalidemail&fname=".$fname."&lname=".$lname."&idnum=".
        $idnum."&gender".$gender."&phone=".$phone."&prov=".$prov."&disa=".$disa."&street=".$street."&city=".$city."&zip=".$zip."&eworker=".$eworker);
        exit();

    }else if($pwd !== $re_pwd){
        header("Location: ../signup.php?error=match&fname=".$fname."&lname=".$lname."&idnum=".
        $idnum."&gender".$gender."&prov=".$prov."&email=".$email."&disa=".$disa."&phone=".$phone."&street=".$street."&city=".$city."&zip=".$zip."&eworker=".$eworker);
        exit();
    }else {

        $sql = "INSERT INTO PATIENT (PAT_IDNUM, PAT_FNAME,PAT_LNAME, PAT_GENDER, PAT_EMAIL, PAT_PHONE, PAT_PROV, PAT_STREET, PAT_CITY,
        PAT_ZIP, PAT_DISABILITY,PAT_STATUS, PAT_VACCINATED, PAT_ESSENTIAL, PAT_PASSWORD) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signup.php?error=sqlerror");
            exit();
        }else{
            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "sssssssssssssss",$idnum,$fname,$lname,$gender,$email,$phone,$prov,
            $street,$city,$zip,$disa,$eworker, $stat,$vac, $hashedPwd);
            mysqli_stmt_execute($stmt);
            header("Location: ../signup.php?register=success");
            exit();
            
        }
    }
    myqli_stmt_close($stmt);
    myqli_close($conn);



















}else {
    header("Location: ../signup.php");
}