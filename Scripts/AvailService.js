function init() // This is the function the browser first runs when it's loaded.
{
    displayAvailedService() // Then runs the refresh function for the first time.

    updateRatings(); // Then runs the refresh function for the first time.

  var int = self.setInterval(function () {
    updateRatings();
    AlreadyRated();
  }, 2000); // Set the refresh() function to run every 10 seconds. [1 second would be 1000, and 1/10th of a second would be 100 etc.
}






var AvailedService = sessionStorage.getItem('AvailedServiceID');

if(!AvailedService){ window.location.href="ServicesOffered.php";
console.log(AvailedService);
}


    //Main
    function displayAvailedService(){
    var Form = document.getElementById("AvailServiceForm");
    

    var xmlhttp = new XMLHttpRequest(AvailedService);
    xmlhttp.open("POST", "Backend/ServiceInfoRequest.php", true);
    
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    xmlhttp.onreadystatechange = function() {
 

        if (this.readyState === 4 || this.status === 200){ 
           
            
             AvailedServiceINFO=this.response;
             
             AvailedServiceINFO = JSON.parse(AvailedServiceINFO); 
            //ArrayForPlan.push(AvailedServiceINFO);

            console.log(AvailedServiceINFO);
            setValues(AvailedServiceINFO);
            BasicPlan();
             
            AlreadyRated();

          


        } else{window.location.href="ServicesOffered.php"}   
        
       // console.log("array for plan" + ArrayForPlan);
       
    };
    
     xmlhttp.send("ReqServiceID=" + AvailedService);

    } // end of display availed service
// functions
displayAvailedService();

function setValues(array){

    var Passedarray = array;

    const AccountName = document.getElementsByClassName("AccountName")[0];
    const AccountLevel = document.getElementsByClassName("AccountLevel")[0];
    const ServiceTitle = document.getElementById("ServiceTitle");
    const totalRatings = document.getElementById("totalRatings");
    const ServiceDescription = document.getElementById("AvailService_Description");
    const BuyButton = document.getElementById("Buy");
    const Service5StarRatings = document.getElementById("5starRatingsTotal");
    const Service4StarRatings = document.getElementById("4starRatingsTotal");
    const Service3StarRatings = document.getElementById("3starRatingsTotal");
    const Service2StarRatings =  document.getElementById("2starRatingsTotal");
    const Service1StarRatings = document.getElementById("1starRatingsTotal");
    const PlanBasic = document.getElementById("Plan_Basic");
    const Category = document.getElementById("ServCategory");

    const BasicPlanDescription = document.getElementById("BasicPlanDescription_Info");
    const BasicPlanPrice = document.getElementById("BasicPlanPrice_Info");
    const StandardPlanDescription = document.getElementById("StandardPlanDescription_Info");
    const StandardPlanPrice = document.getElementById("StandardPlanPrice_Info");
    const PremiumPlanDescription = document.getElementById("PremiumPlanDescription_Info");
    const PremiumPlanPrice = document.getElementById("PremiumPlanPrice_Info");
    const image = document.getElementsByClassName('slides');
    

    // hidden frames value
    const MessageDate = document.getElementById('MessageDate');
    const MessageTime = document.getElementById('MessageTime');
    const MessageRecepient_Form = document.getElementById('MessageRecepient_Form');
    const MessageSubject_Form = document.getElementById('MessageSubject_Form');
    const GcashNumber = document.getElementById('GcashNumber');

    var now = new Date();
    var Freelancer = sessionStorage.getItem('sessionName');

    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    
    time =  today.getHours() + ":" + today.getMinutes();
    today = mm + '/' + dd + '/' + yyyy;


    MessageDate.value = today;
    MessageTime.value = time;
    MessageRecepient_Form.value = array[0]['ServiceOwnerEmail'];
    MessageSubject_Form.value=array[0]['ServiceTitle'];
    GcashNumber.value = array[0]['GcashNumber'];

    var totalrows = sessionStorage.getItem('allrows');
    
    // total ratings (not yet final)
    var ComputedTotalRatings = (1*parseFloat(array[0]['Service5StarRatings'])+2 * parseFloat(array[0]['Service4StarRatings'])+3* parseFloat(array[0]['Service3StarRatings'])+4* parseFloat(array[0]['Service2StarRatings'])+5* parseFloat(array[0]['Service1StarRatings']))/parseFloat(totalrows);
  console.log(ComputedTotalRatings);


  

    ServiceTitle.innerText = array[0]['ServiceTitle'];
    ServiceDescription.innerText = array[0]['ServiceDescription'];
    AccountName.innerText = array[0]['ServiceOwnerEmail'];
    totalRatings.innerText = ComputedTotalRatings;
   Service5StarRatings.innerText =  array[0]['Service5StarRatings'];
   Service4StarRatings.innerText =  array[0]['Service4StarRatings'];
   Service3StarRatings.innerText =  array[0]['Service3StarRatings'];
   Service2StarRatings.innerText =  array[0]['Service2StarRatings'];
   Service1StarRatings.innerText =  array[0]['Service1StarRatings'];
   Category.innerText = array[0]['category'];

   BasicPlanDescription.innerText = array[0]['ServiceBasicPlanDescription'];
   BasicPlanPrice.innerText = array[0]['ServiceBasicPlanPrice'];
   StandardPlanDescription.innerText = array[0]['ServiceStandardPlanDescription'];
   StandardPlanPrice.innerText = array[0]['ServiceStandardPlanPrice'];
   PremiumPlanDescription.innerText = array[0]['ServicePremiumPlanDescription'];
   PremiumPlanPrice.innerText = array[0]['ServicePremiumPlanPrice'];
   image[0].src= array[0]['Banner1Path'];
   image[1].src= array[0]['Banner2Path'];
   image[2].src= array[0]['Banner3Path'];


   AccountLevel.innerText = array[0]['AccountLevel'];


   
   // NOT DONE YET
   
   console.log(ServiceTitle);





}


