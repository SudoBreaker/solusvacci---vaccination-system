<?php
    require 'includes/adminheader.php';
?>

<?php

  if(isset($_SESSION['sys_id'])) {
    echo

'<div class="page-content p-5" id="content">
  <!-- Toggle button -->
  <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>

  <table class="table" style="color:#ffffff">
  <thead>
  <input type="text" name="" id="" placeholder="Search">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Identity Numebr</th>
      <th scope="col">Date</th>
      <th scope="col">Province</th>
      <th scope="col">City</th>
      <th scope="col">Vacinated</th>
      <th scope="col">Not Vacinated</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>9403246043992</td>
      <td>2021/02/27</td>
      <td>Mpumalanga</td>
      <td>Witbank</td>
      <td>200</td>
      <td>350</td>
      <td><button class="bg-white">View Detail Report</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>9104166042087</td>
      <td>2021/02/27</td>
      <td>Guateng</td>
      <td>Pretoria</td>
      <td>951</td>
      <td>21350</td>
      <td><button class="bg-white">View Detail Report</button></td>
    </tr>
    <tr>
    <th scope="row">3</th>
      <td>8905166072088</td>
      <td>2021/02/27</td>
      <td>Limpopo</td>
      <td>Polokwane</td>
      <td>2512</td>
      <td>10324</td>
      <td><button class="bg-white">View Detail Report</button></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>9104166042087</td>
      <td>2021/02/27</td>
      <td>Guateng</td>
      <td>Midrand</td>
      <td>992</td>
      <td>11324</td>
      <td><button class="bg-white">View Detail Report</button></td>
    </tr>
    </tbody>
</table>

</div>';
  }else{
    header("Location ../healthlogin.php");
  }
?>


<?php
    require 'includes/adminfooter.php';
?>