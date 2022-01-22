<?php
session_start();

?>

<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="Style.css" type="text/css">
            <script src="Scripts/Login.js"> </script>
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
           

            <div id="LoginForm">
               
            <form action="Backend/Login.php" method="post">
                <br> <br>
            EMAIL <br>
            <input type="text" name="Username_TB" placeholder="juandelacruz@email.com">
            <br><br>
            Password  <br>
            <input type="password" name="Password_TB"  >
            <br> <br>
            <a href="Freelancer_Register.php"> <u> Forgot Password? </u> </a> <br> <br>
            <input type="submit" value="LOG IN">
            <br> <br>
            <a href="Freelancer_Register.php"> Create an Account as Freelancer </a> <br> <br>
            <a href="Customer_Register.php"> Create an Account as Customer </a> <br> <br>
            <p> OR LOGIN WITH </p> <br>
            <a> FACEBOOK </a> <br> <br>
            <a> GMAIL </a>
            </form>


            </div>
        



   
</div>

            <!-- Footer -->
            <?php include_once('Includes/footer.php')?>
        </body>
    </html>