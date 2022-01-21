<?php
 session_start();
 
if(isset($_SESSION['SessionName'])){

    echo "welcome, ".$_SESSION['SessionName'];
}
else{
    echo "Session name invalid";
}
?>

<html>
    <head>

       
        <link rel="stylesheet" href="Style.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                <nav id="ServicesOffered_Categories">

                    <ul id="ServicesOffered_CategoriesList">
                        <li class="ServicesOffered_CategoriesElement" id="HRS" onclick="GetData('Backend/GET_HighRatedServicesDATA.php')"><a href="#"> High Rated Services</a> </li>
                        <li class="ServicesOffered_CategoriesElement" id="GND" onclick="GetData('Backend/GET_GraphicsAndDesignDATA.php')"><a href="#"> Graphics and Design </a></li>
                        <li class="ServicesOffered_CategoriesElement" id="VNP" onclick="GetData('Backend/GET_VideoandPresentationDATA.php')"><a href="#"> Video and Presentation </a></li>
                        <li class="ServicesOffered_CategoriesElement" id="MNA" onclick="GetData('Backend/GET_MusicandAudioDATA.php')"><a href="#"> Music and Audio </a></li>
                        <li class="ServicesOffered_CategoriesElement" id="DNIT" onclick="GetData('Backend/GET_DevelopmentandITDATA.php')"><a href="#"> Development and IT</a></li>
                    </ul>
            </div>

                </nav>
            <div class="caro">
                <!-- Carousel-->
                <div class="carousel">
                <img class="slides" src="WebsiteImages/Carousel1.jpg" style="width:100%">
                <img class="slides" src="WebsiteImages/Carousel2.jpg" style="width:100%">
                <img class="slides" src="WebsiteImages/Carousel3.jpg" style="width:100%">
                <div class="slideCaption">ACCOMPLISH IT WITH </div>
                <div class="slideCaption2">A FREELANCER</div>

                <button class="display-left" onclick="plusDivs(-1)">&#10094;</button>
                <button class="display-right" onclick="plusDivs(1)">&#10095;</button>
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
                <!-- Services Offered-->
                <div id="ServicesOffered_CategoryTxt"> Explore </div>

                <!-- Services Offered cards -->

              
                <div id="ServicesOffered_Cards" class="SOcards">

                
              <!--  <iframe src="ServicesOffered_Cards.php" width="100%" height="100%"> </iframe> -->
                     

              <script src="Scripts/ServicesOffered.js"> </script>


                </div>
           
                <br>



    </div>
            <!-- Footer -->
            <?php include_once('Includes/footer.php')?>
    </body>
</html>