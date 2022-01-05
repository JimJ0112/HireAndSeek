<?php
session_start();
$Email = $_POST["Username_TB"];
$Password = $_POST["Password_TB"];

echo  $Email." ".$Password;

$_SESSION['SessionName'] = $Email;

?>


<?php
           
            if(isset($_SESSION['SessionName'])){

            header("Location: ../ServicesOffered.php", true, 301);
            
            }
            else{
                header("Location: ../ServicesOffered.php", true, 301);
              
            }
            ?>