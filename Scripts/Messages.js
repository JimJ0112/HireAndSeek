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


/* ajax function */

function GetMessages(){
    var xmlhttp = new XMLHttpRequest();
    var params = "data="+SessionName
    xmlhttp.open("POST", "Backend/GetMessages.php", true);
    

    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 || this.status === 200){ 
           
            
            var dataArray = this.response;
           // dataArray = JSON.parse(dataArray);
            console.log(dataArray);
 
            
     
        }else{console.log(err);}      
    };
    
    xmlhttp.send(params);
    
    }// end of function

GetMessages();