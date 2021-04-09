<?php

if(isset($_POST['decline'])) {

    require '../../includes/dbh.inc.php';

    $decline = "Decline";
    $patid = $_POST['patid'];

    $sql = "UPDATE PATIENT SET PAT_STATUS = '$decline' WHERE PATIENT_ID = '$patid'";

    if(mysqli_query($conn, $sql)){
        header('Location: ../application.php');
    } else{
        echo 'ERROR: '. mysqli_error($conn);
    }

}