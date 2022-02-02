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
    <div class="ManageProfile-Container"> 
    <div class="nav">
            <!-- Nav bar section -->
            <?php
            if(isset($_SESSION['SessionName'])){
                include_once("includes/LoggedIn_Header.php");
            }
            else{
                include_once("includes/Header.php");
            }
            ?>
    </div>

    <div class="ManageProfile-Nav">
            <?php
            if($_SESSION['AccountType'] == "Freelancer"){
                include_once("includes/FreelancerDashboard.php");
            } else{
                include_once("includes/CustomerDashboard.php");
            }
            ?>
    </div>

        <div class="ManageProfile-Content">
            <div id="Profilecontent">
                <div class="Profile-Left">
                    <div class="leftDiv">
                    <img src="WebsiteImages/profile.png"> 
                    <div id="ManageName"> Name Placeholder </div>
                    <div id="ManageEmail"> Email Placeholder </div>
                    <div id="ManageAccountLevel"> Account Level Placeholder</div>
                    <div id="ManageAccountType"> Account Type Placeholder</div>
                    </div>
                </div>
                <div class="Profile-Right">
                    <div class="rightDiv"><label>Description</label></div>
                    <div class="rightDiv"><input type="text" id="ManageDescription"> <!-- Description Placeholder --> </div>
                    <div class="rightDiv"><label id="lblSkills">Skills</label></div>
                    <div class="rightDiv"><input type="text" id="ManageSkills"> <!-- Skills Placeholder --> </div>
                    <div class="rightDiv"><label>Birthday</label></div>
                    <div class="rightDiv"><input type="text" id="ManageBirthDate"> <!-- Birthdate Placeholder --> </div>
                    <div class="rightDiv"><label>Gender</label></div>
                    <div class="rightDiv"><input type="text" id="ManageGender"><!-- Gender Placeholder --> </div>
                    <div class="rightDiv"><label>Contact Number</label></div>
                    <div class="rightDiv"><input type="text" id="ManageContact"><!-- Contact Placeholder --> </div>
                </div>
            </div>
        </div>
     <!--end of contents -->



           
             <?php include_once('Includes/footer.php')?>
        </div>
             <script src= "Scripts/ManageProfile.js"></script> 
           
    </body>

</html>

