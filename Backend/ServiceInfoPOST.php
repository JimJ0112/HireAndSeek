<?php
session_start();


$temp = $_SESSION["SelectedAccount"];
//echo $temp;
//echo ' '.implode(" ",$temp);
echo json_encode($temp,true);
?>

