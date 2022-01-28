<?php
require('../includes/databaseConnection.php');
/*
echo $_POST["ServiceID"];
echo $_POST["Star"];
*/

$encodedEmail = $_GET["useremail"];
$UserEmail= urldecode($encodedEmail);
$ServiceID = $_GET["serviceid"];
$Rating = $_GET["rating"];


$query = "INSERT INTO customerrating(RatingID,ServiceID,AccountEmail,Rating) VALUES(0,$ServiceID,'$UserEmail',$Rating);";



$result = mysqli_query($conn,$query);

mysqli_close($conn);
?>