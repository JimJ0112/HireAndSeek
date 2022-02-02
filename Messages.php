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
        <nav id="message_nav">
                <ul>
                <!--    <li onclick ="GetMessages()" class="Message_categories"> Refresh </li> --> 
                    <li onclick ="ReadMessage()" class="Message_categories" id="InboxButton"> <img src="WebsiteImages/Inbox.png"><label>Inbox</label></li> 
                    <li onclick = "ReadSentMessages()" class="Message_categories"> <img src="WebsiteImages/Sent.png"><label>Sent Messages</label> </li> 
                    <li onclick = "CreateMessage()" class="Message_categories"> <img src="WebsiteImages/NewMessage.png"> <label>Compose New Message</label></li>
                </ul>
                
            </nav>
        <div id="Messages_List" class="MessagesPage_div" > 
        
            <table id="Messages_DisplayList"></table>
            <table id="SentMessages_DisplayList"></table>

        </div>


        <div id="MessageDisplay_Message" class="MessagesPage_div">
                <div id="Create_Message">
                <div class="BackBtn"><button id="Back" onclick="hideCreate()" class="MessageButton"> &#8592; BACK </button></div>
                <form method="POST" id="MessageForm" action="Backend/SendMessage.php">
                <input type="hidden" name="MessageDate" id="MessageDate"> 
                <input type="hidden" name="MessageTime" id="MessageTime"> 
                
                <div><input type="text" name="MessageRecepient_Form" id="MessageRecepient_Form" placeholder="Recepient"></div>
                <div><input type="text" name="MessageSubject_Form" id="MessageSubject_Form" placeholder="Subject"></div>
                <div><textarea name="MessageBody_Form" id="MessageBody_Form" placeholder="Message..."> </textarea></div>
                <div class="SendBtn"><input type="submit" value="SEND" class="MessageButton"></div>
                </form> 
                </div>    

                <div id="Read_Message"> 
                <div class="BackBtn"><button id="Back" onclick="hideRead()" class="MessageButton" > &#8592; BACK </button></div>
                <div class="ReadMessage_Container">
                    <div id="Message_SenderContainer">   </div> 
                    <div id="Message_RecepientContainer">   </div> 
                    <div id="Message_SubjectContainer">   </div> 
                </div>
                    <div><textarea id="Message_BodyContainer"> </textarea></div>
                   
                </div>
            
        </div>
        </div>

            <script src="Scripts/Messages.js"> </script>
              
               

        </body>
    </html>
