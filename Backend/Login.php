<?php
session_start();
$Email = $_POST["Username_TB"];
$Password = $_POST["Password_TB"];

echo  $Email." ".$Password;


?>