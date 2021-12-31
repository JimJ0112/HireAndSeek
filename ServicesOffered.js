

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
console.log(arrays);

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
console.log(arrays);

var accountname = document.getElementsByClassName("AccountName");
var accountLevel = document.getElementsByClassName("AccountLevel");
var accountratings = document.getElementsByClassName("ratings");
var serviceDescription = document.getElementsByClassName("ServiceDescription");
var price = document.getElementsByClassName("ButtonPrice");
var cards = document.getElementsByClassName("card");

for(var i = 0; i<=cards.length-1;i++){

    console.log(serviceDescription[i]);
   
}

for(var i = 0; i<=cards.length;i++){

    
    accountname[i].innerHTML = array[i][0];
    accountLevel[i].innerHTML = array[i][1];
    accountratings[i].innerHTML = array[i][2];
    serviceDescription[i].innerHTML = array[i][3];
    
    price[i].innerHTML = array[i][4];
}


}












