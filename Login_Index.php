<?php
session_start();

if(isset($_GET['data'])){
$err= $_GET['data'];
    echo "<script> alert('$err')</script>";
}

?>

<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="Style.css" type="text/css">
            <script src="Scripts/Login.js"> </script>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

        </head>
        <body>
<div class="Login-Container">
            <!-- Nav bar section -->
        <div class="nav">
            <?php
            if(isset($_SESSION['SessionName'])){

                header("location:Freelancer_Dashboard.php");
                
            }
            else{
                include_once("includes/Header.php");
            }
            ?>
        </div>
            <div class="logForm">
                 <form action="Backend/Login.php" method="post">
                    <fieldset id="logFieldset">
                        <div class="logDiv"><label class="logTxtLogin">LOG IN</label></div>
                        <div class="logDiv"><label class="logTxt">EMAIL</label></div>
                        <div class="logDiv"><input type="text" name="Username_TB" placeholder="juandelacruz@email.com" class="logTB"></div>
                        <div class="logDiv"><label class="logTxt">PASSWORD</label></div>
                        <div class="logDiv"><input type="password" name="Password_TB" class="logTB"></div>
                        <div class="logDiv"><a href="Freelancer_Register.php" class="logAForgot">Forgot Password?</a></div>
                    <div class="logDiv">
                        <input type="submit" value="LOG IN" class="logBtnSubmit">
                    </div>
                    <div class="logDivCreate">
                        <a href="Freelancer_Register.php" class="logACreateFree">Create an Account as Freelancer</a> <br>
                        <a href="Freelancer_Register.php" class="logACreateCus">Create an Account as Customer</a>
                    </div>
                    
                    <div class="lineBehind"><span id="logSpan"></span><h3 class="logTxtOr">OR LOGIN WITH</h3></div>
                        <div class="logSocials">
                        <input type="button" class="logBtnFB">
                        <input type="button" class="logBtnGM">
                        </div>
                    
                    </fieldset>
                </form>
            </div>
        <div class="logImg">
         <img src="WebsiteImages/Logo.png">
        </div>


   

            <!-- Footer -->
            <?php include_once('Includes/footer.php')?>

</div>
        </body>
    </html>