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


if(isset($_GET['data'])){
$data = $_GET['data'];
    echo"<script> Result: $data </script>";
}
?>

<!DOCTYPE html>
<html>
    <head>

       <!-- <script src= "Scripts/AvailService.js"></script>-->
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
            





            <center>

        <!-- Form will show when buy button have been clicked-->
             
            <form action="Backend/AvailServiceBackend.php" method="post" id="AvailServiceForm"> 

            OwnerEmail   <input type="text" name="OwnerEmail" id="OwnerEmail" readonly> <br> <br>
            ClientEmail  <input type="text" name="ClientEmail" id="ClientEmail" readonly> <br> <br>
            ServiceID    <input type="text" name="ServiceID" id="ServiceID" readonly > <br> <br>
            Category     <input type="text" name="Category" id="Category" readonly > <br> <br>
            ServiceTitle <input type="text" name="ServiceTitleForm" id="ServiceTitleForm" readonly> <br> <br>
            clientNotes  <input type="text" name="clientNotes" id="clientNotes" > <br> <br>
            startDate    <input type="text" name="startDate" id="startDate" readonly > <br> <br>
            Finish Date <input type="text" name="finishDate" id="finishDate"> <br> <br>
            availedPlan  <input type="text" name="availedPlan" id="availedPlan" readonly> <br> <br>
            Price        <input type="text" name="Price" id="Price" readonly> <br> <br>
            AgreementContract <br>
            Agree   <input type="checkbox" value="Agree" name="AgreedToContract"  > 
            Decline <input type="checkbox" value="Agree" name="Decline" > <br> <br>

            <input type="submit" value="Buy" id="ButtonSubmit" onclick="HideDiv()"> <input type="button" value="Cancel" onclick="HideDiv()">
            
            </form>

            
            </center>























<div id="content"> 
                <!-- Carousel-->
                <div id="AvailService_Carousel">

                     <h1> Carousel Placeholder</h1>
                </div>

                <!-- functions (grid container) -->
                <div id="ServiceContainer"> 

                    <div id="ServiceDescription" class="ServiceContainerChild"> 
                        <h2 id="ServiceTitle"> Service Title Placeholder</h2>
                        <h4 id="ServCategory"> Category </h4>
                         <h3> About the Service </h3>
                         <p Id="AvailService_Description"> This is a Description Placeholder</p>
                    </div>


                    <div id="MessageTheFreelancer" class="ServiceContainerChild"> 
                        <center>
                        <img class="AccountProfilePicture" src="WebsiteImages/profilepic-placeholder.jpg"> 
                        <h4 class="AccountName">Account Name </h4> 
                       

                       <p class="AccountLevel">Level </p>

                       <p class="AccountDescription"> Account Description Placeholder</p>
                       <input type="text" id="MessageToFreelancer" placeholder="Leave a Message...">
                        <br>
                        <br>
                        <button id="SendButton" >  SEND  </button>
                    </center>

                    </div>



                    <div id="ServicePlans" class="ServiceContainerChild"> 
                        
                        <div id="Plan_Basic" class="Plan" onclick="BasicPlan()"> <h3>BASIC </h3></div>
                        <div id="Plan_Standard" class="Plan" onclick="StandardPlan()"> <h3> STANDARD  </h3> </div>
                        <div id="Plan_Premium" class="Plan" onclick="PremiumPlan()"> <h3> PREMIUM </h3> </div>

                        <div id="Plan_DescriptionContainer"> 
                        <h4 id="Plan_Plan"> Plan  </h4>
                            <h4 id="Plan_Description"> Plan Description Placeholder </h4>
                            <button id = "Buy" onclick="availService()">Price Php 000.00</button>
                        </div>
                   
                    </div>


                    <div id="ServiceRatings" class="ServiceContainerChild"> <h3>Ratings </h3> 
                   <h2> TOTAL RATINGS: <span id="totalRatings"> N </span> </h2>
                    <br>
                    
                   <h3> 5 Star Ratings: <span id="5starRatingsTotal"> N </span> </h3>
                   <h3> 4 Star Ratings: <span id="4starRatingsTotal"> N </span> </h3>
                   <h3> 3 Star Ratings: <span id="3starRatingsTotal"> N </span> </h3>
                   <h3> 2 Star Ratings: <span id="2starRatingsTotal"> N </span> </h3>
                   <h3> 1 Star Ratings: <span id="1starRatingsTotal"> N </span> </h3>
                    
                    </div>


                    <div id="Rate" class="ServiceContainerChild"> 
                        <center>

                        <div id="1Star" class="StarRatings"></div>
                        <div id="2Star" class="StarRatings"></div>
                        <div id="3Star" class="StarRatings"></div>
                        <div id="4Star" class="StarRatings"></div>
                        <div id="5Star" class="StarRatings"></div>

                        </center>
                    
                    
                    </div>

                </div>
               <!-- <script src= "Scripts/AvailService.js"></script> -->
             <!-- Footer -->


             <!-- Avail servie form -->

<div id="HiddenDiv">
<p id="BasicPlanDescription_Info"> P </p>
<p id="BasicPlanPrice_Info"> P </p>

<p id="StandardPlanDescription_Info"> P </p>
<p id="StandardPlanPrice_Info"> P </p>

<p id="PremiumPlanDescription_Info"> P </p>
<p id="PremiumPlanPrice_Info"> P </p>
    
</div>

    </div> <!--end of contents -->
             <?php include_once('Includes/footer.php')?>


             <script src= "Scripts/AvailService.js"></script>
    </body>
</html>