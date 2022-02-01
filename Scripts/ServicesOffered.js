//Generate cards function


window.addEventListener('load',function(){
    var data = sessionStorage.getItem('data'); 
    var ServicesOffered_CategoryTxt = document.getElementById('ServicesOffered_CategoryTxt');
    if(data != ""){
        GetData(data);
    } else{initialGet();}

    if(data == "Backend/GET_HighRatedServicesDATA.php"){
        ServicesOffered_CategoryTxt.innerText = "High Rated Services";
    } else if(data == "Backend/GET_GraphicsAndDesignDATA.php"){
        ServicesOffered_CategoryTxt.innerText = "Graphics and Design";

    }else if(data == "Backend/GET_VideoandPresentationDATA.php"){
        ServicesOffered_CategoryTxt.innerText = "Video and Presentation";
        
    }else if(data == "Backend/GET_MusicandAudioDATA.php"){
        ServicesOffered_CategoryTxt.innerText = "Music and Audio ";
        
    }else if(data == "Backend/GET_DevelopmentandITDATA.php"){
        ServicesOffered_CategoryTxt.innerText = "Development and IT";
        
    }else if(data == ""){
        ServicesOffered_CategoryTxt.innerText = "High Rated Services";
        
    }
    

});







function generateCards(int){
    var loopNumber = int;
    console.log(loopNumber);
    const cardContainer = document.getElementById("ServicesOffered_Cards");
    


    for(var i = 1;i<=loopNumber;i++){
    
  //  console.log("i = "+i);
    
    var card = document.createElement('div');
    var ServiceID = document.createElement('p');
    var imgCarousel = document.createElement('div');
    var AccountProfilePicture = document.createElement('img');
    var AccountName = document.createElement('h4');
    var AccountLevel = document.createElement('p');
    var ServiceTitle = document.createElement('p');
    var ratings= document.createElement('p');
    var ServiceDescription = document.createElement('pre');
  //  var nextpageButton = document.createElement('a');
    var Buttonprice = document.createElement('Button');
    
    card.setAttribute('class','card');
    ServiceID.setAttribute('class','ServiceID');
    ServiceID.innerHTML="N";

    imgCarousel.setAttribute('class','Card_Carousel');

   

    //imgCarousel.setAttribute('src','WebsiteImages/placeholder.png');

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

  //  nextpageButton.setAttribute('href','AvailService.php');
    Buttonprice.setAttribute('class','ButtonPrice');
    Buttonprice.innerHTML="PHP 000.00";

   // Buttonprice.setAttribute('id',i);

    Buttonprice.setAttribute('onclick','AvailThis(this.id)');
    
    card.appendChild(ServiceID);
    card.appendChild(imgCarousel);
    card.appendChild(AccountProfilePicture);
    card.appendChild(AccountName);
    card.appendChild(AccountLevel);
    card.appendChild(ServiceTitle);
    card.appendChild(ratings);
    card.appendChild(ServiceDescription);
   // card.appendChild(nextpageButton);
   // nextpageButton.appendChild(Buttonprice);
   // card.appendChild(nextpageButton);

   card.appendChild(Buttonprice);

    cardContainer.appendChild(card);
    
    }
   
    
    }// end of generating cards



// INITIAL LOADING CONTENT DATA  
console.log("js loaded");

function initialGet(){

var xhr = new XMLHttpRequest();
xhr.open("GET","Backend/GET_HighRatedServicesDATA.php",true);

xhr.onreadystatechange = function(){
if (this.readyState === 4 || this.status === 200){ 
var PhpHandler = this.response;

PhpHandler = JSON.parse(PhpHandler);
//console.log(PhpHandler);




GetProcessDatas(PhpHandler);
} // end of if
} // end of onreadystatechange

xhr.send();
}




/*---------------------------------------------------------------------------------- */


// LOAD DATA WHEN CATEGORY HAS BEEN CLICKED

