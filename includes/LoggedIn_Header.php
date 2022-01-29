<?php
//session_start();

$sessionID = $_SESSION['SessionName'];
$accountType = $_SESSION["AccountType"];


if($accountType == "Freelancer"){
    $redirectQuery = "ManageProfile.php";

} else if($accountType == "Customer"){
    $redirectQuery= "ManageProfile.php";
}

echo "<script> sessionStorage.setItem('sessionName', '$sessionID'); </script>";

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
<!--
            <nav> 
                <ul id = "navlist">
                <a href="index.php"><img id="Logo" src="WebsiteImages/Logo.png"></a>
                <li class= "navElement" id="searchbar"> <input type = "text" id="title" placeholder="Search..  "   oninput="searchSuggestionResults()" >
                    <div id="SearchSuggestions"> </div>
                </li>
                    <li class= "navElement"> <input type="button" id="btnSearch" onclick="SendSearch()" > </li>
                    <li class= "navElement" id="btnExplore"> <a href = "ServicesOffered.php"> EXPLORE </a> </li>
                    <li class= "navElement" id="btnBecome"> <a href = "BecomeAFreelancer.php"> BECOME A FREELANCER </a> </li>
                    <li class= "navElement" id="btnAbout"> <a href = "About.php"> ABOUT </a> </li>
                    <li class="navElement" id="btnUser"> <a href=<?php echo $redirectQuery;?>> <?php echo $sessionID;?> </a> </li>
                    <li class="navElement" id="btnLogout"><a href="Backend/logout.php"> LOG OUT </a> </li>
              
                    <div id="dropdown" class="navElement">
                       <button class="btnDrop">&#9776;</button>
                       <div class="dropdown-content">
                        <li class= "dropElement" id="dropExplore"> <a href = "ServicesOffered.php"><span> EXPLORE </span></a> </li>
                        <li class= "dropElement" id="dropBecome"> <a href = "BecomeAFreelancer.php"><span> BECOME A FREELANCER</span> </a> </li>
                        <li class= "dropElement" id="dropAbout"> <a href = "About.php"><span style="color:white;">ABOUT </span></a> </li>
                        <li class="dropElement" id="dropUser"><span style="color:white;"> <?php echo $sessionID;?></span></a> </li>
                        <li class="dropElement" id="dropLogout"><span><a href="Backend/logout.php"> LOG OUT </span></a> </li>
                        </div>
                    </div>
                </ul>
            </nav>
-->



            <nav> 
                <ul id = "navlist">
                <a href="index.php"><img id="Logo" src="WebsiteImages/Logo.png"></a>
                <li class= "navElement" id="searchbar" > <input type = "text" id="title" placeholder="Search..  "   oninput="searchSuggestionResults()" >
                    
                <div id="SearchSuggestions"> </div>
                    
                </li>
                    <li class= "navElement" > <input type="button" id="btnSearch" onclick="showSearchBar()" > </li>
                    <li class= "navElement" id="btnExplore"> <a href = "ServicesOffered.php"> EXPLORE </a> </li>
                    <li class= "navElement" id="btnAbout"> <a href = "About.php"> ABOUT </a> </li>
                    <li class="navElement" id="btnUser"> <a href=<?php echo $redirectQuery;?>> <?php echo $sessionID;?> </a> </li>
                    <li class="navElement" id="btnLogout"><a href="Backend/logout.php"> LOG OUT </a> </li>
              
                    <div id="dropdown" class="navElement">
                       <button class="btnDrop">&#9776;</button>
                       <div class="dropdown-content">
                        <li class= "dropElement" id="dropAbout"> <a href = "About.php"><span style="color:white;">ABOUT </span></a> </li>
                        <li class="dropElement" id="dropUser"><span style="color:white;"> <?php echo $sessionID;?></span></a> </li>
                        <li class="dropElement" id="dropLogout"><span><a href="Backend/logout.php"> LOG OUT </span></a> </li>
                        </div>
                    </div>
                </ul>
            </nav>
            <script src="Scripts/ServiceSearch.js"> </script>
          <script src="Scripts/ServicesOffered.js"> </script>
</body>
</html>