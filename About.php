<?php
session_start();
 
if(isset($_SESSION['SessionName'])){

    echo "welcome, ".$_SESSION['SessionName'];
}
else{
    echo "Session name invalid";
}

?>

<!DOCTYPE html>
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

                include_once("LoggedIn_Header.php");
                
            }
            else{
                include_once("Header.php");
            }
            ?>
            

                <!-- Carousel-->
                <div id="ServicesOffered_Carousel">
                    <h1>Placeholder</h1>
                </div>
                <!-- Services Offered-->
 
            <!-- Footer -->
            <footer>
                <h1> Footer Placeholder</h1>
            </footer>

     
    </body>
</html>