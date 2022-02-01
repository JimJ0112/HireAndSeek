<?php
session_start();
    
if(isset($_SESSION['SessionName'])){

    //echo "welcome, ".$_SESSION['SessionName'];
    
}
else{
   // echo "Session name invalid";
   header("location:Login_Index.php?data=PleaseLogIn");
}


if(isset($_GET['data'])){
$data = $_GET['data'];

    echo"<script> alert('$data');</script>";
}

?>

<DOCTYPE>
    <html>
        <head>
            <link rel="Stylesheet" href="Style.css" type="text/css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            

        </head>
        <body onload="init()">

        <?php
           
           if(isset($_SESSION['SessionName'])){

               include_once("includes/LoggedIn_Header.php");
               
           }
           else{
               include_once("includes/Header.php");
           }

           if($_SESSION['AccountType'] == "Freelancer"){
               include_once("includes/FreelancerDashboard.php");
           } else{
               include_once("includes/CustomerDashboard.php");
           }




           ?>









<!-- Page body -->
        <div id="Messages_Body" class="MessagesPage_div" >

        <div id="Messages_List" class="MessagesPage_div" > 

            <nav id="message_nav">
               
                <ul>
                <!--    <li onclick ="GetMessages()" class="Message_categories"> Refresh </li> --> 
                    <li onclick ="ReadMessage()" class="Message_categories" id="InboxButton"> Inbox </li> 
                    <li onclick = "ReadSentMessages()" class="Message_categories"> Sent Box </li> 
                    <li onclick = "CreateMessage()" class="Message_categories" > New Message </li>
 
                  
                </ul>


                 
            </nav>

            <table id="Messages_DisplayList">
                    
        </table>

        
        <table id="SentMessages_DisplayList">
                    
        </table>

        </div>


        <div id="MessageDisplay_Message" class="MessagesPage_div">
            <center>
                <div id="Create_Message">
                <button id="Back" onclick="hideCreate()" class="MessageButton"> Back </button>
                <form method="POST" id="MessageForm" action="Backend/SendMessage.php">
                <br>
                <input type="hidden" name="MessageDate" id="MessageDate"> 
                <input type="hidden" name="MessageTime" id="MessageTime"> 
                
                <input type="text" name="MessageRecepient_Form" id="MessageRecepient_Form" placeholder="Recepient"> <input type="submit" value="SEND" class="MessageButton"> <br> <br>
                <input type="text" name="MessageSubject_Form" id="MessageSubject_Form" placeholder="Subject"> <br> <br>
                <textarea name="MessageBody_Form" id="MessageBody_Form" placeholder="Message..."> </textarea> <br> <br>
                
                </form> 
                <div>  
                    
                


            </center>
        
                <div id="Read_Message">
                    <button id="Back" onclick="hideRead()"> Back </button>
                    <div id="Message_ControlsContainer"> </div>
                   
                    <h4 id="Message_SenderContainer">   </h4> 
                    <h4 id="Message_RecepientContainer">   </h4> 
                    <h4 id="Message_SubjectContainer">   </h4> 
                    <h5 id="Message_BodyContainer"> </h5> 
                    

                </div>
            
        </div>
        </div>

            <script src="Scripts/Messages.js"> </script>
                 <!-- Footer -->
                 <?php include_once('Includes/footer.php')?>

        </body>
    </html>
