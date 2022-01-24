<?php


session_start();
    
if(isset($_SESSION['SessionName'])){

    echo "welcome, ".$_SESSION['SessionName'];
}
else{
    echo "Session name invalid";
}

//include_once('includes/SessionName.php');
?>



<DOCTYPE>
    <html>
        <head>
            <link rel="stylesheet" href="Style.css" type="text/css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

        </head>
        <body>

            <!-- Nav bar section -->
            <?php
           
            if(isset($_SESSION['SessionName'])){

                include_once("includes/LoggedIn_Header.php");
                
            }
            else{
                include_once("includes/Header.php");
            }
            ?>
            <!-- dashboard pages -->
            <br> 
            <nav id="Dashboard_Categories">

    <ul id="Dashboard_CategoriesList">
    <li class="Dashboard_CategoriesElement" id="Freelancer_dashboard" > <a href="CreateJob.php"> Add Job </a> </li>
    <li class="Dashboard_CategoriesElement" id="Freelancer_dashboard" > DASHBOARD </li>
    <li class="Dashboard_CategoriesElement" id="Freelancer_jobs" > JOBS </li>
    <li class="Dashboard_CategoriesElement" id="Freelancerd_transactions" > TRANSACTIONS </li>
    <li class="Dashboard_CategoriesElement" id="Freelancer_performance" > PERFORMANCE</li>
    <li class="Dashboard_CategoriesElement" id="Freelancer_profile" > PROFILE </li>
  
    </ul>

        </nav>
            <br>
        <!-- dashboard content -->
        <div id="dashboard_content_grid"> 
            <!-- JOBS -->
            <div class="dashboard_content"> 
            <h5> JOBS </h5>
            <table id="JobsTitle_table" class="jobs_table"> 
            <tr> 
                <th> TITLE </th>
                <th> DESCRIPTION  </th>
            </tr>

            <tr>
            <td> adas</td>
            <td> fdsfs</td>
            </tr>

 

            </table>
        </div>


            <div class="dashboard_content"> 
                
                
            TRANSACTIONS

            <table id="Transactions_table" class="Transactions_table"> 
            <tr> 
                <th> NAME </th>
                <th> CONTACT  </th>
                <th> JOB  </th>
                <th> DATE  </th>
                <th> STATUS  </th>
              
            </tr>

            <tr>
            <td> adas</td>
            <td> fdsfs</td>
            <td> adas</td>
            <td> fdsfs</td>
            <td> adas</td>
            
            </tr>

 

            </table>
        
        </div>
            <div class="dashboard_content"> PERFORMANCE 
                <div id="performance_chart"> </div>
                <div id="performance_table"> </div>
            </div>
            <div class="dashboard_content"> PROFILE </div>

        </div>

                    <!-- Footer -->
                    <footer>
                <h1> Footer Placeholder</h1>
            </footer>


        </body>
    </html>
