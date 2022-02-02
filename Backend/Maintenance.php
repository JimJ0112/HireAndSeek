<?php
session_start();
    
if(isset($_SESSION['admin'])){

    //echo "welcome, ".$_SESSION['SessionName'];
    
}
else{
   // echo "Session name invalid";
   header('location:../index.php?data=ACCESSNOTALLOWED');
}


if(isset($_POST['Logout'])){

    
    session_destroy();
    session_unset();
    header('location:../index.php?data=Logged Out');
    
}



/*
if($clientIP != $MyServerIP && $clientIP != $PartnerIP){
    header('location:../index.php?data=ACCESSNOTALLOWED');
} else {
    //echo $clientIP." equal to ".$ServerIP."\n Hello Admin";
}
*/


echo "<br> <br> <br>";




?>

<DOCTYPE>
    <html>
        <head>
            <link rel="Stylesheet" href="Style.css" type="text/css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="Scripts/Maintenance.js"> </script>

        </head>
        <body onload = "listFreelancerAccounts()">

            <!-- modal for image -->
            <div id="EmailConfirmBackground">
            <button id="emailConfirmButton" onclick="hideModal()"> X </button>
            <div id="EmailConfirm"> 
            
            <img src="" id="modalImg" draggable="true">
            
            </div>
            </div>


        <div id="Maintenance_Content">


            <nav id="categories">
                <ul>
                    <center>
                    <li onclick ="listCustomerAccounts()" class="categoryItem"> Approve Client Accounts </li> 
                    <li onclick = "listFreelancerAccounts()" class="categoryItem"> Approve Freelancer Accounts </li> 
                    
                    <!--<li><form action="Maintenance.php" method="POST" id="logoutform"> <input type="submit" value="Logout" name="Logout" id="logoutbutton" > </form> </li>
                    <li> User Reports </li>
                    <li> Monitor User Accounts </li>
                    -->
                    </center>
                </ul>           
            </nav>


        <div id="Maintenance_Controls"> 

            <div id="ApproveControls">
                <br> <br>
                <center>
                    <Button class="ControlButtons" onclick="submitAccept()" id="ControlButtons1"> Accept Accounts </button> <br> <br>
                    <button class="ControlButtons1" onclick="submitDecline()" id="ControlButtons2"> Decline </button> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
                     <form action="Maintenance.php" method="POST" id="logoutform"> <input type="submit" value="Logout" name="Logout" id="logoutbutton"  > </form> 

<!--
                    <button class="ControlButtons"> Status             </button> <br> <br>
                    <button class="ControlButtons"> Send Notice        </button> <br> <br> 
-->
                </center>
            </div>
<!--
            <div id="ReportControls">
                <br> <br>
                <center>
                    <button class="ControlButtons"> View All Reports   </button> <br> <br>
                    <button class="ControlButtons"> Send Notification  </button> <br> <br> 
                    <button class="ControlButtons"> Disable Account    </button> <br> <br> 
                    <button class="ControlButtons"> Disable Job        </button> <br> <br> 
                    <button class="ControlButtons"> Enable Account     </button> <br> <br>
                    <button class="ControlButtons"> Enable Job         </button> <br> <br>  
                    
                </center>
            </div>
-->
        </div>


        <div id="Maintenance_Tables">
            <center>
                <form method="POST" id="DataForm">
                <table id="DisplayTable">
                    
                    <tr>
                         <td> Column </td> 
                         <td> Column </td> 
                         <td> Column </td>
                         <td> Column </td>
                         <td> Column </td>
                         <td> Column </td>
                         <td> Column </td> 
                         <td> Column </td> 
                         <td> Column </td>
                         <td> Column </td>
                         <td> Column </td>
                         <td> Column </td>
                         <td> Column </td> 
                         <td> Column </td> 
                         <td> Column </td>
                         <td> Column </td>
                         <td> Column </td>

                         

                    </tr>
                    
                </table> 
            </form>         
            </center>
        </div>
            
        </div>



      
        </body>
    </html>
