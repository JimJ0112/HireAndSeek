<?php

require('../Includes/databaseConnection.php');

$ServiceID = $_POST['ServiceID'];
//echo $TransactionID;


/*
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
*/
   echo $queryString = "DELETE FROM servicesinfo WHERE ServiceID = $ServiceID";
   $result = mysqli_query($conn,$queryString);












?>






