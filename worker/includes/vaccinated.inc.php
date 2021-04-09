<?php

if(isset($_POST['vacci'])) {

    require '../../includes/dbh.inc.php';

    $vacci = "YES";
    $patid = $_POST['patid'];

    $sql = "UPDATE PATIENT SET PAT_VACCINATED = '$vacci' WHERE PATIENT_ID = '$patid'";

    if(mysqli_query($conn, $sql)){
        header('Location: ../vaccilist.php');
    } else{
        echo 'ERROR: '. mysqli_error($conn);
    }

}