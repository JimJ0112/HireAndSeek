<?Php
require('Includes/databaseConnection.php');
$_POST["AccountCheckBox"];
$Queries = array();

if(!empty($_POST["AccountCheckBox"])){

    foreach($_POST["AccountCheckBox"] as $ID){
         
        $Queries[] ="UPDATE signupverification SET SignupStatus = 'Declined' WHERE id = $ID"; 
        
    } // create query for each item in array 

    foreach($Queries as $Queries){
        mysqli_query($conn,$Queries);
    } // submit query to database

}




?>