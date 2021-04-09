<?php

if(isset($_POST['approve'])) {

    require '../../includes/dbh.inc.php';

    $approve = "Approve";
    $patid = $_POST['patid'];

    $sql = "UPDATE PATIENT SET PAT_STATUS = '$approve' WHERE PATIENT_ID = '$patid'";

    if(mysqli_query($conn, $sql)){
        header('Location: ../application.php');
    } else{
        echo 'ERROR: '. mysqli_error($conn);
    }

}

    