function GetData(string){
    // LOADING CONTENT DATA  
    
console.log("js loaded");
var PHPQuery = string;
setEXPLORE(PHPQuery)

var xhr = new XMLHttpRequest();

xhr.open("GET",PHPQuery,true);

    xhr.onload = function(){
        var PhpHandler = this.response;
        
        PhpHandler = JSON.parse(PhpHandler);
       // console.log(JSON.stringify(PhpHandler));
        
      // console.log(PhpHandler);
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
var totalRatings;
var imgCarousel = document.getElementsByClassName("Card_Carousel");


//console.log(serviceID);

//assign value
for(var i = 0; i<cards.length;i++){
   // var ratings = parseFloat(arrays[i]['Service1StarRatings'] + arrays[i]['Service2StarRatings']+arrays[i]['Service3StarRatings']+ arrays[i]['Service4StarRatings']+ arrays[i]['Service5StarRatings']).toFixed(1);
   // console.log(ratings);
   // totalRatings = parseFloat(1*arrays[i]['Service1StarRatings'] + 2* arrays[i]['Service2StarRatings']+3* arrays[i]['Service3StarRatings']+ 4*arrays[i]['Service4StarRatings']+ 5* arrays[i]['Service5StarRatings']/ratings).toFixed(1);
    
    var Banner = new Image();
    Banner.src = arrays[i]['Banner1Path'];
    Banner.setAttribute('class','card_Banner');
    imgCarousel[i].appendChild(Banner);

    serviceIDS[i].innerHTML = arrays[i]['ServiceID'];

    if(arrays[i]['ServiceOwnerUserName'] == ""){
    accountname[i].innerHTML = arrays[i]['ServiceOwnerEmail'];
    } else {accountname[i].innerHTML = arrays[i]['ServiceOwnerUserName'];}

    accountLevel[i].innerHTML = arrays[i]['AccountLevel'];
    serviceTitle[i].innerHTML = arrays[i]['ServiceTitle'];
    accountratings[i].innerHTML = arrays[i]['ServiceTotalRatings'];
    serviceDescription[i].innerText = arrays[i]['ServiceDescription'];
    price[i].innerText ="Php " +array[i]['ServiceBasicPlanPrice'] +".00";

    //sets id to button 
    price[i].setAttribute('id',arrays[i][0]);


    
    
}


}

/*-------------------------------Processing User Input--------------------------------------------------- */
// get id when clicked


//this shit already fetches data from backend but cant transfer said data

/*
function AvailThis(ID){
var ThisID = ID;


var xmlhttp = new XMLHttpRequest(ThisID);
xmlhttp.open("POST", "Backend/ServiceInfoRequest.php", true);

xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

xmlhttp.onreadystatechange = function() {
    if (this.readyState === 4 || this.status === 200){ 
        console.log(this.response); // echo from php
        
        var AvailedServiceResult =this.response; 

        // saves php result to session storage
        sessionStorage.setItem('AvailedServiceResult',AvailedServiceResult);

        window.location.href='AvailService.php';
    }       
};

xmlhttp.send("ReqServiceID=" + ThisID);


}
*/

// imma try this shit muna

function AvailThis(ID){
    var ThisID = ID;
    sessionStorage.setItem('AvailedServiceID',ThisID);
    window.location.href='AvailService.php';
}



function setEXPLORE(text){
    data = text;
    var ServicesOffered_CategoryTxt = document.getElementById('ServicesOffered_CategoryTxt');

    if(data == "Backend/GET_HighRatedServicesDATA.php"){
        ServicesOffered_CategoryTxt.innerText = "High Rated Services";
    } else if(data == "Backend/GET_GraphicsAndDesignDATA.php"){
        ServicesOffered_CategoryTxt.innerText = "Graphics and Design";

    }else if(data == "Backend/GET_VideoandPresentationDATA.php"){
        ServicesOffered_CategoryTxt.innerText = "Video and Presentation";
        
    }else if(data == "Backend/GET_MusicandAudioDATA.php"){
        ServicesOffered_CategoryTxt.innerText = "Music and Audio ";
        
    }else if(data == "Backend/GET_DevelopmentandITDATA.php"){
        ServicesOffered_CategoryTxt.innerText = "Development and IT";
        
    }


    //ServicesOffered_CategoryTxt.innerText = data;

}











