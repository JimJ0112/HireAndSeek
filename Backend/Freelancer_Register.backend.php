<?php
session_start();
       $firstname = $_POST[ "FirstName"]; 
       $lastname = $_POST["LastName" ];
       $middleInitial = $_POST["MiddleInitial"];
       $age= $_POST[ "Age" ];
       $gender = $_POST["Gender"];
        
       $email = $_POST[ "Email" ];
       $contact = $_POST[ "Contact" ];
       $address = $_POST[ "Address" ];
         
       $description = $_POST[ "Description"];
       $language = $_POST[ "Language"];
       $occupation = $_POST[ "Occupation"]; 

       $education = $_POST[ "Education" ];
       $skills = $_POST[ "Skills" ];
         
       $idType = $_POST["IDTYPE"];

       $idFile = $_POST["IDFile" ];


       echo $firstname." <br> "; 
       echo $lastname." <br> " ;
       echo $middleInitial." <br> "; 
       echo $age." <br> ";
       echo $gender." <br> "; 
        
       echo $email." <br> " ;
       echo $contact." <br> "; 
       echo $address." <br> " ;
         
       echo $description." <br> ";
       echo $language." <br> " ;
       echo $occupation." <br> "; 

       echo $education." <br> ";
       echo $skills." <br> " ;
         
       echo $idType." <br> " ;

       echo $idFile." <br> " ;
         

?>