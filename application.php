
<?php
  require 'includes/header.php';
?>

<style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

main{
    justify-content: center;
    align-items: center;
    padding: 10px;
    background: linear-gradient(135deg,#0990d3,#ff1464);
}

.application-container{
    max-width: 700px;
    width: 100%;
    background: #fff;
    padding:25px 30px;
    border-radius: 5px;
}

.application-container .title{
    font-size: 25px;
    font-weight: 500;
    position: relative;
}

.application-container .title::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    background: linear-gradient(135deg,#0990d3,#ff1464);
}

.application-container form .user-details{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px 0 12px 0;
}

form .user-details .input-box{
    margin-bottom: 15px;
    width: calc(100% / 2 - 20px);
}

.user-details .input-box .details{
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
}

.user-details .input-box input{
    height: 45px;
    width: 100%;
    outline:none;
    border: 0;
    border-radius: 20px;
    border-bottom: 2px solid #444;
    padding: 12px 40px 12px 20px;
    font-size: 16px;
    border-bottom-width: 2px;
    transition: all 0.3s ease;
}

.input-box input:focus,.input-box input:focus::placeholder{
    color: #000000;
    border-bottom: 3px solid #ff1464;
}

form .gender-details .gender-title{
    font-size: 20px;
    font-weight: 500;
}

form .gender-details .category{
    display: flex;
    width: 50%;
    margin: 14px 0;
    justify-content: space-between;
}

.gender-details .category label{
    display: flex;
    align-items: center;
}
.gender-details .category .dot{
    height: 18px;
    width: 18px;
    background: #d9d9d9;
    border-radius: 50%;
    margin-right: 10px;
    border: 5px solid transparent;
}

#dot-1:checked ~ .category label .one,
#dot-2:checked ~ .category label .two{
    border-color: #d9d9d9;
    background: #ff1464;
}

form input[type="radio"]{
    display: none;
}

