<?php
session_start();

if(!isset($_SESSION['SessionName'])){

    header('location:Login_Index.php?data=PleaseLogIn');
}

?>

<DOCTYPE>
    <html>
        <head>
        <link rel="icon" href="favicon.ico">
            <link rel="Stylesheet" href="Style.css" type="text/css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            

        </head>
        <body onload="init()">

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

<!-- edit form -->
<center>
        <form action="Backend/editJob.php" method="post" id="editJob"> 
            <h3 class=""> Edit </h3>
            <div class="AvailServiceForm-Container">

            <input type="hidden" name="ServiceID" id="ServiceID" readonly>

            <div class="AvailServiceForm_Text">                          
                         <select name="Category" id="Category">  <br> 
                         <option value="" disabled selected hidden> Category </option> 
                         <option value="Graphics and Design"> Graphics and Design </option>
                         <option value="Video and Presentation"> Video and Presentation </option>
                         <option value="Music and Audio"> Music and Audio </option>
                         <option value="Development and IT"> Development and IT </option>
                         </select>  
            </div>
            <div class="AvailServiceForm_Text"> Title:  <input type="text" name="Title" id="Title" > </div>
            <div class="AvailServiceForm_Text"> Description: <input type="text" name="Description" id="Description" > </div>
            <div class="AvailServiceForm_Text"> Basic Plan Description: <input type="text" name="BPDescription" id="BPDescription"  > </div>
            <div class="AvailServiceForm_Text"> Basic Plan Price: <input type="text" name="BPPrice" id="BPPrice"  > </div>
            <div class="AvailServiceForm_Text"> Standard Plan Description: <input type="text" name="SPDescription" id="SPDescription" > </div>
            <div class="AvailServiceForm_Text"> Standard Plan Price:  <input type="text" name="SPPrice" id="SPPrice" > </div>
            <div class="AvailServiceForm_Text"> Premium Plan Description:   <input type="text" name="PPDescription" id="PPDescription" > </div>
            <div class="AvailServiceForm_Text"> Premium Plan Price: <input type="text" name="PPPrice" id="PPPrice"> </div>
            <div class="AvailServiceForm_Text"> GcashNumber:  <input type="text" name="GcashNumber" id="GcashNumber" >  </div> <br> <br>

            <button id="ButtonSubmit" onclick="">SUBMIT </button>
            <button id="ButtonCancel" onclick="HideEditForm()" type="button">CANCEL</button>
            </div>
            </form>


        </center>
        <div id="JobsContainer">
   



           <table id="JobsTable">

           </table>
   

        </div>


        


            <script src="Scripts/Jobs.js"> </script> 
                 <!-- Footer -->
                 <?php include_once('Includes/footer.php')?>

        </body>
    </html>
