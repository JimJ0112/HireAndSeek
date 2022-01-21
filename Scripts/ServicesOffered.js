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
  //  var nextpageButton = document.createElement('a');
    var Buttonprice = document.createElement('Button');
    
    card.setAttribute('class','card');
    ServiceID.setAttribute('class','ServiceID');
    ServiceID.innerHTML="N";

    imgCarousel.setAttribute('id','Card_Carousel');

    // Set the source of the images according to count of iteration

        if(i==1){ imgCarousel.setAttribute('src','WebsiteImages/Services/DNIT1.png');
        } else if (i==2) { imgCarousel.setAttribute('src','WebsiteImages/Services/DNIT2.jpg');
        } else if (i==3) { imgCarousel.setAttribute('src','WebsiteImages/Services/DNIT3.jpg'); 
        } else if (i==4) { imgCarousel.setAttribute('src','WebsiteImages/Services/DNIT4.jpg');    
        } else if (i==5) { imgCarousel.setAttribute('src','WebsiteImages/Services/DNIT5.png');  
        } else if (i==6) { imgCarousel.setAttribute('src','WebsiteImages/Services/GND1.jpg');
        } else if (i==7) { imgCarousel.setAttribute('src','WebsiteImages/Services/GND2.jpg'); 
        } else if (i==8) { imgCarousel.setAttribute('src','WebsiteImages/Services/GND3.jpg');    
        } else if (i==9) { imgCarousel.setAttribute('src','WebsiteImages/Services/GND4.jpg');  
        } else if (i==10) { imgCarousel.setAttribute('src','WebsiteImages/Services/GND5.jpg');
        } else if (i==11) { imgCarousel.setAttribute('src','WebsiteImages/Services/DNIT6.jpg'); 
        } else if (i==12) { imgCarousel.setAttribute('src','WebsiteImages/Services/GND6.jpg');    
        } else if (i==13) { imgCarousel.setAttribute('src','WebsiteImages/Services/GND7.jpg');  
        } else if (i==14) { imgCarousel.setAttribute('src','WebsiteImages/Services/MNA6.jpg');
        } else if (i==15) { imgCarousel.setAttribute('src','WebsiteImages/Services/VNP6.jpg');    
        } else if (i==16) { imgCarousel.setAttribute('src','WebsiteImages/Services/MNA1.jpg');  
        } else if (i==17) { imgCarousel.setAttribute('src','WebsiteImages/Services/MNA2.jpg');
        } else if (i==18) { imgCarousel.setAttribute('src','WebsiteImages/Services/MNA3.jpg'); 
        } else if (i==19) { imgCarousel.setAttribute('src','WebsiteImages/Services/MNA4.jpg');    
        } else if (i==20) { imgCarousel.setAttribute('src','WebsiteImages/Services/MNA5.jpg');  
        } else if (i==21) { imgCarousel.setAttribute('src','WebsiteImages/Services/VNP1.jpg');
        } else if (i==22) { imgCarousel.setAttribute('src','WebsiteImages/Services/VNP2.jpg'); 
        } else if (i==23) { imgCarousel.setAttribute('src','WebsiteImages/Services/VNP3.jpg');    
        } else if (i==24) { imgCarousel.setAttribute('src','WebsiteImages/Services/VNP4.jpg');  
        } else if (i==25) { imgCarousel.setAttribute('src','WebsiteImages/Services/VNP5.jpg');
            
        } else {
            imgCarousel.setAttribute('src','WebsiteImages/placeholder.png');
    
        }

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



var xhr = new XMLHttpRequest();
xhr.open("GET","Backend/GET_HighRatedServicesDATA.php",true);

xhr.onload = function(){
var PhpHandler = this.response;

PhpHandler = JSON.parse(PhpHandler);





GetProcessDatas(PhpHandler);

}

xhr.send();




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
        
       console.log(PhpHandler);
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
    serviceTitle[i].innerHTML = arrays[i][1];
    accountratings[i].innerHTML = arrays[i]['Service5StarRatings'];
    serviceDescription[i].innerText = arrays[i][4];
    price[i].innerHTML = array[i][6];

    //sets id to button 
    price[i].setAttribute('id',arrays[i][0]);
}


}

/*-------------------------------Processing User Input--------------------------------------------------- */
// get id when clicked


//this shit already fetches data from backend but cant transfer said data


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


// imma try this shit muna
















