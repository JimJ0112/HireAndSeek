//Generate cards function

function generateCards(int){
    var loopNumber = int;
    console.log(loopNumber);
    const cardContainer = document.getElementById("ServicesOffered_Cards");
    


    for(var i = 1;i<=loopNumber;i++){
    
    console.log("i = "+i);
    
    var card = document.createElement('div');
    var ServiceID = document.createElement('p');
    var imgCarousel = document.createElement('img');
    var AccountProfilePicture = document.createElement('img');
    var AccountName = document.createElement('h4');
    var AccountLevel = document.createElement('p');
    var ServiceTitle = document.createElement('p');
    var ratings= document.createElement('p');
    var ServiceDescription = document.createElement('p');
    var nextpageButton = document.createElement('a');
    var Buttonprice = document.createElement('Button');
    
    card.setAttribute('class','card');
    ServiceID.setAttribute('class','ServiceID');
    ServiceID.innerHTML="N";

    imgCarousel.setAttribute('id','Card_Carousel');
    imgCarousel.setAttribute('src','WebsiteImages/placeholder.png');
    AccountProfilePicture.setAttribute('class','AccountProfilePicture');
    AccountProfilePicture.setAttribute('src','WebsiteImages/profilepic-placeholder.jpg');

    AccountName.setAttribute('class','AccountName');
    AccountName.innerHTML="Name Placeholder";

    AccountLevel.setAttribute('class','AccountLevel');
    AccountLevel.innerHTML="Account Level";

    ServiceTitle.setAttribute('class','ServiceTitle');
    ServiceTitle.innerHTML="Title";

    ratings.setAttribute('class','ratings');
    ratings.innerHTML="0.0";

    ServiceDescription.setAttribute('class','ServiceDescription');
    ServiceDescription.innerHTML="Description...";

    nextpageButton.setAttribute('href','AvailService.php');
    Buttonprice.setAttribute('class','ButtonPrice');
    Buttonprice.innerHTML="PHP 000.00";
    Buttonprice.setAttribute('id',i);
    Buttonprice.setAttribute('onclick','ButtonClicked(this.id)');
    
    card.appendChild(ServiceID);
    card.appendChild(imgCarousel);
    card.appendChild(AccountProfilePicture);
    card.appendChild(AccountName);
    card.appendChild(AccountLevel);
    card.appendChild(ServiceTitle);
    card.appendChild(ratings);
    card.appendChild(ServiceDescription);
    card.appendChild(nextpageButton);
    nextpageButton.appendChild(Buttonprice);
    card.appendChild(nextpageButton);

    cardContainer.appendChild(card);
    
    }
   
    
    }// end of generating cards



// INITIAL LOADING CONTENT DATA  
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

    /*
    accountname[i].innerHTML = array[i][0];
    accountLevel[i].innerHTML = array[i][1];
    accountratings[i].innerHTML = array[i][2];
    serviceDescription[i].innerHTML = array[i][3];
    price[i].innerHTML = array[i][4];
    */

}

}




/*---------------------------------------------------------------------------------- */


// LOAD DATA WHEN CATEGORY HAS BEEN CLICKED

function GetData(string){
    // LOADING CONTENT DATA  
    
console.log("js loaded");
var PHPQuery = string;

var xhr = new XMLHttpRequest();

xhr.open("GET",PHPQuery,true);

    xhr.onload = function(){
        var PhpHandler = this.response;
        
        PhpHandler = JSON.parse(PhpHandler);
       // console.log(JSON.stringify(PhpHandler));
        
       console.log(PhpHandler.ServiceID);
        GetProcessDatas(PhpHandler);
    }

xhr.send();
}

//GETS DATA FROM ARRAY AND PUTS IT TO HTML CARDS
function GetProcessDatas(array){
var arrays = array;
//refresh the div
document.getElementById("ServicesOffered_Cards").innerHTML = "";
//generate cards
generateCards(array.length);
//get class and id of generated cards
var serviceIDS = document.getElementsByClassName("ServiceID");
var accountname = document.getElementsByClassName("AccountName");
var accountLevel = document.getElementsByClassName("AccountLevel");
var accountratings = document.getElementsByClassName("ratings");
var serviceTitle = document.getElementsByClassName("ServiceTitle");
var serviceDescription = document.getElementsByClassName("ServiceDescription");
var price = document.getElementsByClassName("ButtonPrice");
var cards = document.getElementsByClassName("card");

//console.log(serviceID);

//assign value
for(var i = 0; i<=cards.length;i++){

    serviceIDS[i].innerHTML = arrays[i][0];
    accountname[i].innerHTML = arrays[i][1];
    accountLevel[i].innerHTML = arrays[i][2];
    serviceTitle[i].innerHTML = arrays[i][3];
    accountratings[i].innerHTML = arrays[i][4];
    serviceDescription[i].innerHTML = arrays[i][5];
    
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
       // console.log(this.responseText); // echo from php
    }       
};
xmlhttp.send("ReqServiceID=" + rqID);

//window.location.href= "availService.php";


}
















