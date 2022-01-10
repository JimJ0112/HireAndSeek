<?php
session_start();
    
if(isset($_SESSION['SessionName'])){

    echo "welcome, ".$_SESSION['SessionName'];
}
else{
    echo "Session name invalid";
}
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

                include_once("LoggedIn_Header.php");
                
            }
            else{
                include_once("Header.php");
            }
            ?>
            <!-- dashboard pages -->
            <br> 
            <nav id="Dashboard_Categories">

    <ul id="Dashboard_CategoriesList">
    <li class="Dashboard_CategoriesElement" id="Freelancer_jobs" > JOBS </li>
    <li class="Dashboard_CategoriesElement" id="Freelancerd_transactions" > TRANSACTIONS </li>
    <li class="Dashboard_CategoriesElement" id="Freelancer_dashboard" > DASHBOARD </li>
    <li class="Dashboard_CategoriesElement" id="Freelancer_profile" > PROFILE </li>
  
    </ul>

        </nav>
            <br>
        <!-- dashboard content -->
        <div id="dashboard_content_grid"> 
            <div class="dashboard_content"> JOBS</div>
            <div class="dashboard_content"> TRANSACTIONS </div>
            <div class="dashboard_content"> DASHBOARD </div>
            <div class="dashboard_content"> PROFILE </div>

        </div>

                    <!-- Footer -->
                    <footer>
                <h1> Footer Placeholder</h1>
            </footer>


        </body>
    </html>
