<?Php
session_start();
$AccountName = $_SESSION["SessionName"];
$Category = $_POST['Category'];
$JobName = $_POST['JobName'];
$Description = $_POST["JobDescription"]; 
$BasicDescription = $_POST["BasicPlanDescription"];
$StandardDescription = $_POST["StandardPlanDescription"]; 
$PremiumDescription = $_POST["PremiumPlanDescription"]; 
$BasicPrice = $_POST["BasicPlanPrice"]; 
$StandardPrice = $_POST["StandardPlanPrice"]; 
$PremiumPrice = $_POST["PremiumPlanPrice"];
                        
echo $AccountName;
echo $Category; 
echo $JobName; 
echo $Description;  
echo $BasicDescription; 
echo $StandardDescription;  
echo $PremiumDescription; 
echo $BasicPrice; 
echo $StandardPrice;  
echo $PremiumPrice;


?>