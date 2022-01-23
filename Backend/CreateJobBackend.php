<?Php
session_start();
require('Includes/databaseConnection.php');

$AccountName = $_SESSION["SessionName"];
$AccountLevel = $_SESSION["AccountLevel"];
$AccountInbox = $_SESSION['InboxTableName'];
$AccountTransactions = $_SESSION["TransactionsTableName"];

$Category = $_POST['Category'];
$JobName = $_POST['JobName'];
$Description = $_POST["JobDescription"]; 
$BasicDescription = $_POST["BasicPlanDescription"];
$StandardDescription = $_POST["StandardPlanDescription"]; 
$PremiumDescription = $_POST["PremiumPlanDescription"]; 
$BasicPrice = $_POST["BasicPlanPrice"]; 
$StandardPrice = $_POST["StandardPlanPrice"]; 
$PremiumPrice = $_POST["PremiumPlanPrice"];
$Directory = "ServicesFiles/$JobName.$AccountName";

//check if directory exists
if(is_dir($Directory) == false){
    echo mkdir($Directory);
}else {echo"Directory Already Exists!";}



echo "$AccountName <br>";
echo "$AccountLevel <br>";
echo "$AccountInbox <br>";
echo "$AccountTransactions <br>";
echo "$Category <br>"; 
echo "$JobName <br>"; 
echo "$Description <br>";  
echo "$BasicDescription <br>"; 
echo "$StandardDescription <br>";  
echo "$PremiumDescription <br>"; 
echo "$BasicPrice <br>"; 
echo "$StandardPrice <br>";  
echo "$PremiumPrice <br>";
echo "$Directory <br>";

?>