<?php
session_start();
    
if(isset($_SESSION['SessionName'])){

    echo "welcome, ".$_SESSION['SessionName'];
    
}
else{
    echo "Session name invalid";
}

echo"<br> <br> <br>";

$Mac  = "E0-D5-5E-3A-92-A7 \Device\Tcpip_{CD3D1C7D-3C22-4405-8104-70B32A2D612F}";
$DeviceMac = exec('getmac');


if($DeviceMac == $Mac){
    echo $DeviceMac." is equal to ".$Mac;
} else {
    echo $DeviceMac." is not equal to ".$Mac;
}






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
