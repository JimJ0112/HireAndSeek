<?php

 session_start();
 
if(isset($_SESSION['SessionName'])){

    //echo "welcome, ".$_SESSION['SessionName'];
}
else{
    //echo "Session name invalid";
}


//include_once('includes/SessionName.php');


if(isset($_GET['data'])){
$data = "Backend/GET_".$_GET['data']."DATA.php";
    echo "<script> sessionStorage.setItem('data','$data');</script>";
} else {echo "<script> sessionStorage.setItem('data','');</script>"; }
?>

<html>
    <head>

       
        <link rel="stylesheet" href="Style.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="Scripts/ServicesOffered.js"> </script>
    </head>

    <body>
        
<div class="SO-container">
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
            <div class="SOCateg">
                <!-- Categories Section -->
                <div id="ServicesOffered_Categories">

                    <div id="ServicesOffered_CategoriesList">
                        <div class="HRS ServicesOffered_CategoriesElement" onclick="GetData('Backend/GET_HighRatedServicesDATA.php')"><a href="#"> High Rated Services</a> </div>
                        <div class="GND ServicesOffered_CategoriesElement" onclick="GetData('Backend/GET_GraphicsAndDesignDATA.php')"><a href="#"> Graphics and Design </a></div>
                        <div class="VNP ServicesOffered_CategoriesElement" onclick="GetData('Backend/GET_VideoandPresentationDATA.php')"><a href="#"> Video and Presentation </a></div>
                        <div class="MNA ServicesOffered_CategoriesElement" onclick="GetData('Backend/GET_MusicandAudioDATA.php')"><a href="#"> Music and Audio </a></div>
                        <div class="DNIT ServicesOffered_CategoriesElement" onclick="GetData('Backend/GET_DevelopmentandITDATA.php')"><a href="#"> Development and IT</a></div>
                   </div>
                </div>
            </div>

            <div class="caro">
                <!-- Carousel-->
                <div class="carousel">
                <img class="slides" src="WebsiteImages/Carousel1.jpg" style="width:100%">
                <img class="slides" src="WebsiteImages/Carousel2.jpg" style="width:100%">
                <img class="slides" src="WebsiteImages/Carousel3.jpg" style="width:100%">
                <div class="slideCaption">ACCOMPLISH IT WITH </div>
                <div class="slideCaption2">A FREELANCER</div>

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
               
          
            <div class="SOcards">
                <!-- Services Offered-->
                <div id="ServicesOffered_CategoryTxt"> Explore </div>
                <!-- Services Offered cards -->
                <div id="ServicesOffered_Cards"></div>
            </div> 
            
            <!--  <iframe src="ServicesOffered_Cards.php" width="100%" height="100%"> </iframe> -->
         

          

            <!-- Footer -->
            <?php include_once('Includes/footer.php')?>
   
        </div>
    </body>
</html>