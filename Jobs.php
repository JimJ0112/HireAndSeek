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

        <div id="JobsContainer">
        <table id="JobsTableContainer">

       <tr>
       
       <td> CATEGORY </td>
       <td>JOB TITLE</td>
       <td>DESCRIPTION </td> 
       <td>BP-DESC </td> 
       <td>BP-PRC </td>
       <td>SP-DESC </td> 
       <td>SP-PRC </td>
       <td>PP-DESC </td>
       <td>PP-PRC</td>
       <td>TTL-RTS </td>
       <td>5 </td>
       <td>4</td>
       <td>3</td>
       <td>2</td>
       <td>1 </td>
       <td>G-CASH NMBR </td>
        
        </tr>

           <table id="JobsTable">

           </table>
      </table>

        </div>


        


            <script src="Scripts/Jobs.js"> </script> 
                 <!-- Footer -->
                 <?php include_once('Includes/footer.php')?>

        </body>
    </html>
