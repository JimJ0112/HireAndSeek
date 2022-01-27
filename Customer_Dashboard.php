<?php
session_start();
    
 
if(isset($_SESSION['SessionName'])){

    echo "welcome, ".$_SESSION['SessionName'];
}
else{
    echo "Session name invalid";
    header("location: BecomeAFreelancer.php");
    exit();
}
//echo $_SESSION['SessionName'];
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

            if($_SESSION['AccountType'] == "Freelancer"){
                include_once("includes/FreelancerDashboard.php");
            } else{
                include_once("includes/CustomerDashboard.php");
            }




            ?>
            <!-- dashboard pages -->
            <br> 


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
           <?php include_once('Includes/footer.php')?>


        </body>
    </html>