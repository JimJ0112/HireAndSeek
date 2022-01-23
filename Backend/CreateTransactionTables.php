<?php
require('Includes/databaseConnection.php');

$queryString = "SELECT * FROM accounts WHERE TransactionsCreated = 0";
$result = mysqli_query($conn,$queryString);
$resultCheck = mysqli_num_rows($result);
$QueryArray = array();



if($resultCheck > 0){
 
  while($row = mysqli_fetch_array($result)){
  $name = $row['TransactionsTableName'];
  $InsertQuery = "CREATE TABLE $name(
 transactionID INT NOT NULL AUTO_INCREMENT,
 ServiceID INT,
 ServiceTitle VARCHAR(255),
 clientNotes VARCHAR(1000),
 transactionstartDate VARCHAR(255),
 transactionFinishedDate VARCHAR(255),
 availedPlan VARCHAR(255),
 payment VARCHAR(255),
 TransactionStatus VARCHAR(255),
 clientEmail VARCHAR(255),
 FilesDirectory VARCHAR(1000),
 AgreementContract VARCHAR(5000),
 PRIMARY KEY( transactionID)

  );";
  
  echo "$InsertQuery <br>";
  mysqli_query($conn,$InsertQuery) or die("error");
      
  $updateIsInboxCreated = "UPDATE accounts SET TransactionsCreated = 1 WHERE email = '$row[email]'";
  echo $updateIsInboxCreated;
  mysqli_query($conn,$updateIsInboxCreated ) or die("error");


  }// end of while

 
} else{
  echo" connection failed";
}// end of if
//header("location:Maintenance.php");

?>