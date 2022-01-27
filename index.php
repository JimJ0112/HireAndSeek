<?php

session_start();


if(isset($_SESSION['SessionName'])){

    //echo "welcome, ".$_SESSION['SessionName'];
    
}
else{
    //echo "Session name invalid";
}

//include_once('includes/SessionName.php');

//mail($row['email'],'Account Approved','Hello, Welcome to Hire and Seek, your account has been approved','From: hireandseekdemo@gmail.com');

?>

<DOCTYPE>
    <html>
        <head>
            <link rel="stylesheet" href="Style.css" type="text/css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

        </head>
        <body>

<div class="Grid-container">
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
    <div class="caro">
        <!-- Carousel Section-->

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
    <div class="categ">
        <!-- Services Offered -->
        <div class="index_ServicesOfferedtxt"> Services Offered </div>
   
        <table id="index_ServicesOfferedTable">
            <tr class="index_ServicesOfferedtr">
                <th class="thCategory" style="background-image: url('WebsiteImages/HighRated.png'); "><a href="" class="thText"> High<br> Rated<br> Services </a>
                <th class="thCategory" style="background-image: url('WebsiteImages/Graphics.png');"><a href="" class="thText"> Graphics<br> and<br> Design </a></th>
                <th class="thCategory" style="background-image: url('WebsiteImages/Video.png');"><a href="" class="thText"> Video<br> and<br> Presentation </a></th>
                <th class="thCategory" style="background-image: url('WebsiteImages/Music.jpg');"><a href="" class="thText"> Music<br> and<br> Audio </a></th>
                <th class="thCategory" style="background-image: url('WebsiteImages/Development.png');"><a href="" class="thText" id="thText5"> Development<br> and IT </a></th>
            </tr>
        </table>
    </div>

    <?php include_once('Includes/footer.php')?>
   
</div>
 
</body>
</html>
