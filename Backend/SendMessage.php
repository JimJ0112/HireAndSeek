<?Php
session_start();
require('Includes/databaseConnection.php');

$date = $_POST['MessageDate'];
$time = $_POST['MessageTime'];
$AddressedTo = $_POST['MessageRecepient_Form'];
$Subject = $_POST['MessageSubject_Form'];
$MessageBody = $_POST['MessageBody_Form'];
$From = $_SESSION['SessionName'];




//MessageID	SenderEmail	RecieverEmail	MessageDate	MessageTime	Subject	MessageBody	
$InsertQuery = "INSERT INTO inbox (MessageID,SenderEmail,RecieverEmail,MessageDate,MessageTime,Subject,MessageBody) VALUES (0,'$From','$AddressedTo','$date','$time','$Subject','$MessageBody');";
//echo $InsertQuery;
$result = mysqli_query($conn,$InsertQuery);


mysqli_close($conn);
header('location:../Messages.php?data=Message Sent');

?>