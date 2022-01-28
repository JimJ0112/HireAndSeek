<?php

 session_start();

//  if(!isset($_SESSION['SessionName'])){

//      header('location:Login_Index.php?data=PleaseLogIn');
//   }


//  if(isset($_GET['data'])){
//      $data = $_GET['data'];
//       echo"<script> alert('Result: $data') </script>";
//  }


    $MailingAdd = $_SESSION["MailingAddress"];
    echo "<script> sessionStorage.setItem('MailingAddress','$MailingAdd');</script>";

if(isset( $_SESSION["AccountType"])){

$AccountType = $_SESSION["AccountType"];
    echo"<script> sessionStorage.setItem('AccountType','$AccountType')</script>";
}

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



        <!-- Form will show when buy button have been clicked-->
             
            <form action="Backend/AvailServiceBackend.php" method="post" id="AvailServiceForm"> 
            <h3 class="AvailServiceForm_Text">CHECKOUT  </h3>
            <div class="AvailServiceForm-Container">

            <div class="AvailServiceForm_Text"> Owner Email:   <input type="text" name="OwnerEmail" id="OwnerEmail" readonly></div>
            <div class="AvailServiceForm_Text"> Client Email:  <input type="text" name="ClientEmail" id="ClientEmail" readonly> </div>
            <div class="AvailServiceForm_Text"> Mailing Address:<input type="text" name="MailingAddress" id="MailingAddress" > </div>
            <div class="AvailServiceForm_Text"> Service ID:    <input type="text" name="ServiceID" id="ServiceID" readonly > </div>
            <div class="AvailServiceForm_Text"> Category:     <input type="text" name="Category" id="Category" readonly > </div>
            <div class="AvailServiceForm_Text"> Service Title: <input type="text" name="ServiceTitleForm" id="ServiceTitleForm" readonly> </div>
            <div class="AvailServiceForm_Text"> Client Notes:  <input type="text" name="clientNotes" id="clientNotes" > </div>
            <div class="AvailServiceForm_Text"> Start Date:    <input type="text" name="startDate" id="startDate" readonly > </div>
            <div class="AvailServiceForm_Text"> Finish Date: <input type="date" name="finishDate" id="finishDate"> </div>
            <div class="AvailServiceForm_Text"> Availed Plan:  <input type="text" name="availedPlan" id="availedPlan" readonly>  </div>
            <div class="AvailServiceForm_Text"> Price:        <input type="text" name="Price" id="Price" readonly>  </div>
            <div class="AvailServiceForm_Text"> Agreement Contract:  </div>
            <div class="AvailServiceForm_Text"> 
            Agree   <input type="checkbox" value="Agree" name="AgreedToContract"  > 
            Decline <input type="checkbox" value="Agree" name="Decline" >
            </div>
            <button id="ButtonSubmit" onclick="HideDiv()">BUY </button>
            <button id="ButtonCancel" onclick="HideDiv()">CANCEL</button>
            </div>
            </form>



            <div id="content"> 
           
            <div class="caro" id="AvailService_Carousel">
                <!-- Carousel-->
                <div class="carousel">
               <!-- <img class="slides" src="WebsiteImages/Placeholder.png" style="width:100%"> -->
               <img class="slides" src=" " style="width:100%">
               <img class="slides" src=" " style="width:100%">
               <img class="slides" src=" " style="width:100%">



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

                    <form method="POST" action="Backend/SendMessage.php">

                    <input type="hidden" name="MessageDate" id="MessageDate"> 
                    <input type="hidden" name="MessageTime" id="MessageTime"> 
                    <input type="hidden" name="MessageRecepient_Form" id="MessageRecepient_Form"> 
                    <input type="hidden" name="MessageSubject_Form" id="MessageSubject_Form"> 


                        <div class="Avail-ProfilePicture"><img class="AccountProfilePicture" src="WebsiteImages/profilepic-placeholder.jpg"></div> 
                        <div class="Avail-AccountName AccountName">Account Name </div> 
                        <div class="Avail-AccountLevel AccountLevel">Level </div>
                        
                        <div class="Avail-Message">
                            <input type="text" id="MessageToFreelancer" name="MessageBody_Form" placeholder="Leave a Message...">
                        </div>

                        <div class="Avail-SendBtn"> <input id="SendButton" type="submit" value="SEND">  </div>

                        </form>
                    </div>



                    <div id="ServicePlans" class="ServiceContainerChild"> 
                        <div class="Plan">
                        <input type="button" value="BASIC" id="BasicBtn" class="Plans" onclick="BasicPlan()">
                        <input type="button" value="STANDARD" id="StandardBtn" class="Plans" onclick="StandardPlan()">
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