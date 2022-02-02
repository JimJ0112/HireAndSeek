<?php


/* if the user registed: check the registration status */
if(isset($_GET['data'])){

$data = $_GET['data'];
    echo"<script> alert('$data');</script>";

}
?>
<!DOCTYPE html>
    <html>
        <head>
        <link rel="icon" href="favicon.ico">
            <link rel="stylesheet" href="Style.css" type="text/css">
            <script src="Scripts/Login.js"> </script>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

        </head>
        <body>


                    <!-- div for confirming email -->
            <div id="EmailConfirmBackground">
            <div id="EmailConfirm"> 
            <p> Please enter the code we have sent to your email address </p>
            <input type="text" id="emailConfirmInput">
            <p id="codeWrong">  </p>
            <button id="emailConfirmButton" onclick="hideModal()"> Confirm </button>
            </div>
            </div>

<div class="Freelancer-Container">
           <!-- Nav bar section -->
            <?php
            session_start();
            session_destroy();
            session_unset();
            // include_once("includes/Header.php");
            ?>
      
        <div class="Freelancer-Header">
            <div class="Freelancer-HeaderTitle">CREATE AN ACCOUNT AS A CUSTOMER</div>
            <div class="Freelancer-HeaderText">COMPLETE YOUR PROFILE BY FILLING UP THIS ACCOUNT CREATION FORM</div>
        </div>

        <div class="Freelancer-Content">
            <!-- Php form-->  

            <div id="LoginForm">
               
            <form action="Backend/Customer_Register.backend.php" method="post" enctype = "multipart/form-data">
            <div id="Register_Layer1">
            <div class="Layer-Already">Already have an account? <a href="Login_Index.php">Sign-in &#8594</a></div>
            <div class="Layer-Title">PERSONAL INFORMATION </div>
            <div class="Layer-div1">
                    <div class="div-input"><input type="email" id="Email" name="Email" placeholder="Email" required></div>
                    <div class="div-input guide" data-tooltip="This is where your future files will be sent."><input type="email" id="FileEmail" name="FileEmail" placeholder="Files Email Address" required></div>
                    <div class="div-input"><input type="text"  id="Username" name="UserName" placeholder="Username"required></div>
                    <div class="div-input check"><input type="password" id="Password" name="UserPassword" placeholder="Password" required></div>
                    <div class="div-input"><input type="password" id="ConfirmPassword" name="UserConfirm" placeholder="Confirm Password" required></div>
                </div>

            <div class="Layer-div2">
                <div class="div-input">
                    <input type="text" name="FirstName" id="Fname" placeholder="First Name" required> 
                    <input type="text" name="MiddleInitial" id="Mname" placeholder="Middle Name"required>
                    <input type="text" name="LastName" id="Lname" placeholder="Last Name" required> 
                </div>
                
                <div class="div-input">
                    <input type="date" name="Birthdate" placeholder="Birthday" title="Birthday">
                    <input type="text" name="Contact" placeholder="Contact Number">
               
                    <select name="Gender">
                        <option value="" disabled selected hidden> GENDER </option> 
                        <option value="male"> Male </option>
                        <option value="female"> Female </option>
                    </select>
                </div>    
                
                <div class="div-input">
                <input type="text" name="Address" placeholder="Address"> 
                <input type="text" name="Description" placeholder="Description"> 
                <input type="text" name="Language" placeholder="Language">
                </div>
                
                
            </div>

        </div>

<div id="Register_Layer2">
        <div class="Layer-Already">Already have an account? <a href="Login_Index.php">Sign-in &#8594</a></div>
        <div class="Layer-Title">VERIFICATION </div>
        
        <div class="div-inputUpload1">
            <select name="IDTYPE" id="id1" required> 
                <option value="" disabled selected hidden> ID TYPE </option>
                <option value="Driving License"> Driver's License </option>
                <option value="National ID"> National ID </option>
                <option value="School ID"> School ID </option>
                <option value="PhilHealth ID"> PhilHealth ID </option>
                <option value="Voter's ID"> Voter's ID </option>
                <option value="UMID"> UMID </option>
            </select>
            <div class="div-upload" title="Upload FIle">
                <input type="file" name="IDFile" placeholder="ID" accept=".jpg,.png" id="file1"required>
                <label for="file1" id="file1-Preview">
                    <img src="WebsiteImages/Placeholder.png">
                    <div><span>+</span></div>
                </label>
            </div>
        </div>
       
        <div class="div-inputUpload2">  
            <select name="IDTYPE2" id="id2" required> 
                <option value="" disabled selected hidden> ID TYPE </option>
                <option value="Driving License"> Driver's License </option>
                <option value="National ID"> National ID </option>
                <option value="School ID"> School ID </option>
                <option value="PhilHealth ID"> PhilHealth ID </option>
                <option value="Voter's ID"> Voter's ID </option>
                <option value="UMID"> UMID </option>
            </select>
            <div class="div-upload" title="Upload FIle">
                <input type="file" name="IDFile2" placeholder="ID" accept=".jpg,.png" id="file2"required>
                <label for="file2" id="file2-Preview">
                    <img src="WebsiteImages/Placeholder.png">
                    <div><span>+</span></div>
                </label>
            </div>
        </div>
        
</div>
<div id="Register_Layer3">

    <div class="Layer-Already">Already have an account? <a href="Login_Index.php">Sign-in &#8594</a></div>
    <div class="Layer-Title">VERIFICATION  </div>
    <input type="hidden"  id="UserSnapshot" name ="UserSnapshot">     
    <div class="Layer3-Content">
    <div class="Layer-Photo"><canvas id="photocapture"> </canvas></div>
    <div class="Layer-Video"><video autoplay id="video"> </video></div>
    </div>
        
</div>
<div id="Register_Layer4">
    <div class="Layer-Already">Already have an account? <a href="Login_Index.php">Sign-in &#8594</a></div>
    <div class="Layer-Title">TERMS AND CONDITIONS </div>
   
    <div class="Layer4-Form">
        <h3>  Please read and agree before we proceed.</h3>
        <div>I agree to the collection and use of the data that I have provided to HireAndSeek 
            through this registration form for the use of this website. 
            I understand that the collection and use of this data, which may include personal 
            information and sensitive personal information, shall be in accordance with the 
            Data Privacy Act of 2012 and the Privacy Policy of HireAndSeek.</div>
        <input type="checkbox" id="checkboxAccept" required>
        <label for="checkboxAccept">Accept Terms and Condition</label>
        <div class="Layer4Btn"><button type="submit">Sign Up</button></div>
    </div>
</div>

</form>
                <div class="Layer3Btn">
                <button onclick="startvideo()" id="startvideo"> Open Camera </button>
                <button  id="CaptureImage"> Capture </button>
                </div>
</div>  <!-- Close login form -->
</div> <!-- content  -->
<div class="nextBtn"><button onclick="displayNext()" id="Next"> NEXT &#8594 </button></div>

        <!-- Footer -->
        <?php include_once('Includes/footer.php')?>
</div>
            
            <script src="Scripts/Register.js"> </script>
        </body>
    </html>  