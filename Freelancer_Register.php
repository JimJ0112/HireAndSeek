<?php
include("Backend/Freelancer_Register.backend.php");
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
               
            <form action="Backend/Freelancer_Register.backend.php" method="post">
                <br> <br>
         
            <input type="text" name="FirstName" placeholder="FIRST NAME">
            <input type="text" name="LastName" placeholder="LAST NAME">
            <input type="text" name="MiddleInitial" placeholder="M.I">
            <input type="text" name="Age" placeholder="AGE">
            <select name="Gender"> 
                <option value="" disabled selected hidden> GENDER </option>
            <option value="male"> MALE </option>
            <option value="female"> FEMALE </option>
            </select>

            <br><br>

            <input type="text" name="Email" placeholder="Email">
            <input type="text" name="Contact" placeholder="Contact Number">
            <input type="text" name="Address" placeholder="Address">
            
            
          
            
            <br> <br>

            <input type="text" name="Description" placeholder="Description">
            <input type="text" name="Language" placeholder="Language">
            <input type="text" name="Occupation" placeholder="Occupation">

            <br> <br>

            <input type="text" name="Education" placeholder="Education">
            <input type="text" name="Skills" placeholder="Skills">
            <br> <br> <br>
            <select name="IDTYPE"> 
                <option value="" disabled selected hidden> ID TYPE </option>
            <option value="Driving License"> Driving License </option>
            <option value="National ID"> National ID </option>
            <option value="School ID"> School ID </option>
            </select>

           <br><br>
           UPLOAD ID <br>
        <input type="file" name="IDFile" placeholder="ID "
            accept=".jpg,.png">

            <br> <br>
 
            <input type="submit" value="Sign Up">
   
            </form>


            </div>
        

            <!-- Footer -->
            <footer>
                <h1> Footer Placeholder</h1>
            </footer>

        </body>
    </html>  