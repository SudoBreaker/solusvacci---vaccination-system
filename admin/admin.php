<?php
    require 'includes/adminheader.php';
?>


<?php

  if(isset($_SESSION['sys_id'])) {
    echo
      '<div class="page-content p-5" id="content">
  
        <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>

  
        <h2 class="display-4 text-white">SOLUSVACCI ADMIN</h2>

      </div>';
      require 'includes/adminfooter.php';

    }else{
      header("Location ../../healthlogin.php");
    }
  ?>
