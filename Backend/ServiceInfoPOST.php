<?php
session_start();


$temp = $_SESSION['SelectedAccount'];

echo json_encode($temp,true);
?>

