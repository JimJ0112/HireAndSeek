<?php
/*
session_start();
 
if(isset($_SESSION['SessionName'])){

    echo "welcome, ".$_SESSION['SessionName'];
}
else{
    echo "Session name invalid";
}
*/
include_once('includes/SessionName.php');

?>

<!DOCTYPE html>
<html>
    <head>

        <script src="Scripts/ServicesOffered.js"> </script>
        <link rel="stylesheet" href="Style.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
    <!-- Raz -->
    <!-- jim -->
    <!-- kita mo raz?-->
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
                <div id="ServicesOffered_Carousel">
                    <h1>Placeholder</h1>
                </div>
                <!-- Services Offered-->
 
            <!-- Footer -->
         
            <?php include_once('Includes/footer.php')?>

     
    </body>
</html>