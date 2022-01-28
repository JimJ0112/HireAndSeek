const Create_MessageDiv = document.getElementById("Create_Message");
const Read_MessageDiv = document.getElementById("Read_Message");
const MessageDate = document.getElementById("MessageDate");
const MessageTime = document.getElementById("MessageTime");
const SessionName = sessionStorage.getItem("sessionName");


var now = new Date();
MessageDate.value = now.getUTCMonth() + 1 + " / " + parseInt(now.getUTCDate() + 1) + " / " + now.getUTCFullYear();
MessageTime.value = now.getUTCHours() + " : " + now.getUTCMinutes();



function CreateMessage(){

    Create_MessageDiv.style.display = "block";
    Read_MessageDiv.style.display = "none";
    
}

function ReadMessage(){
    Create_MessageDiv.style.display = "none";
    Read_MessageDiv.style.display = "block";
    GetMessages();
}

function ReadSentMessages(){
    Create_MessageDiv.style.display = "none";
    Read_MessageDiv.style.display = "block";
    GetSentMessages();
}


function init() // This is the function the browser first runs when it's loaded.
{
    GetMessages() // Then runs the refresh function for the first time.
  var int = self.setInterval(function () {
    GetMessages()
  }, 10000); // Set the refresh() function to run every 10 seconds. [1 second would be 1000, and 1/10th of a second would be 100 etc.
}



/* ajax function */

function GetMessages(){
    const SessionName = sessionStorage.getItem("sessionName");
    var xmlhttp = new XMLHttpRequest();
    var params = "data="+SessionName
    xmlhttp.open("POST", "Backend/GetMessages.php", true);
    

    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 || this.status === 200){ 
           
            
            var dataArray = this.response;
            dataArray = JSON.parse(dataArray);
            console.log(dataArray);
            var number = dataArray.length;
            createElements(number);
            setData(dataArray);
     
        }else{

            const MessageList = document.getElementById('Messages_DisplayList');
            //refresh container
            MessageList.innerHTML = "";


        }      
    }
    
    xmlhttp.send(params);
    
    }// end of function

//GetMessages();


// get sent messages
function GetSentMessages(){
    const SessionName = sessionStorage.getItem("sessionName");
    var xmlhttp = new XMLHttpRequest();
    var params = "data="+SessionName
    xmlhttp.open("POST", "Backend/GetSentMessages.php", true);
    

    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 || this.status === 200){ 
           
            
            var dataArray = this.response;
           dataArray = JSON.parse(dataArray);
            console.log(dataArray);
            var number = dataArray.length;
            createElements(number);
            setData(dataArray);
     
        }else{console.log(err);}      
    }
    
    xmlhttp.send(params);
    
    }// end of function


// function to create elements
function createElements(numb){
    var Number = numb;

    const MessageList = document.getElementById('Messages_DisplayList');
    //refresh container
    MessageList.innerHTML = "";

for(var i = 0; i<Number;i++){

    var messageListItem = document.createElement('tr');
    var messageListItemStatus = document.createElement('p');
    var messageListItemSubject = document.createElement('p');
    var messageListItemSender = document.createElement('p');
    var messageListItemDate = document.createElement('p');
    var ReplyButton = document.createElement('button');
    var breakLine = document.createElement('br');
    var horizon = document.createElement('hr');

    messageListItemStatus.setAttribute('class','messageListItemStatus');
    messageListItem.setAttribute('class','messageListItem');
    messageListItemDate.setAttribute('class','messageListItemDate');
    messageListItemSender.setAttribute('class','messageListItemSender');
    messageListItemSubject.setAttribute('class','messageListItemSubject');

    ReplyButton.setAttribute('class','ReplyButton');
    
    
    messageListItem.appendChild(ReplyButton);
    messageListItem.appendChild(breakLine);
    messageListItem.appendChild(breakLine);
    messageListItem.appendChild(messageListItemStatus);
    messageListItem.appendChild(messageListItemDate);
    messageListItem.appendChild(messageListItemSender);
    messageListItem.appendChild(messageListItemSubject);
    




    MessageList.appendChild(messageListItem);
    MessageList.appendChild(horizon);
    
}

}// end of create elements


function setData(array){
var DataArray = array;
var Number = DataArray.length;

const messageListItemStatus = document.getElementsByClassName("messageListItemStatus");
const messageListItem = document.getElementsByClassName("messageListItem");
const messageListItemDate = document.getElementsByClassName("messageListItemDate");
const messageListItemSender = document.getElementsByClassName("messageListItemSender");
const messageListItemSubject = document.getElementsByClassName("messageListItemSubject");
const ReplyButton = document.getElementsByClassName('ReplyButton');

for(var i =0; i<=Number;i++){
    messageListItemStatus[i].innerText ="Status: "+ DataArray[i]['MessageStatus'];
    messageListItemDate[i].innerText = DataArray[i]['MessageDate'] +" - "+DataArray[i]['MessageTime'];
    messageListItemSender[i].innerText= "Sender : "+DataArray[i]['SenderEmail'];
    messageListItemSubject[i].innerText= "Subject : "+DataArray[i]['Subject'];
    messageListItem[i].setAttribute('onclick','showMessage(' +DataArray[i]['MessageID'] +')');
    ReplyButton[i].innerText = "Reply";
    ReplyButton[i].setAttribute('onclick',"replyMessage('"+DataArray[i]['SenderEmail']+"', '"+DataArray[i]['Subject']+"')");
    console.log("running");

    if(DataArray[i]['MessageStatus'] =="Seen"){
        messageListItem[i].style.backgroundColor = "white";
    }

}



} // end of function

// show Message function
function showMessage(ID){

    var UserId = ID;
    
    var xmlhttp = new XMLHttpRequest();
    var params = "data="+UserId;
    xmlhttp.open("POST", "Backend/GetDisplayMessages.php", true);
    

    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 || this.status === 200){ 
           
            
            var dataArray = this.response;
            dataArray = JSON.parse(dataArray);
            console.log(dataArray);
            setMessage(dataArray);



     
        }else{console.log("error");}      
    }
    
    xmlhttp.send(params);





}


function setMessage(data){

    dataArray = data;
    const messageSender = document.getElementById("Message_SenderContainer");
    const messageSubject = document.getElementById("Message_SubjectContainer");
    const messageBody = document.getElementById("Message_BodyContainer");
    const messageReciever = document.getElementById("Message_RecepientContainer");

    messageSender.innerText = "Sender: "+dataArray[0]['SenderEmail'];
    messageSubject.innerText = "Subject: "+dataArray[0]['Subject'];
    messageBody.innerText = dataArray[0]['MessageBody'];
    messageReciever.innerHTML = "Reciever: "+dataArray[0]['RecieverEmail'];
    
}



function replyMessage(recepient,subject){
MessageRecepient = recepient;
MessageSubject = subject;

    const MessageRecepient_Form = document.getElementById('MessageRecepient_Form');
    const MessageSubject_Form = document.getElementById('MessageSubject_Form');

    MessageSubject_Form.value = MessageSubject;
    MessageRecepient_Form.value =MessageRecepient;
   CreateMessage();

}