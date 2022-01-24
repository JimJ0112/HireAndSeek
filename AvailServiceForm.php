<?php

session_start();
   //$_SESSION['SessionName'];
/*
if(isset($_SESSION['SessionName'])){

    echo "welcome, ".$_SESSION['SessionName'];
}
else{
   //echo"Session unavailable";
}
//echo $_SESSION['SessionName'];
*/

//include_once('includes/SessionName.php');
if(!isset($_SESSION['SessionName'])){

    header('location:Login_Index.php?data=PleaseLogIn');
}

?>

<!DOCTYPE html>
<html>
    <head>

       <!-- <script src= "Scripts/AvailService.js"></script> -->
        <link rel="stylesheet" href="Style.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        
            <!-- Nav bar section -->
            <?php
          
          if(isset($_SESSION['SessionName'])){

            include_once("includes/LoggedIn_Header.php");
            
        }
        else{
            include_once("includes/Header.php");
        }
            ?>

<div id="AvailServiceForm">
            <form action="" method="post"> 

            OwnerEmail   <input type="text" name="OwnerEmail" id="OwnerEmail"> <br>
            ClientEmail  <input type="text" name="ClientEmail" id="ClientEmail"> <br>
            ServiceID    <input type="text" name="ServiceID" id="ServiceID"> <br> 
            ServiceTitle <input type="text" name="ServiceTitle" id="ServiceTitle"> <br>
            clientNotes  <input type="text" name="clientNotes" id="clientNotes"> <br>
            startDate    <input type="text" name="startDate" id="startDate"> <br>
            FinishedDate <input type="text" name="finishedDate" id="finishedDate"> <br>
            availedPlan  <input type="text" name="availedPlan" id="availedPlan"> <br>
            Price        <input type="text" name="availedPlan" id="availedPlan"> <br>
            AgreementContract <br>
            Agree   <input type="checkbox" value="Agree" name="Agree"  > 
            Decline <input type="checkbox" value="Agree" name="Decline" > <br>

            <input type="submit" value="submit" id="ButtonSubmit">
            </form>

    </div>     


             <?php include_once('Includes/footer.php')?>

     
    </body>
</html>