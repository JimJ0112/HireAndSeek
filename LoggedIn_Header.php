<?php
//session_start();

$sessionID = $_SESSION['SessionName'];
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
                <a href="index.php">Home</a>
                <ul id = "navlist">
                    <li class= "navElement" id="searchbar"> <input type = "text" >  <input type="button"> </li>
                    <li class= "navElement"> <a href = "ServicesOffered.php"> EXPLORE </a> </li>
                    <li class= "navElement"> <a href = "BecomeAFreelancer.php"> BECOME A FREELANCER </a> </li>
                    <li class= "navElement"> <a href = "About.php"> ABOUT </a> </li>
                    <li class="navElement"> <a href="Customer_Dashboard.php"> <?php echo $sessionID;?> </a> </li>
                    <li class="navElement"><a href="Backend/logout.php"> LOG OUT </a> </li>
                </ul>
            </nav>
</body>
</html>