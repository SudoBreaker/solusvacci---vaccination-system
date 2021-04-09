<?php
  session_start();
?>

<?php

  if(isset($_SESSION['sys_id'])) {
    echo
'<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
  background: #599fd9;
  background-image: linear-gradient(to right,#ffffff,#ffffff);
  min-height: 100vh;
  overflow-x: hidden;
}

 .vertical-nav {
  min-width: 17rem;
  width: 17rem;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
  transition: all 0.4s;
}

.vertical-nav .bg-light{
    color: #ffffff;
    background-image: linear-gradient(to right,#0990d3,#ff1464);
}

.vertical-nav .bg-light .media-body{
    margin-left: 10px;
}

.page-content {
  background-image: linear-gradient(to right,#082331,#082331);
  color: #ffffff;
  width: calc(100% - 17rem);
  margin-left: 17rem;
  transition: all 0.4s;
} 

#sidebar.active {
  margin-left: -17rem;
}

#content.active {
  width: 100%;
  margin: 0;
}

.separator {
  margin: 3rem 0;
  border-bottom: 1px dashed #fff;
}

.text-uppercase {
  letter-spacing: 0.1em;
}
.text-gray {
  color: #aaa;
}
.nav-link{
    text-transform: capitalize;
}
.nav-link:hover{
    background:#f3f2f2;
}
.text-primary{
    color:#7579e7 !important;
}
@media (max-width: 768px) {
  #sidebar {
    margin-left: -17rem;
  }
  #sidebar.active {
    margin-left: 0;
  }
  #content {
    width: 100%;
    margin: 0;
  }
  #content.active {
    margin-left: 17rem;
    width: calc(100% - 17rem);
  }
}


  
    </style>
</head>
<body>
 
<!-- Vertical navbar -->

<div class="vertical-nav" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center">
      <img loading="lazy" src="images/p-1.png" alt="..." width="80" height="80" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
        <h4 class="m-0">Admin</h4>
        <p class="font-weight-normal mb-0">Solusvacci Admin</p>
      </div>
    </div>
  </div>

  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="admin.php" class="nav-link text-dark">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                home
            </a>
    </li>
    <li class="nav-item">
      <a href="addWorkers.php" class="nav-link text-dark">
                <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                Add Workers
            </a>
    </li>
    <li class="nav-item">
      <a href="workers.php" class="nav-link text-dark">
                <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                Workers
            </a>
    </li>

  </ul>

  <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Reports</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="report.php" class="nav-link text-dark">
                <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                View Report
            </a>
    </li>
  </ul>

  <form action="includes/logout.inc.php" method="post">
        <button class="btn solid" name="logout-submit">LOGOUT</button>
  </form>
</div>
<!-- End vertical navbar -->';
  }else{
    header("Location ../../healthlogin.php");
  }
?>