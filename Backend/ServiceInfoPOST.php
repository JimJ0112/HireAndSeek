<?php
session_start();


$temp = $_SESSION['email'];
//echo $temp;
//echo ' '.implode(" ",$temp);
echo json_encode($temp,true);
?>

