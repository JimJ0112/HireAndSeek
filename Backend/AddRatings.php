<?php
require('../includes/databaseConnection.php');
/*
echo $_POST["ServiceID"];
echo $_POST["Star"];
*/
if($_POST["Star"]==1){
 
    $SID = $_POST["ServiceID"];
    $query = "UPDATE servicesinfo SET Service1StarRatings = Service1StarRatings + 1 WHERE ServiceID = $SID";

}else if($_POST["Star"]==2){
 
    $SID = $_POST["ServiceID"];
    $query = "UPDATE servicesinfo SET Service2StarRatings = Service2StarRatings + 1 WHERE ServiceID = $SID";

}else if($_POST["Star"]==3){
 
    $SID = $_POST["ServiceID"];
    $query = "UPDATE servicesinfo SET Service3StarRatings = Service3StarRatings + 1 WHERE ServiceID = $SID";

}else if($_POST["Star"]==4){
 
    $SID = $_POST["ServiceID"];
    $query = "UPDATE servicesinfo SET Service4StarRatings = Service4StarRatings + 1 WHERE ServiceID = $SID";

}else if($_POST["Star"]==5){
 
    $SID = $_POST["ServiceID"];
    $query = "UPDATE servicesinfo SET Service5StarRatings = Service5StarRatings + 1 WHERE ServiceID = $SID";

}else{
    echo"error";
}




$result = mysqli_query($conn,$query);
?>