<?php

session_start();

 if(!isset($_SESSION['SessionName'])){

     header('location:Login_Index.php?data=PleaseLogIn');
  }


 if(isset($_GET['data'])){
     $data = $_GET['data'];
      echo"<script> alert('Result: $data') </script>";
 }


    $MailingAdd = $_SESSION["MailingAddress"];
    echo "<script> sessionStorage.setItem('MailingAddress','$MailingAdd');</script>";


?>

<!DOCTYPE html>
<html>
    <head>
    
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
            ?>
    </div>





            <center>

        <!-- Form will show when buy button have been clicked-->
             
            <form action="Backend/AvailServiceBackend.php" method="post" id="AvailServiceForm"> 

            OwnerEmail   <input type="text" name="OwnerEmail" id="OwnerEmail" readonly> <br> <br>
            ClientEmail  <input type="text" name="ClientEmail" id="ClientEmail" readonly> <br> <br>
            Mailing Address  <input type="text" name="MailingAddress" id="MailingAddress" > <br> <br>
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
           
            <div class="caro" id="AvailService_Carousel">
                <!-- Carousel-->
                <div class="carousel">
                <img class="slides" src="WebsiteImages/Placeholder.png" style="width:100%">
             
                <div class="display-caro">
                <div class="display-leftNav"><button class="display-leftBtn" onclick="plusDivs(-1)">&#10094;</button></div>
                <div class="display-rightNav"><button class="display-rightBtn" onclick="plusDivs(1)">&#10095;</button></div>
                </div>

                <div class="dotNav"style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                 </div>
              </div>
           
           
              <script>
                var slideIndex = 1;
                showDivs(slideIndex);

                function plusDivs(n) {
                showDivs(slideIndex += n);
                }
                function currentSlide(n) {
                showDivs(slideIndex = n);
                }

                function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("slides");
                var dots = document.getElementsByClassName("dot");
                if (n > x.length) {slideIndex = 1}
                if (n < 1) {slideIndex = x.length}
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                x[slideIndex-1].style.display = "block"; 
                dots[slideIndex-1].className += " active"; 
                }
                </script>
            </div>

                <!-- functions (grid container) -->
            <div id="ServiceContainer"> 

                    <div id="ServiceDescription" class="ServiceContainerChild">
                        <div class="Avail-TextDescription">
                            <div id="ServiceTitle"> Service Title Placeholder</div>
                            <div id="ServCategory"> Category </div>
                            <div id="Availservice_About"> About The Service </div>
                            <div Id="AvailService_Description"> This is a Description Placeholder</div>
                        </div> 
                    </div>


                    <div id="MessageTheFreelancer" class="ServiceContainerChild"> 
                        <div class="Avail-ProfilePicture"><img class="AccountProfilePicture" src="WebsiteImages/profilepic-placeholder.jpg"></div> 
                        <div class="Avail-AccountName AccountName">Account Name </div> 
                        <div class="Avail-AccountLevel AccountLevel">Level </div>
                        <div class="Avail-AccDesc AccountDescription"> Account Description Placeholder</div>
                        <div class="Avail-Message">
                            <input type="text" id="MessageToFreelancer" placeholder="Leave a Message...">
                        </div>
                        <div class="Avail-SendBtn"><button id="SendButton">  SEND  </button></div>
                 
                    </div>



                    <div id="ServicePlans" class="ServiceContainerChild"> 
                        <div class="Plan">
                        <input type="button" value="BASIC" id="BasicBtn" class="Plans" onclick="BasicPlan()">
                        <input type="button" value="STANDARD" id="Standardtn" class="Plans" onclick="StandardPlan()">
                        <input type="button" value="PREMIUM" id="PremiumBtn" class="Plans" onclick="PremiumPlan()">
                        </div>
                        <div id="Plan_DescriptionContainer"> 
                            <div id="Plan_Plan"> Plan  </div>
                            <div id="Plan_Description"> Plan Description Placeholder </div>
                            <div class="Plan_BuyBtn"><button id = "Buy" onclick="availService()">Price Php 000.00</button></div>
                        </div>
                   
                    </div>


                    <div id="ServiceRatings" class="ServiceContainerChild"> 
                        <div id="ServiceRatings_Title">RATINGS </div> 
                        <div id="ServiceRatings_Total"> TOTAL RATINGS: <span id="totalRatings"> N </span> </div>
                    <br>
                     <div id="ServiceRatings_Count">
                   <div> 5 Star Ratings: <span id="5starRatingsTotal"> N </span> </div>
                   <div> 4 Star Ratings: <span id="4starRatingsTotal"> N </span> </div>
                   <div> 3 Star Ratings: <span id="3starRatingsTotal"> N </span> </div>
                   <div> 2 Star Ratings: <span id="2starRatingsTotal"> N </span> </div>
                   <div> 1 Star Ratings: <span id="1starRatingsTotal"> N </span> </div>
                   </div>
                    </div>

                    <div id="Rate" class="ServiceContainerChild">
                    <div class="RateTitle">RATE</div>
                    <div class="rating">
                         
                    <!--elements are in reversed order, to allow "previous sibling selectors" in CSS-->
                    <input type="radio" name="rating" value="5" id="5"><label for="5" onclick="add5star()">☆</label>
                    <input type="radio" name="rating" value="4" id="4"><label for="4" onclick="add4star()">☆</label>
                    <input type="radio" name="rating" value="3" id="3"><label for="3" onclick="add3star()">☆</label>
                    <input type="radio" name="rating" value="2" id="2"><label for="2" onclick="add2star()">☆</label>
                    <input type="radio" name="rating" value="1" id="1"><label for="1" onclick="add1star()">☆</label>
                    </div>
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
             </div>  
    </body>
</html>