<?php
include_once'';
session_start();
       $firstname = $_POST[ "FirstName"]; 
       $lastname = $_POST["LastName" ];
       $middleInitial = $_POST["MiddleInitial"];
       $age= $_POST[ "Age" ];
       $gender = $_POST["Gender"];
        
       $email = $_POST[ "Email" ];
       $contact = $_POST[ "Contact" ];
       $address = $_POST[ "Address" ];
         
       $birthdate = $_POST[ "BirthDate"];
       $language = $_POST[ "Language"];
       $civilStatus = $_POST[ "CivilStatus"]; 

 
         
       $idType = $_POST["IDTYPE"];
       $idType2 = $_POST["IDTYPE2"];
       $idFile = $_POST["IDFile" ];
       $idFile2 = $_POST["IDFile2" ];


       echo $firstname." <br> "; 
       echo $lastname." <br> " ;
       echo $middleInitial." <br> "; 
       echo $age." <br> ";
       echo $gender." <br> "; 
        
       echo $email." <br> " ;
       echo $contact." <br> "; 
       echo $address." <br> " ;
         
       echo $birthdate." <br> ";
       echo $language." <br> " ;
       echo $civilStatus." <br> "; 

       echo $idType." <br> " ;

       echo $idFile." <br> " ;
       
       echo $idType2." <br> " ;

       echo $idFile2." <br> " ;

?>