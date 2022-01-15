
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