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
           ?>


<nav id="Dashboard_Categories">

<ul id="Dashboard_CategoriesList">
<li class="Dashboard_CategoriesElement" id="Freelancer_dashboard" > <a href="CreateJob.php"> Add Job </a> </li>
<li class="Dashboard_CategoriesElement" id="Freelancer_dashboard" > <a href="Messages.php"> Messages </a> </li>
<li class="Dashboard_CategoriesElement" id="Freelancer_dashboard" > <a href="Orders.php"> ORDERS </a> </li>
<li class="Dashboard_CategoriesElement" id="Freelancer_jobs" > <a href="Jobs.php"> JOBS <a> </li>
<li class="Dashboard_CategoriesElement" id="Freelancerd_transactions" > TRANSACTIONS </li>
<li class="Dashboard_CategoriesElement" id="Freelancer_performance" > PERFORMANCE</li>
<li class="Dashboard_CategoriesElement" id="Freelancer_profile" > PROFILE </li>

</ul>

    </nav>






<!-- Page body -->
        <div id="Messages_Body" class="MessagesPage_div" >

        <div id="Messages_List" class="MessagesPage_div" > 

            <nav id="message_nav">
               
                <ul>
                   
                    <li onclick ="ReadMessage()" class="Message_categories"> Inbox </li> 
                    <li onclick = "GetSentMessages()" class="Message_categories"> Sent Box </li> 
                    <li onclick = "CreateMessage()" class="Message_categories" > New Message </li>
 
                  
                </ul>


                 
            </nav>

            <ul id="Messages_DisplayList">
                    
            <ul>


        </div>


        <div id="MessageDisplay_Message" class="MessagesPage_div">
            <center>
                <div id="Create_Message">
                <form method="POST" id="MessageForm" action="Backend/SendMessage.php">
                <br>
                <input type="hidden" name="MessageDate" id="MessageDate"> 
                <input type="hidden" name="MessageTime" id="MessageTime"> 
                <input type="text" name="MessageRecepient_Form" id="MessageRecepient_Form" placeholder="Recepient"> <input type="submit" value="SEND"> <br> <br>
                <input type="text" name="MessageSubject_Form" id="MessageSubject_Form" placeholder="Subject"> <br> <br>
                <textarea name="MessageBody_Form" id="MessageBody_Form" placeholder="Message..."> </textarea> <br> <br>
                
                </form> 
                <div>  
                    
                


            </center>
        
                <div id="Read_Message">
                    
                    <div id="Message_ControlsContainer"> </div>
                   
                    <h4 id="Message_SenderContainer">  Message Sender </h4> 
                    <h4 id="Message_RecepientContainer">  Message Recepient </h4> 
                    <h4 id="Message_SubjectContainer">  Subject placeholder </h4> 
                    <h5 id="Message_BodyContainer"> Message Body</h5> 
                    

                </div>
            
        </div>
        </div>

            <script src="Scripts/Messages.js"> </script>
                 <!-- Footer -->
                 <?php include_once('Includes/footer.php')?>

        </body>
    </html>
