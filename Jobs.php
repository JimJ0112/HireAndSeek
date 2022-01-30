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
        <table id="JobsTableContainer">

       <tr>
       <td> CATEGORY </td>
       <td>JOB TITLE </td>
       <td>DESCRIPTION </td> 
       <td>BP-DESCRIPTION </td> 
       <td>BP-PRICE </td>
       <td>SP-DESCRIPTION </td> 
       <td>SP-PRICE </td>
       <td>PP-DESCRIPTION </td>
       <td>PP-PRICE </td>
       <td>TTL-RTNGS </td>
       <td>5 STR-RTS </td>
       <td>4 STR-RTS</td>
       <td>3 STR-RTS</td>
       <td>2 STR-RTS </td>
       <td>1 STR-RTS </td>
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
