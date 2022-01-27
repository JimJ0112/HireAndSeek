<?php
    require('Includes/databaseConnection.php');

      $queryString = "SELECT id,email,firstname,lastname,middlename,Birthdate,gender,userpassword,contact,address,description,userlanguage,occupation,education,skills,snapshotPath,idimage1type,idimage1Path,idimage2type,idimage2Path,AccountType,SignupStatus,filesdirectory,customUsername,FileMailingAddress FROM signupverification WHERE SignupStatus = 'Approved';";
      $result = mysqli_query($conn,$queryString);
      $resultCheck = mysqli_num_rows($result);
      $QueryArray = array();
   


    if($resultCheck > 0){
       
        while($row = mysqli_fetch_array($result)){
            //mail($row['email'],'Account Approved','Hello, Welcome to Hire and Seek, your account has been approved','From: hireandseekdemo@gmail.com');

         $email = strstr($row['email'],'@',true);   
        
        $InsertQuery = "INSERT INTO accounts VALUES ('$row[email]', '$row[firstname]', '$row[lastname]', '$row[middlename]', '$row[Birthdate]', '$row[gender]', '$row[userpassword]', '$row[contact]', '$row[address]', '$row[description]', '$row[userlanguage]', '$row[occupation]', '$row[education]', '$row[skills]', '$row[snapshotPath]', '$row[idimage1type]', '$row[idimage1Path]', '$row[idimage2type]', '$row[idimage2Path]', '$row[AccountType]', 'Level 1', '$row[filesdirectory]','','','$row[customUsername]','$row[FileMailingAddress]')";
         
        mysqli_query($conn,$InsertQuery);
            
        }// end of while

       
    } else{
        echo" connection failed";
    }// end of if


header("location:Maintenance.php");

?>