<?php
session_start();
require('../Includes/databaseConnection.php');


if(isset($_POST['Username_TB'])){

$username = $_POST['Username_TB'];
$pass = $_POST['Password_TB'];

$Query = "SELECT * FROM admins WHERE username = '$username' && userpassword = '$pass' ";
$result = mysqli_query($conn,$Query);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
   
 


    while($row = mysqli_fetch_array($result)){

  
        $_SESSION['admin'] = $row['username'];
        header('location:../Backend/Maintenance.php');
 

    } // end of while

} else{echo"doesnt exist";}


}


?>

<!DOCTYPE html>
    <html>
        <head>
        <link rel="icon" href="favicon.ico">
            <link rel="stylesheet" href="../Style.css" type="text/css">
            <script src="Scripts/Login.js"> </script>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

        </head>
        <body>

<div class="Login-Container" style="border:1px solid black; background-color:skyblue;">
            <!-- Nav bar section -->
 
            <div class="logForm" >
                 <form action="index.php" method="post">
                    <fieldset id="logFieldset">
                        <div class="logDiv"><label class="logTxtLogin">LOG IN</label></div> <br> <br>
                        <div class="logDiv"><label class="logTxt">Admin UserName</label></div> 
                        <div class="logDiv"><input type="text" name="Username_TB" placeholder="Admin" class="logTB"></div> <br> 
                        <div class="logDiv"><label class="logTxt">PASSWORD</label></div> 
                        <div class="logDiv"><input type="password" name="Password_TB" class="logTB"></div> <br> <br>
                        

                    <div class="logDiv">
                        <input type="submit" value="LOG IN" class="logBtnSubmit">
                    </div>

</fieldset>
                    </form>
                    
        
        

</div>

</div>

 </body>
    </html>