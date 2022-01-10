<?php
//session_start();
?>
<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="Style.css" type="text/css">
            <script src="Scripts/Login.js"> </script>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

        </head>
        <body>

            <!-- Nav bar section -->
            <nav> 
               <ul id = "navlist">
                    <a href="index.php"><img id="Logo" src="WebsiteImages/Logo.png"></a>
                    <li class= "navElement" id="searchbar"> <input type = "text" placeholder="Search..  "></li>
                    <li class= "navElement"> <input type="button" id="btnSearch"> </li>
                    <li class= "navElement" id="btnExplore"> <a href = "ServicesOffered.php"> EXPLORE </a> </li>
                    <li class= "navElement" id="btnBecome"> <a href = "BecomeAFreelancer.php"> BECOME A FREELANCER </a> </li>
                    <li class= "navElement" id="btnLogin"> <a href = "Login_Index.php"> LOGIN </a> </li>
                    <li class= "navElement" id="btnAbout"> <a href = "About.php"> ABOUT </a> </li>
                </ul>
            </nav>
</body>
</html>