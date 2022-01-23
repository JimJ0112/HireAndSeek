<?php
require('Includes/databaseConnection.php');

$queryString = "SELECT * FROM accounts WHERE InboxCreated = 0";
$result = mysqli_query($conn,$queryString);
$resultCheck = mysqli_num_rows($result);
$QueryArray = array();



if($resultCheck > 0){
 
  while($row = mysqli_fetch_array($result)){
  $name = $row['InboxTableName'];
  $InsertQuery = "CREATE TABLE $name(
      MessageID INT NOT NULL AUTO_INCREMENT,
      SenderEmail VARCHAR(1000),
      RecieverEmail VARCHAR(1000),
      MessageDate VARCHAR(255),
      MessageTime VARCHAR(255),
      MessageBody VARCHAR(3000),
      MessageFilesPath VARCHAR(255),
      PRIMARY KEY(MessageID)

  );";
  
  echo "$InsertQuery <br>";
  mysqli_query($conn,$InsertQuery) or die("error");



  $updateIsInboxCreated = "UPDATE accounts SET InboxCreated = 1 WHERE email = '$row['email']'";
  mysqli_query($conn,$updateIsInboxCreated ) or die("error");
      
  }// end of while

 
} else{
  echo" connection failed";
}// end of if
header("location:CreateTransactionsTables.php");

?>