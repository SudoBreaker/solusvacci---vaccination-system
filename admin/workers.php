<?php
    require 'includes/adminheader.php';
?>

<?php

  if(isset($_SESSION['sys_id'])) {
    
    $mysqli = new mysqli("localhost","root","","solusvacci") or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM HEALTH_WORKER") or die($mysqli->error);
    
    ?>

<div class="page-content p-5" id="content">
  <!-- Toggle button -->
  <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
 
  

  <table class="table" style="color:#ffffff">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Identity Numebr</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Working province</th>
      <th scope="col">Working city</th>
      <th scope="col"></th>
    </tr>
  </thead>
   
   <?php
      while($row = $result->fetch_assoc()):
   ?>
      <tr>
        <td><?php echo $row['HW_ID'];?></td>
        <td><?php echo $row['HW_IDNUM'];?></td>
        <td><?php echo $row['HW_FNAME'];?></td>
        <td><?php echo $row['HW_LNAME'];?></td>
        <td><?php echo $row['HW_GENDER'];?></td>
        <td><?php echo $row['HW_EMAIL'];?></td>
        <td><?php echo $row['HW_PHONE'];?></td>
        <td><?php echo $row['HW_WORKING_PROV'];?></td>
        <td><?php echo $row['HW_WORKING_CITY'];?></td>
        <td><button class="bg-danger">DELETE</button></td>
      </tr>
      <?php endwhile; ?>
   
  
</table>

</div>



<?php
    require 'includes/adminfooter.php';
}
?>