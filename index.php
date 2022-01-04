<?Php 
session_start();
//session start
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
            include_once("Header.php");
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
