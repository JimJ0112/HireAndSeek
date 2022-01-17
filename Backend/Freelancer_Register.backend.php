<?php
require("../includes/databaseConnection.php");
require("../includes/checkIfExists.php");
session_start();


      /* GET DATA FROM FRONT END FORM */
       $firstname = $_POST[ "FirstName"]; 
       $lastname = $_POST["LastName" ];
       $middleInitial = $_POST["MiddleInitial"];
       $age= $_POST[ "Age" ];
       $gender = $_POST["Gender"];
        
       $email = $_POST[ "Email" ];
       $password = $_POST["UserPassword"];
       $contact = $_POST[ "Contact" ];
       $address = $_POST[ "Address" ];
         
       $description = $_POST[ "Description"];
       $language = $_POST[ "Language"];
       $occupation = $_POST[ "Occupation"]; 

       $education = $_POST[ "Education" ];
       $skills = $_POST[ "Skills" ];


       /* making directory to store the files for user */
       $Directory = '../UserRegisterFiles/'.$firstname.$lastname;
       mkdir($Directory);
       
       /* converting image data URL to base 64 and decoding it to png file*/
       /* it needs to be done because the image has been converted to dataurl, cant read to server's computer */
       $UserSnapshot = $_POST["UserSnapshot"];
       $UserSnapshot = str_replace(' ','+',$UserSnapshot);
       list($type, $UserSnapshot) = explode(';', $UserSnapshot);
       list(, $UserSnapshot)      = explode(',', $UserSnapshot);
       $IMGData = base64_decode($UserSnapshot);
      file_put_contents($Directory."/".$firstname.$lastname.'.png', $IMGData);
      
      $snapshotdirectory = $Directory."/".$firstname.$lastname.'.png';
      
       /* end of convertion */

       $idType = $_POST["IDTYPE"];
       $idType2 = $_POST["IDTYPE2"];


     
      
    
     
      
       $IMGData1 = file_get_contents($_FILES["IDFile"]["tmp_name"]);
      file_put_contents($Directory."/ID1".$firstname.$lastname.'.png', $IMGData1);
      $ID1directory = $Directory."/ID1".$firstname.$lastname.'.png';


    //   $idFile2 = $_FILES["IDFile2" ]["tmp_name2"];

   
      $IMGData2 = file_get_contents($_FILES["IDFile2"]["tmp_name"]);
       file_put_contents($Directory."/ID2".$firstname.$lastname.'.png', $IMGData2);
       $ID2directory = $Directory."/ID2".$firstname.$lastname.'.png';


       //check if the email address is already taken
       $checker = checkIfExists($conn,'signupverification',$email,'email');

      if( $checker > 0){
        header('location:../Freelancer_Register.php?data=registrationfailed-email_already_exists');
 
      } else{
        $sqlquery = "INSERT INTO signupverification(id,firstname,lastname,middleinitial,age,gender,email,userpassword,contact,address,description,userlanguage,occupation,education,skills,snapshotdirectory,idimage1type,idimage1directory,idimage2type,idimage2directory) VALUES(0,'$firstname','$lastname','$middleInitial','$age','$gender','$email','$password','$contact','$address','$description','$language','$occupation','$education','$skills','$snapshotdirectory','$idType','$ID1directory','$idType2','$ID2directory');";
        $result = mysqli_query($conn,$sqlquery);
        
        //echo $result;
  
        header('location:../Freelancer_Register.php?data=registrationSuccess');

      }




     



      //mail($email,'Hire and seek registration status ','Your registration to hire and seek is up for verification, you will be notified once your application has been approved \n -Hire and seek');

?>