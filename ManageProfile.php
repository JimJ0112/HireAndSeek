<?php

 session_start();

 if(!isset($_SESSION['SessionName'])){

      header('location:Login_Index.php?data=PleaseLogIn');
  }


//  if(isset($_GET['data'])){
//      $data = $_GET['data'];
//       echo"<script> alert('Result: $data') </script>";
//  }
if(isset($_GET['data'])){

    $data= $_GET['data'];
    echo"<script> $data </script>";
}

if(isset($_SESSION['MailingAddress'])){
    $MailingAdd = $_SESSION["MailingAddress"];
    echo "<script> sessionStorage.setItem('MailingAddress','$MailingAdd');</script>";
}

if(isset( $_SESSION["AccountType"])){

$AccountType = $_SESSION["AccountType"];
    echo"<script> sessionStorage.setItem('AccountType','$AccountType')</script>";
}

?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="icon" href="favicon.ico">
       <!-- <script src= "Scripts/AvailService.js"></script>-->
        <link rel="stylesheet" href="Style.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body onload="init()">
    <div class="Avail-Container"> 
    <div class="nav">


            <!-- Nav bar section -->
            <?php
            if(isset($_SESSION['SessionName'])){
                include_once("includes/LoggedIn_Header.php");
            }
            else{
                include_once("includes/Header.php");
            }


            if($_SESSION['AccountType'] == "Freelancer"){
                include_once("includes/FreelancerDashboard.php");
            } else{
                include_once("includes/CustomerDashboard.php");
            }
 
            ?>
    </div>







            <div id="Profilecontent"> 
           <h3 id="ManageName"> Name Placeholder </h3>
           <h3 id="ManageEmail"> Email Placeholder </h3>
           <h5 id="ManageAccountLevel"> Account Level Placeholder</h5>
           <h5 id="ManageAccountType"> Account Type Placeholder</h5>
           <h5 id="ManageDescription"> Description Placeholder</h5>
           <h5 id="ManageSkills"> Skills Placeholder</h5>
           <h5 id="ManageBirthDate"> Birthdate Placeholder</h5>
           <h5 id="ManageGender"> Gender Placeholder </h5>
           <h5 id="ManageContact"> Contact Placeholder</h5>

 



             </div>
     <!--end of contents -->
             <?php include_once('Includes/footer.php')?>

             <script src= "Scripts/ManageProfile.js"></script> 
          
    </body>

</html>

