

<?php
session_start();


$Accounts = array(

    array("John Carlo Saez","Level 2","Ratings: 5","asdsadsa","Php 500.00"),
    array("Razel Ruegas","Level 3","Ratings: 5","asdsadasd","Php 600.00"),
    array("Master Roki","Level 3","Ratings: 5","dfgrtygeg","Php 700.00"),
    array("Yujin Valentos","Level 3","Ratings: 5","bvnjytj","Php 800.00"),
    array("safdasf","Level 5","Ratings: 5","tryfhgf ","Php 1000.00")
    );


    echo json_encode($Accounts);


?>




