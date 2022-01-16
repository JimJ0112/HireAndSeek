<?php
include_once("../includes/databaseConnection.php");
session_start();

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

       /*get ID image file */
     //  $idFile = $_FILES["IDFile" ]["tmp_name1"];
     
       /*convert to base64 */
      // $id1FileImgBase64 = base64_encode(file_get_contents($_FILES["IDFile"]["tmp_name"]));
      $id1FileImgBase64 = $_FILES["IDFile"]["tmp_name"];
       /* decode encoded base64 image file into base64 string */
       $IMGData1 = file_get_contents($_FILES["IDFile"]["tmp_name"]);
      file_put_contents($Directory."/ID1".$firstname.$lastname.'.png', $IMGData1);
      $ID1directory = $Directory."/ID1".$firstname.$lastname.'.png';


    //   $idFile2 = $_FILES["IDFile2" ]["tmp_name2"];

      // $id2FileImgBase64 = base64_encode(file_get_contents($_FILES["IDFile2"]["tmp_name"]));
     // $id2FileImgBase64 = file_get_contents($_FILES["IDFile2"]["tmp_name"]);
      $IMGData2 = file_get_contents($_FILES["IDFile2"]["tmp_name"]);
       file_put_contents($Directory."/ID2".$firstname.$lastname.'.png', $IMGData2);
       $ID2directory = $Directory."/ID2".$firstname.$lastname.'.png';



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
       
      // echo $IMGData."<br>";

       echo $idType." <br> " ;

       //echo $id1FileImgBase64." <br> " ;

       echo strlen($id1FileImgBase64);

       echo $idType2." <br> " ;

       //echo $id2FileImgBase64." <br> " ;


      $number = rand();
      $sqlquery = "INSERT INTO signupverification(id,firstname,lastname,middleinitial,age,gender,email,userpassword,contact,address,description,userlanguage,occupation,education,skills,snapshotdirectory,idimage1type,idimage1directory,idimage2type,idimage2directory) VALUES($number,'$firstname','$lastname','$middleInitial','$age','$gender','$email','$password','$contact','$address','$description','$language','$occupation','$education','$skills','$snapshotdirectory','$idType','$ID1directory','$idType2','$ID2directory');";
     // $sqlquery = "INSERT INTO signupverification(id,firstname,lastname,middleinitial,age,gender,email,userpassword,contact,address,description,userlanguage,occupation,education,skills,snapshotdirectory,idimage1type,idimagefile1directory,idimage2type,idimage2directory) VALUES(0,'JL','Manrique','M','21','MALE','jimmanrique12@gmail.com','09355026284','dfsds','dff','sdfdsaf','sdfdsfa','college','sleeping','../UserRegisterFiles/JLManrique/JLManrique.png','National ID','../UserRegisterFiles/JLManrique/ID1JLManrique.png','Driver's license','../UserRegisterFiles/JLManrique/ID1JLManrique.png');";
       mysqli_query($conn,$sqlquery);
       
         

?>