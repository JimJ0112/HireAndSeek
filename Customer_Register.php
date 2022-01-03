

<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="Style.css" type="text/css">
            <script src="Scripts/Login.js"> </script>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

        </head>
        <body>

            <!-- Nav bar section -->
            <nav> 
                <a href="index.php">Home</a>
                <ul id = "navlist">
                    <li class= "navElement" id="searchbar"> <input type = "text" >  <input type="button"> </li>
                    <li class= "navElement"> <a href = "ServicesOffered.php"> EXPLORE </a> </li>
                    <li class= "navElement"> <a href = "BecomeAFreelancer.php"> BECOME A FREELANCER </a> </li>
                    <li class= "navElement"> <a href = "Login_Index.php"> LOGIN </a> </li>
                    <li class= "navElement"> <a href = "About.php"> ABOUT </a> </li>
                
                </ul>
            </nav>

            <div id="LoginForm">
               
            <form action="Backend/Login.php" method="post">
                <br> <br>
            <label name="Username_LBL"> EMAIL</label> <br>
            <input type="text" name="Username_TB" placeholder="juandelacruz@email.com">
            <br><br>
            <label name="Password_LBL"> Password </label> <br>
            <input type="password" name="Password_TB"  >
            <br> <br>
            <a href="Freelancer_Register.php"> <u> Forgot Password? <u> </a> <br> <br>
            <input type="submit" value="LOG IN">
            <br> <br>
            <a href="Freelancer_Register.php"> Create an Account as Freelancer </a> <br> <br>
            <a href="Customer_Register.php"> Create an Account as Customer </a> <br> <br>
            <p> OR LOGIN WITH </p> <br>
            <a> FACEBOOK </a> <br> <br>
            <a> GMAIL </a>
            </form>


            </div>
        

            <!-- Footer -->
            <footer>
                <h1> Footer Placeholder</h1>
            </footer>

        </body>
    </html>