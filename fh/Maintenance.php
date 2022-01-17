<?php
session_start();
    
if(isset($_SESSION['SessionName'])){

    //echo "welcome, ".$_SESSION['SessionName'];
    
}
else{
   // echo "Session name invalid";
}








$clientIP = $_SERVER['REMOTE_ADDR'];
$MyServerIP = "122.2.121.183";
$PartnerIP = "180.191.216.101";    

if($clientIP != $MyServerIP && $clientIP != $PartnerIP){
    header('location:../index.php?data=ACCESSNOTALLOWED');
} else {
    //echo $clientIP." equal to ".$ServerIP."\n Hello Admin";
}



echo "<br> <br> <br>";



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





        </body>
    </html>
