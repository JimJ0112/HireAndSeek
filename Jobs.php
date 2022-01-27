<?php
session_start();

if(!isset($_SESSION['SessionName'])){

    header('location:Login_Index.php?data=PleaseLogIn');
}

?>

<DOCTYPE>
    <html>
        <head>
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

        <div id="JobsContainer">

       <tr>
       <td> category </td>
       <td>Title </td>
       <td>Description </td> 
       <td>BasicPlanDescription </td> 
       <td>BasicPlanPrice </td>
       <td>StandardPlanDescription </td> 
       <td>StandardPlanPrice </td>
       <td>PremiumPlanDescription </td>
       <td>PremiumPlanPrice </td>
       <td>JobTotalRatings </td>
       <td>Job5StarRatings </td>
       <td>Job4StarRatings </td>
       <td>Job3StarRatings </td>
       <td>Job2StarRatings </td>
       <td>Job1StarRatings </td>
    
        </tr>

           <table id="JobsTable">

           </table>

        </div>


        


            <script src="Scripts/Jobs.js"> </script> 
                 <!-- Footer -->
                 <?php include_once('Includes/footer.php')?>

        </body>
    </html>
