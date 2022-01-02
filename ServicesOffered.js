

// LOADING CONTENT DATA  
console.log("js loaded");



var xhr = new XMLHttpRequest();
xhr.open("GET","Backend/GET_HighRatedServicesDATA.php",true);

xhr.onload = function(){
var PhpHandler = this.response;

PhpHandler = JSON.parse(PhpHandler);

GetProcessDatas(PhpHandler);
}

xhr.send();

//GETS DATA FROM ARRAY AND PUTS IT TO HTML CARDS
function GetProcessDatas(array){
var arrays = array;
//console.log(arrays);

var accountname = document.getElementsByClassName("AccountName");
var accountLevel = document.getElementsByClassName("AccountLevel");
var accountratings = document.getElementsByClassName("ratings");
var serviceDescription = document.getElementsByClassName("ServiceDescription");
var price = document.getElementsByClassName("ButtonPrice");

for(var i = 0; i<=accountname.length;i++){

    
    accountname[i].innerHTML = array[i][0];
    accountLevel[i].innerHTML = array[i][1];
    accountratings[i].innerHTML = array[i][2];
    serviceDescription[i].innerHTML = array[i][3];
    price[i].innerHTML = array[i][4];
}

}




/*---------------------------------------------------------------------------------- */




function GetData(string){
    // LOADING CONTENT DATA  
console.log("js loaded");
var PHPQuery = string;
if(PHPQuery===""){

}
var xhr = new XMLHttpRequest();

xhr.open("GET",PHPQuery,true);

    xhr.onload = function(){
        var PhpHandler = this.response;

        PhpHandler = JSON.parse(PhpHandler);

        GetProcessDatas(PhpHandler);
    }

xhr.send();
}

//GETS DATA FROM ARRAY AND PUTS IT TO HTML CARDS
function GetProcessDatas(array){
var arrays = array;
//console.log(arrays);
var serviceID = document.getElementsByClassName("ServiceID");
var accountname = document.getElementsByClassName("AccountName");
var accountLevel = document.getElementsByClassName("AccountLevel");
var accountratings = document.getElementsByClassName("ratings");
var serviceTitle = document.getElementsByClassName("ServiceTitle");
var serviceDescription = document.getElementsByClassName("ServiceDescription");
var price = document.getElementsByClassName("ButtonPrice");
var cards = document.getElementsByClassName("card");


for(var i = 0; i<=cards.length-1;i++){

    serviceID[i].innerHTML = array[i][0];
    accountname[i].innerHTML = array[i][1];
    accountLevel[i].innerHTML = array[i][2];
    serviceTitle[i].innerHTML = array[i][3];
    accountratings[i].innerHTML = array[i][4];
    serviceDescription[i].innerHTML = array[i][5];
    
    price[i].innerHTML = array[i][6];
}


}

/*-------------------------------Processing User Input--------------------------------------------------- */




var serviceID = document.getElementsByClassName("ServiceID");
function ButtonClicked(str){
var listNumber = str - 1;


var ID = serviceID[listNumber].innerHTML;

ServiceInfoRequest(ID);
}



function ServiceInfoRequest(ID){

var rqID = ID;
/* Transfer Variables to Javascript */

var xmlhttp = new XMLHttpRequest(rqID);
xmlhttp.open("POST", "Backend/ServiceInfoRequest.php", true);

xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

xmlhttp.onreadystatechange = function() {
    if (this.readyState === 4 || this.status === 200){ 
        console.log(this.responseText); // echo from php
    }       
};
xmlhttp.send("ReqServiceID=" + rqID);

window.location.replace ("availService.html");


}













