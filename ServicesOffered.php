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

        <script src="Scripts/ServicesOffered.js"> </script>
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
            
            
                <!-- Categories Section -->
                <nav id="ServicesOffered_Categories">

                    <ul id="ServicesOffered_CategoriesList">
                        <li class="ServicesOffered_CategoriesElement" id="HighRatedServices" onclick="GetData('Backend/GET_HighRatedServicesDATA.php')"> High Rated Services </li>
                        <li class="ServicesOffered_CategoriesElement" id="GraphicsandDesign" onclick="GetData('Backend/GET_GraphicsAndDesignDATA.php')"> Graphics and Design </li>
                        <li class="ServicesOffered_CategoriesElement" id="VideoandPresentation" onclick="GetData('Backend/GET_VideoandPresentationDATA.php')"> Video and Presentation </li>
                        <li class="ServicesOffered_CategoriesElement" id="MusicandAudio" onclick="GetData('Backend/GET_MusicandAudioDATA.php')"> Music and Audio </li>
                        <li class="ServicesOffered_CategoriesElement" id="DevelopmentandIT" onclick="GetData('Backend/GET_DevelopmentandITDATA.php')"> Development and IT</li>
                    </ul>

                </nav>

                <!-- Carousel-->
                <div id="ServicesOffered_Carousel">
                    <h1>Carousel Placeholder</h1>
                </div>
                <!-- Services Offered-->
                <h3 id="ServicesOffered_CategoryTxt"> Category Placeholder </h3>

                <!-- Services Offered cards -->

                
                <div id="ServicesOffered_Cards">

                
              <!--  <iframe src="ServicesOffered_Cards.php" width="100%" height="100%"> </iframe> -->
                     




                </div>

                <br>


            <!-- Footer -->
            <footer>
                <h1> Footer Placeholder</h1>
            </footer>

     
    </body>
</html>