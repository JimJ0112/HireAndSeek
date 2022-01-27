<?php

require('../includes/databaseConnection.php');
$SID = $_POST['ServiceID'];
$TotalRatings = $_POST['totalRatings'];
$query = "UPDATE servicesinfo SET ServiceTotalRatings = $TotalRatings WHERE ServiceID = $SID";
echo $query;

$result = mysqli_query($conn,$query);

mysqli_close($conn);
?>