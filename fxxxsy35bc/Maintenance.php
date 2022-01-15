<?php
session_start();
    
if(isset($_SESSION['SessionName'])){

    echo "welcome, ".$_SESSION['SessionName'];
    
}
else{
    echo "Session name invalid";
}

echo"<br> <br> <br>";

echo $_GET['auth'];



/*

$clientIP = $_SERVER['REMOTE_ADDR'];
$ServerIP = "::1";

if($clientIP != $ServerIP){
    echo $clientIP." not equal to ".$ServerIP;
} else {echo $clientIP." equal to ".$ServerIP;}

echo "<br> <br> <br>";
*/


/*
if($clientIP !== $ServerIP ){
    header("Location: ../ServicesOffered.php");
} else {
    echo"welcome, Admin";
}
*/

?>

<DOCTYPE>
    <html>
        <head>
            <link rel="../stylesheet" href="Style.css" type="text/css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

        </head>
        <body>

            <!-- Nav bar section -->
            <?php
           
            if(isset($_SESSION['SessionName'])){

                include_once("../LoggedIn_Header.php");
                
            }
            else{
                include_once("../Header.php");
            }
            ?>



        </body>
    </html>
