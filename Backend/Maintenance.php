<?php
session_start();
    
if(isset($_SESSION['admin'])){

    //echo "welcome, ".$_SESSION['SessionName'];
    
}
else{
   // echo "Session name invalid";
   header('location:../index.php?data=ACCESSNOTALLOWED');
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

        

        <div id="Maintenance_Content">


            <nav id="categories">
                <ul>
                    <center>
                    <li onclick ="listCustomerAccounts()"> Approve Client Accounts </li> 
                    <li onclick = "listFreelancerAccounts()"> Approve Freelancer Accounts </li> 
                    <li> User Reports </li>
                    <li> Monitor User Accounts </li>
                    </center>
                </ul>           
            </nav>


        <div id="Maintenance_Controls"> 

            <div id="ApproveControls">
                <br> <br>
                <center>
                    <Button class="ControlButtons" onclick="submitAccept()"> Accept Accounts </button> <br> <br>
                    <button class="ControlButtons" onclick="submitDecline()"> Decline </button> <br> <br> 
                    <button class="ControlButtons"> Status             </button> <br> <br>
                    <button class="ControlButtons"> Send Notice        </button> <br> <br> 
                </center>
            </div>

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
