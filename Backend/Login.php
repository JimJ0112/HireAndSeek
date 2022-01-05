<?php
session_start();
$Email = $_POST["Username_TB"];
$Password = $_POST["Password_TB"];

$Accounts = array(

    array("Admin","1234"),
    array("JL Manrique","4321")
);

$AccountsLength = count($Accounts)-1;

for($i = 0; $i <= $AccountsLength;$i++){

if($Email == $Accounts[$i][0] and $Password == $Accounts[$i][1]){

    $_SESSION["SessionName"] = $Accounts[$i][0];

} else {
    echo"invalid";
}

}



         
if(isset($_SESSION["SessionName"])){

    header("Location: ../ServicesOffered.php");
    //session_regenerate_id(true);
    exit();
    
    }
    else{
        header("Location: ../ServicesOffered.php");
        //session_regenerate_id(true);
        exit();
    }



?>



           

            