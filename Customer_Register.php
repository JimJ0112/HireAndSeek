
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
                        session_start();
                        session_destroy();
                        session_unset();
                        include_once("Header.php");
            include_once("Header.php");
            ?>
            
            <!--Php form -->

            
            <div id="LoginForm">

            

            <form action="Backend/Customer_Register.backend.php" method="post">
                <br> <br>

        <div id="Register_Layer1">
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

            <input type="text" name="BirthDate" placeholder="BirthDate">
            <input type="text" name="Language" placeholder="Language">
            <input type="text" name="CivilStatus" placeholder="Civil Status">

            <br> <br>
</div>

<div id="Register_Layer2">
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
            <br> <br>
            <select name="IDTYPE2"> 
                <option value="" disabled selected hidden> ID TYPE </option>
            <option value="Driving License"> Driving License </option>
            <option value="National ID"> National ID </option>
            <option value="School ID"> School ID </option>
            </select>

           <br><br>
           UPLOAD ID <br>
        <input type="file" name="IDFile2" placeholder="ID "
            accept=".jpg,.png">
 
            
   
</div>

<div id="Register_Layer3"> 
    LAYER 3
</div>

<div id="Register_Layer4">
<input type="submit" value="Submit">
</div>

            </form>

            <br> <br> <br>
            <button onclick="displayNext()" id="Next"> NEXT </button>


            </div>
        
            
            <!-- Footer -->
            <footer>
                <h1> Footer Placeholder</h1>
            </footer>
            <script src="Scripts/Register.js"> </script>
        </body>
    </html>  