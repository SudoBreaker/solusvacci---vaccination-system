<?php
    require 'includes/workerheader.php';
?>

<?php

  if(isset($_SESSION['hw_id'])) {

    $city = $_SESSION['hw_workcity'];

    $mysqli = new mysqli("localhost","root","","solusvacci") or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT P.PATIENT_ID,V.APP_ID, P.PAT_FNAME, P.PAT_LNAME, V.APP_DATE, V.APP_VACCICODE, P.PAT_STATUS 
    FROM VACCI_APP V, PATIENT P WHERE V.PATIENT_ID = P.PATIENT_ID
    AND V.APP_CITY = '$city' AND P.PAT_STATUS = 'Approve' AND P.PAT_VACCINATED = ''") or die($mysqli->error);
    
  ?>


<div class="page-content p-5" id="content">

  <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>

  <table class="table" style="color:#ffffff">
  <thead>
  <tr>
    <th>Vaccination List</th>
  </tr>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Date</th>
      <th scope="col">Vaccine Code</th>
      <th scope="col">Vaccinated</th>
    </tr>
  </thead>
  <tbody>

    <?php
      while($row = $result->fetch_assoc()):
   ?>

<tr>
      <th scope="row"><?php echo $row['APP_ID'];?></th>
      <td><?php echo $row['PAT_FNAME'];?></td>
      <td><?php echo $row['PAT_LNAME'];?></td>
      <td><?php echo $row['APP_DATE'];?></td>
      <td><?php echo $row['APP_VACCICODE'];?></td>

      <form action="includes/vaccinated.inc.php" method="post">
      <?php 
        echo '<input type="hidden" name="patid" value="'.$row['PATIENT_ID'].'">'
      ?>
        <td><button name="vacci"><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"></button></td>
      </form>
      
  </tr>
    <?php endwhile; ?>
</table>

</div>


<?php
    require 'includes/workerfooter.php';
  }else{
?>

<div class="page-content p-5" id="content">


  <h1 style="color:white;">ERROR ACCURED</h1>

</div>
<?php
  }
?>

