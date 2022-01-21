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

            <!-- Nav bar section -->
            <?php
            if(isset($_SESSION['SessionName'])){

                include_once("includes/LoggedIn_Header.php");
                
                
            }
            else{
                include_once("includes/Header.php");
            }
            ?>

            <div id="index_carousel">

                <center>
                  <a href="Login_Index.php"> <button> GET STARTED </button></a>  
            </center>
            </div>
            <div id="index_carousel">

            </div>

            <!-- Footer -->
        <!-- Footer -->
        <?php include_once('Includes/footer.php')?>

        </body>
    </html>