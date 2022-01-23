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
$CommentsTable = "$JobName.$AccountName.Comments";


//check if directory exists

if (is_dir($Directory) == false){
    echo mkdir($Directory);
}else {echo"Directory Already Exists!";}

// saves file to the server
$Banner1 = file_get_contents($_FILES["Banner1"]["tmp_name"]);
file_put_contents($Directory."/Banner1".$JobName.'.png', $Banner1);
// will be saved to the database
$Banner1Path = $Directory."/Banner1".$JobName.'.png';


// saves file to the server
$Banner2 = file_get_contents($_FILES["Banner2"]["tmp_name"]);
file_put_contents($Directory."/Banner2".$JobName.'.png', $Banner2);
// will be saved to the database
$Banner2Path = $Directory."/Banner2".$JobName.'.png';



// saves file to the server
$Banner3 = file_get_contents($_FILES["Banner3"]["tmp_name"]);
file_put_contents($Directory."/Banner3".$JobName.'.png', $Banner3);
// will be saved to the database
$Banner3Path = $Directory."/Banner3".$JobName.'.png';



$InsertQuery = "INSERT INTO servicesinfo() VALUES (0,'$JobName','$AccountName','$AccountInbox','$AccountLevel','','$Directory', '$Description','$BasicDescription', '$BasicPrice' , '$StandardDescription', '$StandardPrice','$PremiumDescription','$PremiumPrice' ,0,0,0,0,0,0,'$CommentsTable','$Category','$Banner1Path','$Banner2Path','$Banner3Path');";
$result = mysqli_query($conn,$InsertQuery);

header('location:../ServicesOffered.php');



?>