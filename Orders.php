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


        <div id="OrdersContainer">

           <table id="OrdersTable">
           <tr>
               <td>  Buyer </td> 
               <td>  JOB   </td>
               <td>  Plan Availed </td>
               <td>  Due Date </td>
               <td>  Mailing Address </td>
               <td>  Notes </td>
               <td> Status </td>
            <tr>

           </table>

        </div>


            <script src="Scripts/Orders.js"> </script>
                 <!-- Footer -->
                 <?php include_once('Includes/footer.php')?>

        </body>
    </html>
