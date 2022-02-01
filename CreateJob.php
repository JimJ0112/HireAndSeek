<?php
session_start();

//echo $_SESSION["SessionName"];
//echo $_SESSION["AccountType"];
if(!isset($_SESSION['SessionName'])){

    header('location:Login_Index.php?data=PleaseLogIn');
} 

if($_SESSION["AccountType"] != "Freelancer"){
    header('location:Login_Index.php?data=NotAFreelancerAccount');
    
}



?>

<!DOCTYPE html>
    <html>
        <head>
        <link rel="icon" href="favicon.ico">
            <link rel="stylesheet" href="Style.css" type="text/css">
            <script src="Scripts/Login.js"> </script>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

        </head>
        <body>


<div class="Login-Container">
            <!-- Nav bar section -->
        <div class="nav">

        <?php
           
           if(isset($_SESSION['SessionName'])){

               include_once("includes/LoggedIn_Header.php");
               
           }
           else{
               include_once("includes/Header.php");
           }

           if($_SESSION['AccountType'] == "Freelancer"){
               include_once("includes/FreelancerDashboard.php");
           } else{
               include_once("includes/CustomerDashboard.php");
           }




           ?>
















        </div>
            <div class="logForm">
                 <form action="Backend/CreateJobBackend.php" method="post" enctype = "multipart/form-data">
                    
                         <select name="Category">  <br> 
                         <option value="" disabled selected hidden> Category </option> 
                         <option value="Graphics and Design"> Graphics and Design </option>
                         <option value="Video and Presentation"> Video and Presentation </option>
                         <option value="Music and Audio"> Music and Audio </option>
                         <option value="Development and IT"> Development and IT </option>
                         </select>  
                        
                        <div class="logDiv"><input type="text" name="JobName" placeholder="Job Name" class="logTB"></div>
                        <div class="logDiv"><input type="text" name="JobDescription" placeholder="Job Description" class="logTB"></div>
                        <div class="logDiv"><input type="text" name="BasicPlanDescription" placeholder="Job Basic Plan Description" class="logTB"></div>
                        <div class="logDiv"><input type="text" name="StandardPlanDescription" placeholder="Job Standard Plan Description" class="logTB"></div>
                        <div class="logDiv"><input type="text" name="PremiumPlanDescription" placeholder="Job Premium Plan Description" class="logTB"></div>
                        <div class="logDiv"><input type="text" name="BasicPlanPrice" placeholder="Job Basic Plan Price" class="logTB"></div>
                        <div class="logDiv"><input type="text" name="StandardPlanPrice" placeholder="Job Standard Plan Price" class="logTB"></div>
                        <div class="logDiv"><input type="text" name="PremiumPlanPrice" placeholder="Job Premium Price" class="logTB"></div>
                        <div class="logDiv"><input type="text" name="GcashNumber" placeholder="G-Cash Account Number" class="logTB"></div>
                        
                        <input type="file" name="Banner1" accept=".jpg,.png">
                        <input type="file" name="Banner2" accept=".jpg,.png">
                        <input type="file" name="Banner3" accept=".jpg,.png">

                    <div class="logDiv">
                        <input type="submit" value="CREATE JOB" class="logBtnSubmit">
                    </div>
                   
                    

                    
                    
                </form>


            </div>
 


   

            <!-- Footer -->
            <?php include_once('Includes/footer.php')?>

</div>
        </body>
    </html>