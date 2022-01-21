<?php
session_start();
    
if(isset($_SESSION['SessionName'])){

    //echo "welcome, ".$_SESSION['SessionName'];
    
}
else{
   // echo "Session name invalid";
}



$clientIP = $_SERVER['REMOTE_ADDR'];
$MyServerIP = "122.2.121.183";
$PartnerIP = "180.191.216.101";    

if($clientIP != $MyServerIP && $clientIP != $PartnerIP){
    header('location:../index.php?data=ACCESSNOTALLOWED');
} else {
    //echo $clientIP." equal to ".$ServerIP."\n Hello Admin";
}



echo "<br> <br> <br>";




?>

<DOCTYPE>
    <html>
        <head>
            <link rel="Stylesheet" href="Style.css" type="text/css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="Scripts/Maintenance.js"> </script>

        </head>
        <body>

        

        <div id="Maintenance_Content">


            <nav id="categories">
                <ul>
                    <center>
                    <li> Approve Client Accounts </li> 
                    <li> Approve Freelancer Accounts </li> 
                    <li> User Reports </li>
                    <li> Monitor User Accounts </li>
                    </center>
                </ul>           
            </nav>


        <div id="Maintenance_Controls"> 

            <div id="ApproveControls">
                <br> <br>
                <center>
                    <button> Accept Account </button> <br> <br>
                    <button> Decline </button> <br> <br> 
                    <button> Status             </button> <br> <br>
                    <button> Send Notice        </button> <br> <br> 
                </center>
            </div>

            <div id="ReportControls">
                <br> <br>
                <center>
                    <button> View All Reports   </button> <br> <br>
                    <button> Send Notification  </button> <br> <br> 
                    <button> Disable Account    </button> <br> <br> 
                    <button> Disable Job        </button> <br> <br> 
                    <button> Enable Account     </button> <br> <br>
                    <button> Enable Job         </button> <br> <br>  
                    
                </center>
            </div>

        </div>


        <div id="Maintenance_Tables">
            <center>
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
            </center>
        </div>
            
        </div>



      
        </body>
    </html>
