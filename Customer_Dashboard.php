<?php
session_start();
    
if(isset($_SESSION['SessionName'])){

    echo "welcome, ".$_SESSION['SessionName'];
}
else{
    echo "Session name invalid";
}
?>


<?php
            include_once("Header.php");
            if(isset($_SESSION['SessionName'])){

                include_once("LoggedIn_Header.php");
                
            }
            else{
                include_once("Header.php");
            }
            ?>