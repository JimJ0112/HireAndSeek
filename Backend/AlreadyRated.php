<?php
require('../includes/databaseConnection.php');
/*
echo $_POST["ServiceID"];
echo $_POST["Star"];


$encodedEmail = $_GET["useremail"];
$UserEmail= urldecode($encodedEmail);
$ServiceID = $_GET["serviceid"];
$Rating = $_GET["rating"];
*/

$UserEmail= $_POST["UserEmail"];
$ServiceID = $_POST["ServiceID"];
$Rating = $_POST["Star"];


$query = "SELECT * FROM customerrating WHERE ServiceID = $ServiceID && AccountEmail='$UserEmail'";
$result = mysqli_query($conn,$query);

$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while($row = mysqli_fetch_array($result)){
        $Rating =  $row['Rating'];
    }
    echo $Rating;
} else {
    echo "0";
}


//echo $resultCheck;



mysqli_close($conn);
?>