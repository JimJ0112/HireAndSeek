<?php
session_start();

$Accounts = array(

    array(1," JL Manrique ","Level 2 ","ckxo ","Ratings: 5 ","asdsadsa ","Php 500.00 "),
    array(2," Juls Delos Reyes ","Level 3 ","ckxo ","Ratings: 5 ","asdsadasd ","Php 600.00 "),
    array(3," JM Nepomuceno ","Level 3 ","ckxo ","Ratings: 5 ","dfgrtygeg ","Php 700.00 "),
    array(4," Shawn Bueno ","Level 3 ","ckxo ","Ratings: 5 ","bvnjytj ","Php 800.00 "),
    array(5," Allen Cortez ","Level 5 ","ckxo ","Ratings: 5 ","tryfhgf ","Php 1000.00 "),
    array(6," Guillermo Yaras ","Level 2 ","ckxo ","Ratings: 5 ","asdsadsa ","Php 500.00 "),
    array(7," Robemar Yambao ","Level 3 ","ckxo ","Ratings: 5 ","asdsadasd ","Php 600.00 "),
    array(8," Michael Manrique ","Level 3 ","ckxo ","Ratings: 5 ","dfgrtygeg ","Php 700.00 "),
    array(9," Jezzie Medrano ","Level 3 ","ckxo ","Ratings: 5 ","bvnjytj ","Php 800.00 "),
    array(10," Aeonix ","Level 5 ","ckxo ","Ratings: 5 ","tryfhgf ","Php 1000.00 "),
    array(11," Patricia Navarro ","Level 2 ","ckxo ","Ratings: 5 ","asdsadsa ","Php 500.00 "),
    array(12," Razel Ruegas ","Level 3 ","ckxo ","Ratings: 5 ","asdsadasd ","Php 600.00 "),
    array(13," John Carlo Saez ","Level 3 ","ckxo ","Ratings: 5 ","dfgrtygeg ","Php 700.00 "),
    array(14," JL Manrique","Level 3","ckxo","Ratings: 5","bvnjytj","Php 800.00"),
    array(15," Bill Gates","Level 5","ckxo","Ratings: 5","tryfhgf ","Php 1000.00"),
    array(16," The 1975 ","Level 2","ckxo","Ratings: 5","asdsadsa","Php 500.00"),
    array(17," Lany","Level 3","ckxo","Ratings: 5","asdsadasd","Php 600.00"),
    array(18," The Weeknd","Level 3","ckxo","Ratings: 5","dfgrtygeg","Php 700.00"),
    array(19," Ben & Ben","Level 3","ckxo","Ratings: 5","bvnjytj","Php 800.00"),
    array(20," IV of Spades","Level 5","ckxo","Ratings: 5","tryfhgf ","Php 1000.00"),
    array(21," GMA","Level 2","ckxo","Ratings: 5","asdsadsa","Php 500.00"),
    array(22," ABS - CBN ","Level 3","ckxo","Ratings: 5","asdsadasd","Php 600.00"),
    array(23," Sony Pictures","Level 3","ckxo","Ratings: 5","dfgrtygeg","Php 700.00"),
    array(24," Marvel Studios","Level 3","ckxo","Ratings: 5","bvnjytj","Php 800.00"),
    array(25," Martin Scorsese","Level 5","ckxo","Ratings: 5","tryfhgf ","Php 1000.00")
    );


    //echo json_encode($Accounts);


$ReqServiceID = $_POST['ReqServiceID'];

//echo $ReqServiceID;
$rows = count($Accounts);
//echo $rows;

for($i=0; $i<=$rows-1; $i++){

if($ReqServiceID == $Accounts[$i][0]){

 $id= $Accounts[$i][0];
 $name=$Accounts[$i][1];
 $lvl = $Accounts[$i][2];
 $ttl = $Accounts[$i][3];
 $rating = $Accounts[$i][4];
 $dscrptn= $Accounts[$i][5];
 $prc = $Accounts[$i][6];

$SelectedAccount = array($id,$name,$lvl,$ttl,$rating,$dscrptn,$prc);
echo json_encode($SelectedAccount);

$_SESSION["SelectedAccount"] = $SelectedAccount; 

}};




?>
