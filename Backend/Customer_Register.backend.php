<?php
require("../includes/databaseConnection.php");
require("../includes/checkIfExists.php");
session_start();


      /* GET DATA FROM FRONT END FORM */
      $AccountType = "Customer";
      $customUsername = $_POST["UserName"];
       $firstname = $_POST[ "FirstName"]; 
       $lastname = $_POST["LastName" ];
       $middleInitial = $_POST["MiddleInitial"];
       $Birthdate= $_POST[ "Birthdate" ];
       $gender = $_POST["Gender"];
        
       $email = $_POST[ "Email" ];
       $password = $_POST["UserPassword"];
       $contact = $_POST[ "Contact" ];
       $address = $_POST[ "Address" ];
         
       $description = $_POST[ "Description"];
       $language = $_POST[ "Language"];



       /* making directory to store the files for user */
       $Directory = 'UserRegisterFiles/'.$email.$firstname;
       if(is_dir($Directory)==false){
       echo mkdir($Directory);

       } else {echo"Directory Already Exists!";}
       
       
       /* converting image data URL to base 64 and decoding it to png file*/

       /* it needs to be done because the image has been converted to dataurl, cant read to server's computer */
       $UserSnapshot = $_POST["UserSnapshot"];
       
       //replaces space with + sign in the string
       $UserSnapshot = str_replace(' ','+',$UserSnapshot);
       
       // convert the string into array, use ',' as separator
       list(, $UserSnapshot)= explode(',', $UserSnapshot);
       
       // extract base64 string from the array
       $IMGData = base64_decode($UserSnapshot);

       // save the base64 string into .png to the directory
      file_put_contents($Directory."/".$email.$firstname.'.png', $IMGData);
      
      // snapshot directory string that will be saved in the database

      $snapshotdirectory = $Directory."/".$email.$firstname.'.png';
      
       /* end of convertion */
       

       $idType = $_POST["IDTYPE"];
       $idType2 = $_POST["IDTYPE2"];


     
      
    
     
      
       $IMGData1 = file_get_contents($_FILES["IDFile"]["tmp_name"]);
      file_put_contents($Directory."/ID1".$firstname.$lastname.'.png', $IMGData1);
      $ID1directory = $Directory."/ID1".$firstname.$lastname.'.png';


   

   
      $IMGData2 = file_get_contents($_FILES["IDFile2"]["tmp_name"]);
       file_put_contents($Directory."/ID2".$firstname.$lastname.'.png', $IMGData2);
       $ID2directory = $Directory."/ID2".$firstname.$lastname.'.png';


       //check if the email address is already taken
       $checker = checkIfExists($conn,'signupverification',$email,'email');

      if( $checker > 0){
        header('location:../Customer_Register.php?data=registrationfailed-email_already_exists');
 
      } else{
        $sqlquery = "INSERT INTO signupverification(id,firstname,lastname,middlename,Birthdate,gender,email,userpassword,contact,address,description,userlanguage,snapshotPath,idimage1type,idimage1Path,idimage2type,idimage2Path,AccountType,SignupStatus,filesdirectory,customUsername) VALUES(0,'$firstname','$lastname','$middleInitial','$Birthdate','$gender','$email','$password','$contact','$address','$description','$language','$snapshotdirectory','$idType','$ID1directory','$idType2','$ID2directory','$AccountType','','$Directory','$customUsername');";
        $result = mysqli_query($conn,$sqlquery) ;
        
        //echo $result;
  
        header('location:../Customer_Register.php?data=registrationSuccess');

      }




     



      //mail($email,'Hire and seek registration status ','Your registration to hire and seek is up for verification, you will be notified once your application has been approved \n -Hire and seek');

?>