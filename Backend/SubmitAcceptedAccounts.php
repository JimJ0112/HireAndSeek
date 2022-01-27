<?Php
require('Includes/databaseConnection.php');
$_POST["AccountCheckBox"];
$AccountEmailHidden = $_POST['AccountEmailHidden'];
$Queries = array();

mail($AccountEmailHidden,'Account Approved','Hello, Welcome to Hire and Seek, your account has been approved','From: hireandseekdemo@gmail.com');

//echo $AccountEmailHidden;

if(!empty($_POST["AccountCheckBox"])){

    foreach($_POST["AccountCheckBox"] as $ID){
         
        $Queries[] ="UPDATE signupverification SET SignupStatus = 'Approved' WHERE id = $ID"; 
        
    } // create query for each item in array 





    foreach($Queries as $Queries){
        mysqli_query($conn,$Queries);
        
  


    } // submit query to database





 



} // end of IF

/*
if(!empty($_POST["AccountEmailHidden"])){

foreach($_POST["AccountEmailHidden"] as $Email){
         
    // mail($Email,'Account Approved','Hello, Welcome to Hire and Seek, your account has been approved','From: hireandseekdemo@gmail.com');
     
    echo $Email.'Account Approved'.'Hello, Welcome to Hire and Seek, your account has been approved'.'From: hireandseekdemo@gmail.com';
 } // create query for each item in array 
}

*/

header("location:TransferToAccounts.php");

?>