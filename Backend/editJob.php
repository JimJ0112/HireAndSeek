<?php
 require('../includes/databaseConnection.php');

 $ServiceID= $_POST["ServiceID"];
 $Title= $_POST["Title"];
 $Description= $_POST["Description"]; 
 $BPDescription= $_POST["BPDescription"]; 
 $BPPrice= $_POST["BPPrice"]; 
 $SPDescription= $_POST["SPDescription"]; 
 $SPPrice= $_POST["SPPrice"]; 
 $PPDescription= $_POST["PPDescription"]; 
 $PPPrice= $_POST["PPPrice"]; 
 $GcashNumber= $_POST["GcashNumber"]; 
 $Category = $_POST['Category'];





$query = "UPDATE servicesinfo SET ServiceTitle ='$Title' ,ServiceDescription = '$Description',ServiceBasicPlanDescription= '$BPDescription',ServiceBasicPlanPrice ='$BPPrice',ServiceStandardPlanDescription='$SPDescription',ServiceStandardPlanPrice='$SPPrice',ServicePremiumPlanDescription='$PPDescription',ServicePremiumPlanPrice='$PPPrice',category= '$Category',GcashNumber='$GcashNumber' WHERE ServiceID = $ServiceID";
echo $query;

$result = mysqli_query($conn,$query);

mysqli_close($conn);

header('location:../Jobs.php');


?>