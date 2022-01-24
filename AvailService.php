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

        <script src= "Scripts/AvailService.js"></script>
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
            
                <!-- Carousel-->
                <div id="AvailService_Carousel">

                     <h1> Carousel Placeholder</h1>
                </div>

                <!-- functions (grid container) -->
                <div id="ServiceContainer"> 

                    <div id="ServiceDescription" class="ServiceContainerChild"> 
                        <h2 id="ServiceTitle"> Service Title Placeholder</h2>
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
                        
                        <div id="Plan_Basic" class="Plan"> <h3>BASIC </h3></div>
                        <div id="Plan_Standard" class="Plan" > <h3> STANDARD  </h3> </div>
                        <div id="Plan_Premium" class="Plan"> <h3> PREMIUM </h3> </div>

                        <div id="Plan_DescriptionContainer"> 

                            <h4 id="Plan_Description"> Plan Description Placeholder </h4>
                            <button id = "Buy">Price Php 000.00</button>
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