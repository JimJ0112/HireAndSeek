<?php
session_start();
    
if(isset($_SESSION['SessionName'])){

    echo "welcome, ".$_SESSION['SessionName'];
    
}
else{
    echo "Session name invalid";
}
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

                include_once("LoggedIn_Header.php");
                
            }
            else{
                include_once("Header.php");
            }
            ?>

            <!-- Carousel Section-->

            <div id="index_carousel">
             <H1> CAROUSEL PLACEHOLDER </H1>
            </div>

            <!-- Services Offered -->
            <h3 id="index_ServicesOfferedTxt"> Services Offered </h3>
   
            <table id="index_ServicesOfferedTable">
                <tr id="index_ServicesOfferedtr">
                    <th class="index_ServicesOfferedTableElement"> High Rated Services </th>
                    <th class="index_ServicesOfferedTableElement" > Graphics and Design </th>
                    <th class="index_ServicesOfferedTableElement"> Video and Presentation </th>
                    <th class="index_ServicesOfferedTableElement"> Music and Audio </th>
                    <th class="index_ServicesOfferedTableElement"> Development and IT </th>
                </tr>
            </table>
      

            <!-- Footer -->
            <footer>
                <h1> Footer Placeholder</h1>
            </footer>

        </body>
    </html>
