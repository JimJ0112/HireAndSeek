<DOCTYPE>
    <html>
        <head>
            <link rel="stylesheet" href="Style.css" type="text/css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

        </head>
        <body>

            <!-- Nav bar section -->
            <?php
            include_once("Header.php");
            ?>

            <div id="LoginForm">
               
            <form action="">
                <br> <br>
            <label name="Username_LBL"> EMAIL</label> <br>
            <input type="text" id="Username_TB" placeholder="juandelacruz@email.com">
            <br><br>
            <label name="Password_LBL"> Password </label> <br>
            <input type="password" id="Password_TB"  >
            <br> <br>
            <a href="Freelancer_Register.php"> <u> Forgot Password? <u> </a> <br> <br>
            <input type="Submit" value="LOG IN">
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