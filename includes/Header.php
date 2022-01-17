<?php
//session_start();
include('checkIfExists.php');
?>
<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="Style.css" type="text/css">
            <script src="Scripts/Login.js"> </script>
            <script src="Scripts/ServiceSearch.js"> </script>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

        </head>
        <body>

            <!-- Nav bar section -->
            
            <nav> 
               <ul id = "navlist">
                 
                    <a href="index.php"><img id="Logo" src="WebsiteImages/Logo.png"></a>
                    <li class= "navElement" id="searchbar"> <input type = "text" id="title" placeholder="Search..  "></li>
                    <li class= "navElement"> <input type="button" id="btnSearch" onclick="SendSearch()" > </li>
                    <li class= "navElement" id="btnExplore"> <a href = "ServicesOffered.php"> EXPLORE </a> </li>
                        <li class= "navElement" id="btnBecome"> <a href = "BecomeAFreelancer.php"> BECOME A FREELANCER </a> </li>
                        <li class= "navElement" id="btnLogin"> <a href = "Login_Index.php"> LOGIN </a> </li>
                        <li class= "navElement" id="btnAbout"> <a href = "About.php"> ABOUT </a> </li>
                        
                    <div id="dropdown" class="navElement">
                       <button class="btnDrop">&#9776;</button>
                       <div class="dropdown-content">
                        <li class= "dropElement" id="dropExplore"> <a href = "ServicesOffered.php"><span> EXPLORE </span></a> </li>
                        <li class= "dropElement" id="dropBecome"> <a href = "BecomeAFreelancer.php"><span> BECOME A FREELANCER</span> </a> </li>
                        <li class= "dropElement" id="dropLogin"> <a href = "Login_Index.php"><span> LOGIN </span></a> </li>
                        <li class= "dropElement" id="dropAbout"> <a href = "About.php"><span style="color:white;">ABOUT </span></a> </li>
                       </div>
                    </div>
                </ul>
            </nav>
</body>
</html>