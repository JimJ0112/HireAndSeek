<?php

require('../Includes/databaseConnection.php');

$TransactionID = $_POST['TransactionID'];
//echo $TransactionID;



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

   echo $queryString = "UPDATE transactionrecords SET TransactionStatus = 'Canceled' WHERE transactionID = $TransactionID ";
   $result = mysqli_query($conn,$queryString);












?>






