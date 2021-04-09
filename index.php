<?php
  require 'includes/header.php';
?>

<style>
  /* #home{
    background-image: linear-gradient(to right,#ffffff,#ffffff);
  }

  #home .content h1{
    font-size: 2rem;
    color: #000000;
  }

  #home .content h1 span{
    color: #46c0fd;
  }

  #home .content h3{
    font-size: 2rem;
    color: #000000;
  }

  .btnR{
    color: #46c0fd;
    border: 2px solid #000;
  }
  */

  .mid{
    width: 100%;
    height: 100vh;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-content: center;
    text-align: center;
  }

  .mid img{
    height: 100%;
    width: 100%;
    pointer-events: none;
    object-fit: cover;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%); 
  }

  .hero{
    position: relative;
  }

  .hero h2{
    font-weight: bold;
  }

  .mid .hero p{
    width: 55%;
    font-size: 1.1rem;
    letter-spacing: 0.2px;
  }

</style>

<?php
  if(isset($_SESSION['pat_id'])) {
    $fname = $_SESSION['pat_fname'];
    $lname = $_SESSION['pat_lname'];
    $email = $_SESSION['pat_email'];
    $phone = $_SESSION['pat_phone'];
    $idnum = $_SESSION['pat_idnum'];
    $gender = $_SESSION['pat_gender'];
    $prof = $_SESSION['pat_eworker'];
?>
    <h3 class="display-4"><?php echo $fname.' '.$lname?></h3>
            <p class="text-muted"><?php echo 'Profession: '.$prof?></p>
                <table class="">
                    <td class="text-muted">ID</td>
                    <td>:</td>
                    <td><?php echo $idnum?></td>
                </table>
                <table class="">
                    <td class="text-muted">Email</td>
                    <td>:</td>
                    <td><?php echo $email?></td>
                </table>
                    <table class="">
                    <td class="text-muted">Phone</td>
                    <td>:</td>
                    <td><?php echo $phone?></td>
                </table>
                </table>
                <table class="">
                <td class="text-muted">Gender</td>
                <td>:</td>
                <td><?php echo $gender?></td>
            </table>
      <br>
      <button class="button"><a href="application.php">Apply for vaccination</a></button>
      <br>
      <br>
      <button class="button">Edit Your Profile</button>
                  
  <?php
    }else {
  ?>
    
    <main>

            <section class="home" id="home">
                <!-- <div class="overlay">            
                  <p>You are logged out!</p>
              </div> -->
              <!-- <div class="row min-vh-100 align-items-center text-center text-md-left">

                  <div class="col-md-6 pr-md-5">
                    <img src="images/vaccine.png" width="80%" alt="A Dope Picture">
                  </div>

                  <div class="col-md-6 pl-md-5 content">
                    <h1><span>Don't</span> Wait, <span>Vaccinate!</span></h1>
                    <h3>Caring for you.</h3>
                    <a href=""><button class="btn btnR">Register Now!</button></a>
                  </div>
              </div> -->

              <div class="mid">
                    <img src="images/giphy.gif" width="100%" alt="A Dope Picture">
                    <div class="hero text-center">
                      <h2 class="text-light display-4">Register and get vaccinated</h2>
                      <p class="text-light mx-auto">Vaccinate, Beat Coronavirus, Stay Healthy</p>
                      <a href="#"><button class="btn solid">Register</button></a>
                    </div>
              </div>
            </section>

    </main>

<?php
    require 'includes/footer.php'; }
?>