form .button{
    height: 45px;
    margin: 45px 0;
    width: 100%;
    outline: none;
    cursor: pointer;
    color: #fff;
    border: none;
    font-size: 18px;
    font-weight: 500;
    border-radius: 5px;
    letter-spacing: 1px;
    background: linear-gradient(135deg,#0990d3,#ff1464);
}

form .button:hover{
    background: linear-gradient(-135deg,#0990d3,#ff1464);
}

p a{
    text-decoration: none;
    color: #ff1464;
}

p a:hover{
    text-decoration: underline;
    color: #0990d3;
}

@media (max-width: 584px) {
    .application-container{
        max-width: 100%;
    }

    form .user-details .input-box{
        margin-bottom: 15px;
        width: 100%;
    }

    .application-container form .user-details{
        max-height: 300px;
        overflow-y: scroll;
    }    
}

</style>
<?php
  if(isset($_SESSION['pat_id'])) {
    $fname = $_SESSION['pat_fname'];
    $lname = $_SESSION['pat_lname'];
    $email = $_SESSION['pat_email'];
    $phone = $_SESSION['pat_phone'];
    $idnum = $_SESSION['pat_idnum'];
    $prov = $_SESSION['pat_prov'];
    $patid = $_SESSION['pat_id'];

    echo 
'
<main>
<div class="application-container">
<div class="title"><h5>APPLICATION</h5></div>

<form action="includes/app.inc.php" method="post">
    <div class="user-details">
        
           <input type="hidden" name="patid" value="'.$patid.'" readonly>
       
        <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name="fname" value="'.$fname.'" readonly>
        </div>
        <div class="input-box">
            <span class="details">Surname</span>
            <input type="text" name="lname" value="'.$lname.'" readonly>
        </div>
        <div class="input-box">
            <span class="details">Vaccination code</span>
            <input type="text" name="vcode" value="'.$idnum.'" readonly>
        </div>
       
        <div class="input-box">
            <span class="details">Province</span>
            <input type="text" name="prov" value="'.$prov.'" readonly>
        </div>';
        ?>

        <?php
            if($prov == "Mpumalanga"){
                echo '<div class="input-box">
                <span class="province-title">Choose a city where you can get vaccinated:</span>
                <select name="city" id="">
                        <option value="">---</option>
                        <option value="Nelspruit">Nelspruit</option>
                        <option value="Witbank">Witbank</option>
                        <option value="Komatipoort">Komatipoort</option>
                        <option value="Middelburg">Middelburg</option>
                        <option value="Machadodorp">Machadorp</option>
                </select>
            </div>';
            }else if($prov == "Guateng"){
                echo '<div class="input-box">
                <span class="province-title">Choose a city where can get vaccinated:</span>
                <select name="city" id="">
                        <option value="">---</option>
                        <option value="Alberton">Alberton</option>
                        <option value="Alexandra">Alexandra</option>
                        <option value="Pretoria">Pretoria</option>
                        <option value="Midrand">Midrand</option>
                        <option value="Johannesburg">Johannesburg</option>
                </select>
            </div>';
            }else if($prov == "Limpopo"){
                echo '<div class="input-box">
                <span class="province-title">Choose a city where can get vaccinated:</span>
                <select name="city" id="">
                        <option value="">---</option>
                        <option value="Polokwane">Polokwane</option>
                        <option value="Maruleng">Maruleng</option>
                        <option value="Mskhuduthamaga">Mskhuduthamaga</option>
                        <option value="Musina">Musina</option>
                        <option value="Bela-Bela">Bela-Bela</option>
                </select>
            </div>';
            }else if($prov == "KZN"){
                echo '<div class="input-box">
                <span class="province-title">Choose a city where can get vaccinated:</span>
                <select name="city" id="">
                        <option value="">---</option>
                        <option value="Newcastle">Newcastle</option>
                        <option value="Ulundi">Ulundi</option>
                        <option value="Jozini">Jozini</option>
                        <option value="Umlalazi">Umlalazi</option>
                        <option value="Msinga">Msinga</option>
                </select>
            </div>';
            }else if($prov == "North West"){
                echo '<div class="input-box">
                <span class="province-title">Choose a city where can get vaccinated:</span>
                <select name="city" id="">
                        <option value="">---</option>
                        <option value="Mamusa">Mamusa</option>
                        <option value="Ratlou">Ratlou</option>
                        <option value="Rustenburg">Rustenburg</option>
                        <option value="Mahikeng">Mahikeng</option>
                        <option value="Matlosana">Matlosana</option>
                </select>
            </div>';
            }else if($prov == "Western Cape"){
                echo '<div class="input-box">
                <span class="province-title">Choose a city where can get vaccinated:</span>
                <select name="city" id="">
                        <option value="">---</option>
                        <option value="Swartland">Swartland</option>
                        <option value="Stellenbosch">Stellenbosch</option>
                        <option value="Komatipoort">Komatipoort</option>
                        <option value="Kannaland">Kannaland</option>
                        <option value="Prince Albert">Prince Albert</option>
                </select>
            </div>';
            }else if($prov == "Eastern Cape"){
                echo '<div class="input-box">
                <span class="province-title">Choose a city where can get vaccinated:</span>
                <select name="city" id="">
                        <option value="">---</option>
                        <option value="Port Elizabeth">Port Elizabeth</option>
                        <option value="Mthatha">Mthatha</option>
                        <option value="East London">East London</option>
                        <option value="Makhanda">Makhanda</option>
                        <option value="Mdantsane">Mdantsane</option>
                </select>
            </div>';
            }else if($prov == "Free State"){
                echo '<div class="input-box">
                <span class="province-title">Choose a city where can get vaccinated:</span>
                <select name="city" id="">
                        <option value="">---</option>
                        <option value="Mafube">Mafube</option>
                        <option value="Tokologo">Tokologo</option>
                        <option value="Setsoto">Setsoto</option>
                        <option value="Phumelela">Phumelela</option>
                        <option value="Naledi">Naledi</option>
                </select>
            </div>';
            }else if($prov == "Northern Cape"){
                echo '<div class="input-box">
                <span class="province-title">Choose a city where can get vaccinated:</span>
                <select name="city" id="">
                        <option value="">---</option>
                        <option value="Magareng">Magareng</option>
                        <option value="Gamagara">Gamagara</option>
                        <option value="Hantam">Hantam</option>
                        <option value="Middelburg">Middelburg</option>
                        <option value="Ubuntu">Ubuntu</option>
                </select>
            </div>';
            }
        ?>
        <?php echo '
        <div class="input-box">
        <span class="province-title">Do you have any of the following:</span>
        </div>
        <div class="input-box">
                <span class="province-title">Chest Pain? </span>
                <select name="chestpain" id="">
                        <option value="">---</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                </select>
        </div>
        <div class="input-box">
                <span class="province-title">HIV? </span>
                <select name="hiv" id="">
                        <option value="">---</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                </select>
        </div>
        <div class="input-box">
        <span class="province-title">Shortness of Breath? </span>
                <select name="sob" id="">
                        <option value="">---</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                </select>
        </div>
        <div class="input-box">
        <span class="province-title">Chronic Cough? </span>
                <select name="chrocough" id="">
                        <option value="">---</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                </select>
        </div>
        <div class="input-box">
        <span class="province-title">High Blood Pressure? </span>
                <select name="highblood" id="">
                    <option value="">---</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
        </div>
        <div class="input-box">
        <span class="province-title">High Cholesterol? </span>
                <select name="highcho" id="">
                    <option value="">---</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
        </div>
        <div class="input-box">
        <span class="province-title">Respiratory Problems? </span>
                <select name="resp" id="">
                    <option value="">---</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
        </div>
        <button class="button" name="application-submit" type="submit">APPLY</button>
    </div>
</form>
</div>
</main>';


?>

<?php
  }else{
      header("Location: ../index.php");
  }

?>