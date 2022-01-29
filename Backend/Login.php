<?php
session_start();
require('Includes/databaseConnection.php');



$Email = $_POST["Username_TB"];
$Password = $_POST["Password_TB"];



$Query = "SELECT email, userpassword,AccountType,AccountLevel,FileMailingAddress FROM accounts WHERE email = '$Email' && userpassword = '$Password' ";

$result = mysqli_query($conn,$Query);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
       
    while($row = mysqli_fetch_array($result)){

  
        $_SESSION["SessionName"] = $row['email'] ;
        $_SESSION["AccountType"]= $row['AccountType'];
        $_SESSION["AccountLevel"] = $row['AccountLevel'];
        $_SESSION["TransactionsTableName"] = $row['TransactionsTableName'];
        $_SESSION["InboxTableName"] = $row['InboxTableName'];
        $_SESSION["MailingAddress"] = $row['FileMailingAddress'];

 

    } // end of while
} else{
    header('location:../Login_Index.php?data=LoginFailed');

}// end of if



 
 






         
if(isset($_SESSION["SessionName"]) && isset($_SESSION["AccountType"])){

    if($_SESSION["AccountType"] == "Freelancer"){
        header("Location: ../ManageProfile.php");
        //session_regenerate_id(true);
        //exit();

    } else if($_SESSION["AccountType"] == "Customer"){
        header("Location: ../ManageProfile.php");
        //session_regenerate_id(true);
        //exit();
    }
    }else{
        //header("Location: ../ServicesOffered.php");
        header('location:../Login_Index.php?data=LoginFailed');
        //session_regenerate_id(true);
        //exit();
    }



?>



           

            