function availService(){

var AccountType = sessionStorage.getItem('AccountType');

if(AccountType === "Customer"){
document.getElementById("AvailServiceForm").style.display = "block";

} else{alert('Availing Jobs is only for Customers');}

//declarations

var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = mm + '/' + dd + '/' + yyyy;

var client = sessionStorage.getItem('sessionName');
var AvailedID = sessionStorage.getItem('AvailedServiceID');
var PlanValue = document.getElementById('Plan_Plan').innerText;
var PriceValue =document.getElementById('Buy').innerText;
const AccountName = document.getElementsByClassName("AccountName")[0].innerText;
const Title = document.getElementById("ServiceTitle").innerText;
const CategoryValue = document.getElementById("ServCategory").innerText;


const OwnerEmail = document.getElementById("OwnerEmail");
const ClientEmail = document.getElementById("ClientEmail");
const MailingAddress = document.getElementById("MailingAddress");
const ServiceID = document.getElementById("ServiceID");
const ServiceTitleForm = document.getElementById("ServiceTitleForm"); 
const Category = document.getElementById("Category");
const clientNotes = document.getElementById("clientNotes");
const startDate = document.getElementById("startDate");
const finishedDate =document.getElementById("finishDate");
const availedPlan = document.getElementById("availedPlan");
const Price = document.getElementById("Price");


// setting
OwnerEmail.value= AccountName;
ClientEmail.value= client;
ServiceID.value= AvailedID;
ServiceTitleForm.value = Title;
MailingAddress.value = sessionStorage.getItem('MailingAddress');

startDate.value= today;


Category.value = CategoryValue;
availedPlan.value= PlanValue;
Price.value= PriceValue;








} // end of avail service function



function BasicPlan(){
    const BasicPlanDescription = document.getElementById("BasicPlanDescription_Info");
    const BasicPlanPrice = document.getElementById("BasicPlanPrice_Info");


var Plan = document.getElementById('Plan_Plan');
var PlanDescription = document.getElementById('Plan_Description');
var Price  = document.getElementById("Buy");


Plan.innerText = "Basic Plan";
PlanDescription.innerText = BasicPlanDescription.innerText;
Price.innerText = "Php "+BasicPlanPrice.innerText + ".00";
ButtonColor();
}

