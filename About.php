<?php

session_start();
 
if(isset($_SESSION['SessionName'])){

    //echo "welcome, ".$_SESSION['SessionName'];
}
else{
    //echo "Session name invalid";
}

//include_once('includes/SessionName.php');

?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="icon" href="favicon.ico">
     <!--   <script src="Scripts/ServicesOffered.js"> </script> -->
        <link rel="stylesheet" href="Style.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

    <div class="About-Container">
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
        <div class="About-TitleBtn">   
            <div id="About-OverviewBtn"><a href="#" class="About-btnText" onclick="displayOverview()">OVERVIEW</a></div>
            <div id="About-TeamBtn"><a href="#" class="About-btnText" onclick="displayTeam()">THE TEAM</a></div>
        </div> 

        <div class="caro">
        <!-- Carousel Section-->

           <div class="carousel">
                <img class="slides" src="WebsiteImages/Carousel1.jpg" style="width:100%">
                <img class="slides" src="WebsiteImages/Carousel2.jpg" style="width:100%">
                <img class="slides" src="WebsiteImages/Carousel3.jpg" style="width:100%">
                <div class="slideCaption About-slideCaption">
                    <span style="color:#ff9001">HIRE</span> 
                    <span style="color:Black">&</span> 
                    <span style="color:#007fff">SEEK</span>: WEBSITE FOR</div>    
                <div class="slideCaption2 About-slideCaption">FREELANCE WORKER</div>

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
    <div class="About-Content">
                <!-- OVERVIVEW-->
                <form action="" method="post" enctype = "multipart/form-data">
          
                <div id="About-OverviewContent">
                   
                    <div class="About-TextContent">
                    <div class="About-ContentTitle">VISION</div>
                        We envision to create a platform for freelancers that will enable them to explore economic opportunities locally. As a result, freelancers can they can offer their services and support themselves to reach for their financial security and work satisfaction that they deserve.
                    </div>

                    <div class="About-TextContent">
                    <div class="About-ContentTitle">MISSION</div>
                        Our mission is to create a reliable online marketplace where freelancers can offer digital services to potential customers can browse and purchase services that they need.
                    </div>
                </div>
                <div id="About-TeamContent">
                        <div class="About-TeamLogo"><img src="WebsiteImages/Logo.png" class="About-Logo"></div>
                        <div class="About-TeamTitle">THE TEAM</div>
                
                       
                    <div class="TeamContent-Grid">
                        <div class="Team-Member">
                            <img class="memberImages" src="WebsiteImages/Navarro.jpg" >
                            <div class="memberName">Patricia Kyle E. Navarro</div>
                            <div class="memberRole">Project Manager</div>
                            <ul class="memberSocials">
                                <li><a href="#"><img src="WebsiteImages/fb.png"></a></li>
                                <li><a href="#"><img src="WebsiteImages/IG.png"></a></li>
                                <li><a href="#"><img src="WebsiteImages/twitter.png"></a></li>
                            </ul>
                        </div>
                        <div class="Team-Member">
                            <img class="memberImages memberImages2" src="WebsiteImages/Manrique.jpg" >
                            <div class="memberName">Jim Lourdy M. Manrique</div>
                            <div class="memberRole">Back-end Developer</div>
                            <ul class="memberSocials">
                                <li><a href="#"><img src="WebsiteImages/fb.png"></a></li>
                                <li><a href="#"><img src="WebsiteImages/IG.png"></a></li>
                                <li><a href="#"><img src="WebsiteImages/twitter.png"></a></li>
                            </ul>
                        </div>
                        <div class="Team-Member">
                            <img class="memberImages" src="WebsiteImages/Ruegas.png" >
                            <div class="memberName">Razel John D. Ruegas</div>
                            <div class="memberRole">Front-end Developer</div>
                            <ul class="memberSocials">
                                <li><a href="#"><img src="WebsiteImages/fb.png"></a></li>
                                <li><a href="#"><img src="WebsiteImages/IG.png"></a></li>
                                <li><a href="#"><img src="WebsiteImages/twitter.png"></a></li>
                            </ul>
                        </div>
                        <div class="Team-Member">
                            <img class="memberImages" src="WebsiteImages/Saez.jpg" >
                            <div class="memberName">John Carlo C. Saez</div>
                            <div class="memberRole">Software Tester</div>
                            <ul class="memberSocials">
                                <li><a href="#"><img src="WebsiteImages/fb.png"></a></li>
                                <li><a href="#"><img src="WebsiteImages/IG.png"></a></li>
                                <li><a href="#"><img src="WebsiteImages/twitter.png"></a></li>
                            </ul>
                        </div>
                            
                    </div>
                </div>
                    

                </form>
    </div>
    <script src="Scripts/About.js"> </script>
            <!-- Footer -->
         
            <?php include_once('Includes/footer.php')?>

</div>

    </body>
</html>