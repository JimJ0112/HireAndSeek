<?php
session_start();
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
           ?>


<nav id="Dashboard_Categories">

<ul id="Dashboard_CategoriesList">
<li class="Dashboard_CategoriesElement" id="Freelancer_dashboard" > <a href="CreateJob.php"> Add Job </a> </li>
<li class="Dashboard_CategoriesElement" id="Freelancer_dashboard" > <a href="Messages.php"> Messages </a> </li>
<li class="Dashboard_CategoriesElement" id="Freelancer_dashboard" > <a href="Orders.php"> ORDERS </a> </li>
<li class="Dashboard_CategoriesElement" id="Freelancer_jobs" > JOBS </li>
<li class="Dashboard_CategoriesElement" id="Freelancerd_transactions" > TRANSACTIONS </li>
<li class="Dashboard_CategoriesElement" id="Freelancer_performance" > PERFORMANCE</li>
<li class="Dashboard_CategoriesElement" id="Freelancer_profile" > PROFILE </li>

</ul>

    </nav>

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