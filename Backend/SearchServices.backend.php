<?php

require('../includes/databaseConnection.php');
require('../includes/checkIfExists.php');


if(isset($_POST['title'])){

$title = $_POST['title'];
$tbname = "servicesinfo";
$column = "ServiceTitle";

$result = searchSuggestions($conn,$tbname,$title,$column);

echo $result;

} else{

    echo"query invalid";
}




?>