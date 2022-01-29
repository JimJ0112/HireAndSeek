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


          
            <div class="SOcards">
                <!-- Services Offered-->
                <div id="ServicesOffered_CategoryTxt"> Explore </div>
                <!-- Services Offered cards -->
                <div id="ServicesOffered_Cards"></div>
            </div> 
            
            
         

          

            <!-- Footer -->
            <?php include_once('Includes/footer.php')?>
   
        </div>
    </body>
</html>