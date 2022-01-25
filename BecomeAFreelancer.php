<?php
session_start();
?>

<DOCTYPE>
    <html>
        <head>
            <link rel="stylesheet" href="Style.css" type="text/css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

        </head>
        <body>
    <div class="Become-Container">
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
                <div class="Become-slideCaption">
                        <span>BECOME A FREELANCER AND START YOUR JOB TODAY!</span>
                </div>
                <div class="display-caro">
                <div class="display-leftNav"><button class="display-leftBtn" onclick="plusDivs(-1)">&#10094;</button></div>
                <div class="display-rightNav"><button class="display-rightBtn" onclick="plusDivs(1)">&#10095;</button></div>
                </div>
 
                <span class="getStartedBtn"><a href="Freelancer_Register.php">Get Started</a></span> 
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
           

        <div class="Become-How">
            <div class="Become-ContentTitle"> HOW THIS WEBSITE WORKS</div>
            <div class="Become-HowGrid">
                <div class="How-Card">
                    <div class="How-Images"><img src="WebsiteImages/how1.png"></div>
                    <div class="How-title">1. Create your Job</div>
                    <div class="How-text">Create an account, create your job, and make your job available to our local customers</div>
                </div>
                <div class="How-Card">
                    <div class="How-Images"><img src="WebsiteImages/how2.png"></div>
                    <div class="How-title">2. Get it Done</div>
                    <div class="How-text">You will be notified when an order is placed, talk to the client using our website</div>
                </div>
                <div class="How-Card">
                    <div class="How-Images"><img src="WebsiteImages/how3.png"></div>
                    <div class="How-title">3. Get Paid!</div>
                    <div class="How-text">After completion, payment will be transferred to your account</div>
                </div>
            </div>
        </div>
        <div class="Become-FAQs">
            <div class="Become-ContentTitle">FREQUENTLY ASKED QUESTIONS (FAQs)</div>
            <div class="Become-FAQSGrid">
                <details class="Become-FAQ1">
                    <summary>What am I able to sell?</summary>
                    <div class="Faqs-Content">
                        <p>You are free to provide any service you want as long as it is legal and follows our policies.</p>
                    </div>
                </details>
                <details class="Become-FAQ2">
                    <summary>How do i get paid?</summary>
                    <div class="Faqs-Content">
                        <p>When you finish a customer's order, the payments are sent to your account.</p>
                    </div>
                </details>
                <details class="Become-FAQ3">
                    <summary>How much does it cost?</summary>
                    <div class="Faqs-Content">
                        <p>Hire and seek is completely free, Each transaction gives you 85% of the profit.</p>
                    </div>
                </details>
                <details class="Become-FAQ4">
                    <summary>How much money can I expect to make?</summary>
                    <div class="Faqs-Content">
                        <p>You have absolute freedom to work and earn as much as you like.</p>
                    </div>
                </details>
            </div>    
        </div>
    
        <!-- Footer -->
        <?php include_once('Includes/footer.php')?>
    </div>
        </body>
    </html>