function StandardPlan(){


    const StandardPlanDescription = document.getElementById("StandardPlanDescription_Info");
    const StandardPlanPrice = document.getElementById("StandardPlanPrice_Info");

    
    var Plan = document.getElementById('Plan_Plan');
    var PlanDescription = document.getElementById('Plan_Description');
    var Price  = document.getElementById("Buy");
    
    Plan.innerText = "Standard Plan";
    PlanDescription.innerText = StandardPlanDescription.innerText;
    Price.innerText = "Php "+StandardPlanPrice.innerText+ ".00";
    ButtonColor();
}

    function PremiumPlan(){
        
    
        const PremiumPlanDescription = document.getElementById("PremiumPlanDescription_Info");
        const PremiumPlanPrice = document.getElementById("PremiumPlanPrice_Info");

        var Plan = document.getElementById('Plan_Plan');
        var PlanDescription = document.getElementById('Plan_Description');
        var Price  = document.getElementById("Buy");
        
        Plan.innerText = "Premium Plan";
        PlanDescription.innerText = PremiumPlanDescription.innerText;
        Price.innerText ="Php "+ PremiumPlanPrice.innerText+ ".00";
        ButtonColor();
 }


 function HideDiv(){
    document.getElementById("AvailServiceForm").style.display = "none";
 }



 function add1star(){

    var AccountType = sessionStorage.getItem('AccountType');

    if(AccountType === "Customer"){
   
    
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "Backend/AddRatings.php", true);
    
    var params = "ServiceID="+ sessionStorage.getItem('AvailedServiceID')+"&Star=1&UserEmail="+sessionStorage.getItem('sessionName');
    
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 || this.status === 200){ 
           
           
            var dataArray = this.response;
           //dataArray = JSON.parse(dataArray);
            console.log(dataArray);

            
     
        }else{console.log(err);}      
    };
    
    xmlhttp.send(params);
    
} else{alert('Rating Jobs is only for Customers');}

 }// end of add1 star



 function add2star(){

    var AccountType = sessionStorage.getItem('AccountType');

    if(AccountType === "Customer"){

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "Backend/AddRatings.php", true);
    
    var params = "ServiceID="+ sessionStorage.getItem('AvailedServiceID')+"&Star=2&UserEmail="+sessionStorage.getItem('sessionName');
    
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 || this.status === 200){ 
           
           
            var dataArray = this.response;
           //dataArray = JSON.parse(dataArray);
            console.log(dataArray);

            
     
        }else{console.log(err);}      
    };
    
    xmlhttp.send(params);
    
    } else{alert('Rating Jobs is only for Customers');}

 }// end of add1 star


 function add3star(){
    var AccountType = sessionStorage.getItem('AccountType');

    if(AccountType === "Customer"){

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "Backend/AddRatings.php", true);
    
    var params = "ServiceID="+ sessionStorage.getItem('AvailedServiceID')+"&Star=3&UserEmail="+sessionStorage.getItem('sessionName');
    
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 || this.status === 200){ 
           
           
            var dataArray = this.response;
           //dataArray = JSON.parse(dataArray);
            console.log(dataArray);

            
     
        }else{console.log(err);}      
    };
    
    xmlhttp.send(params);
    
} else{alert('Rating Jobs is only for Customers');}

 }// end of add1 star


 function add4star(){

    var AccountType = sessionStorage.getItem('AccountType');

    if(AccountType === "Customer"){

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "Backend/AddRatings.php", true);
    
    var params = "ServiceID="+ sessionStorage.getItem('AvailedServiceID')+"&Star=4&UserEmail="+sessionStorage.getItem('sessionName');
    
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 || this.status === 200){ 
           
           
            var dataArray = this.response;
           //dataArray = JSON.parse(dataArray);
            console.log(dataArray);

            
     
        }else{console.log(err);}      
    };
    
    xmlhttp.send(params);
    
} else{alert('Rating Jobs is only for Customers');}

 }// end of add1 star


 function add5star(){
    var AccountType = sessionStorage.getItem('AccountType');

    if(AccountType === "Customer"){

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "Backend/AddRatings.php", true);
    
    var params = "ServiceID="+ sessionStorage.getItem('AvailedServiceID')+"&Star=5&UserEmail="+sessionStorage.getItem('sessionName');
    
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 || this.status === 200){ 
           
           
            var dataArray = this.response;
           //dataArray = JSON.parse(dataArray);
            console.log(dataArray);

            
     
        }else{console.log(err);}      
    };
    
    xmlhttp.send(params);
    
} else{alert('Rating Jobs is only for Customers');}

 }// end of add1 star




 function TotalRatings(){
    var totalRatings = document.getElementById("totalRatings").innerText;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "Backend/TotalRatingsUpdateBackend.php", true);
    
    var params = "ServiceID="+ sessionStorage.getItem('AvailedServiceID')+"&totalRatings="+totalRatings;
    
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 || this.status === 200){ 
           
           
            var dataArray = this.response;
           //dataArray = JSON.parse(dataArray);
            console.log(dataArray);

            
     
        }else{console.log(err);}      
    };
    
    xmlhttp.send(params);
    
    

 }// end of add1 star


 function ButtonColor(){
    var planText = document.getElementById("Plan_Plan");
    var basic = document.getElementById("BasicBtn");
    var standard = document.getElementById("StandardBtn");
    var premium = document.getElementById("PremiumBtn");

    if(planText.innerText == "Basic Plan"){
        document.getElementById("BasicBtn").style.color = "#ffffff";
        document.getElementById("BasicBtn").style.backgroundColor = "#6b6b6b";
        document.getElementById("StandardBtn").style.color = "#000000";
        document.getElementById("StandardBtn").style.backgroundColor = "#dddddd";
        document.getElementById("PremiumBtn").style.color = "#000000";
        document.getElementById("PremiumBtn").style.backgroundColor = "#dddddd";

    } else if(planText.innerText == "Standard Plan"){
        document.getElementById("BasicBtn").style.color = "#000000";
        document.getElementById("BasicBtn").style.backgroundColor = "#dddddd";
        document.getElementById("StandardBtn").style.color = "#ffffff";
        document.getElementById("StandardBtn").style.backgroundColor = "#6b6b6b";
        document.getElementById("PremiumBtn").style.color = "#000000";
        document.getElementById("PremiumBtn").style.backgroundColor = "#dddddd";
        
    } else if(planText.innerText == "Premium Plan"){
        document.getElementById("BasicBtn").style.color = "#000000";
        document.getElementById("BasicBtn").style.backgroundColor = "#dddddd";
        document.getElementById("StandardBtn").style.color = "#000000";
        document.getElementById("StandardBtn").style.backgroundColor = "#dddddd";
        document.getElementById("PremiumBtn").style.color = "#ffffff";
        document.getElementById("PremiumBtn").style.backgroundColor = "#6b6b6b";
    } 
 }


 // function to update ratings

   
     function updateRatings(){
         
        var Form = document.getElementById("AvailServiceForm");
        
    
        var xmlhttp = new XMLHttpRequest(AvailedService);
        xmlhttp.open("POST", "Backend/ServiceInfoRequest.php", true);
        
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        
        xmlhttp.onreadystatechange = function() {
     
    
            if (this.readyState === 4 || this.status === 200){ 
               
                
                 AvailedServiceINFO=this.response;
                 
                 AvailedServiceINFO = JSON.parse(AvailedServiceINFO); 
                
    
                console.log(AvailedServiceINFO);
 
                 setRatings(AvailedServiceINFO);
    
    
    
    
            } else{window.location.href="ServicesOffered.php"}   
            
        
           
        };
        
         xmlhttp.send("ReqServiceID=" + AvailedService);
    
        } // end 


        function setRatings(data){
            array = data;


            const totalRatings = document.getElementById("totalRatings");
            const Service5StarRatings = document.getElementById("5starRatingsTotal");
            const Service4StarRatings = document.getElementById("4starRatingsTotal");
            const Service3StarRatings = document.getElementById("3starRatingsTotal");
            const Service2StarRatings =  document.getElementById("2starRatingsTotal");
            const Service1StarRatings = document.getElementById("1starRatingsTotal");


            var ComputedTotalRatings = (1*parseFloat(array[0]['Service5StarRatings'])+2 * parseFloat(array[0]['Service4StarRatings'])+3* parseFloat(array[0]['Service3StarRatings'])+4* parseFloat(array[0]['Service2StarRatings'])+5* parseFloat(array[0]['Service1StarRatings']))/5;
            console.log(ComputedTotalRatings);
          


            totalRatings.innerText = ComputedTotalRatings;
            Service5StarRatings.innerText =  array[0]['Service5StarRatings'];
            Service4StarRatings.innerText =  array[0]['Service4StarRatings'];
            Service3StarRatings.innerText =  array[0]['Service3StarRatings'];
            Service2StarRatings.innerText =  array[0]['Service2StarRatings'];
            Service1StarRatings.innerText =  array[0]['Service1StarRatings'];

            TotalRatings();
        }




        // check if user already rated

        function AlreadyRated(){
         
            var params = "ServiceID="+ sessionStorage.getItem('AvailedServiceID')+"&Star=4&UserEmail="+sessionStorage.getItem('sessionName');
        
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST", "Backend/AlreadyRated.php", true);
            
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            
            xmlhttp.onreadystatechange = function() {
         
        
                if (this.readyState === 4 || this.status === 200){ 
                   
                    
                     alreadyRated=this.response;
                     
                     
                    
        
                    console.log(alreadyRated);

                    var star1 = document.getElementById('1');
                    var star2 = document.getElementById('2');
                    var star3 = document.getElementById('3');
                    var star4 = document.getElementById('4');
                    var star5 = document.getElementById('5');
                    var ratingButtons = document.getElementsByClassName('ratingButton');
     
                     if(alreadyRated > 0 && alreadyRated <=5 ){
                       // make the freelancer not rate again to avoid spam  
                        var ratingDiv = document.getElementsByClassName('rating')[0];
                        ratingDiv.style.pointerEvents = "none";


                        if(alreadyRated == 1){
                            star1.checked = true;
                            star1.onclick = null;
                        } else if(alreadyRated == 2){
                            star2.checked = true;
                            star2.onclick = null;
                        }else if(alreadyRated == 3){
                            star3.checked = true;
                            star3.onclick = null;
                        }else if(alreadyRated == 4){
                            star4.checked = true;
                            star4.onclick = null;
                        }else if(alreadyRated == 5){
                            star5.checked = true;
                            star5.onclick = null;
                        }

                        for(var i=1;i<=5;i++){
                            ratingButtons[i].onclick = null;
                        }

                     }
        
        
        
        
                } else{window.location.href="ServicesOffered.php"}   
                
            
               
            };
            
             xmlhttp.send(params);
        
            } // end 
    


window.addEventListener('load',function(){

    var AccountType = sessionStorage.getItem('AccountType');

    if(AccountType === "Customer"){
   
 

    
    } else{
        var ratingDiv = document.getElementsByClassName('rating')[0];
        var ratingButton = document.getElementsByClassName('ratingButton');

        ratingDiv.style.opacity = "0.6";
        ratingDiv.style.pointerEvents = "none";

        ratingButton[0].disabled = true;
        ratingButton[1].disabled = true;
        ratingButton[2].disabled = true;
        ratingButton[3].disabled = true;
        ratingButton[4].disabled = true;


    
    
    }


});




function allrows(){

   
   
    
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "Backend/getAllData.php", true);
    
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 || this.status === 200){ 
           
           
            var dataArray = this.response;
            sessionStorage.setItem('allrows',dataArray);
           //dataArray = JSON.parse(dataArray);
            console.log(dataArray);

            
     
        }else{console.log(err);}      
    };
    
    xmlhttp.send();
    


 }// end 

 allrows();