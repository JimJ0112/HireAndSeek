
var AvailedService = sessionStorage.getItem('AvailedServiceID');

if(!AvailedService){ window.location.href="ServicesOffered.php";
console.log(AvailedService);
}


    //Main
    var BuyButton = document.getElementById("Buy");
    var Form = document.getElementById("AvailServiceForm");

    var xmlhttp = new XMLHttpRequest(AvailedService);
    xmlhttp.open("POST", "Backend/ServiceInfoRequest.php", true);
    
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 || this.status === 200){ 
           
            
             AvailedServiceINFO=this.response;
             AvailedServiceINFO = JSON.parse(AvailedServiceINFO); 
            console.log(AvailedServiceINFO);
            setValues(AvailedServiceINFO);

      
            
            
            
            




        } else{window.location.href="ServicesOffered.php"}      
    };
    
     xmlhttp.send("ReqServiceID=" + AvailedService);


// functions

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
    // total ratings (not yet final)
    var ComputedTotalRatings = (1*parseFloat(array[0]['Service5StarRatings'])+2 * parseFloat(array[0]['Service4StarRatings'])+3* parseFloat(array[0]['Service3StarRatings'])+4* parseFloat(array[0]['Service2StarRatings'])+5* parseFloat(array[0]['Service1StarRatings']))/5;
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


   // NOT DONE YET
   
    //totalRatings.innerHTML = ;
    
    //console.log(AccountName);
    //console.log(AccountLevel);
   console.log(ServiceTitle);
   // console.log(totalRatings);
   // console.log(ServiceDescription);
   // console.log(BuyButton);


}


function availService(){

//declarations
var date = new Date();

var client = sessionStorage.getItem('sessionName');
var AvailedID = sessionStorage.getItem('AvailedServiceID');
var PlanValue = document.getElementById('Plan_Plan').innerText;
var PriceValue =document.getElementById('Buy').innerText;
const AccountName = document.getElementsByClassName("AccountName")[0].innerText;
const Title = document.getElementById("ServiceTitle").innerText;
const CategoryValue = document.getElementById("ServCategory").innerText;


const OwnerEmail = document.getElementById("OwnerEmail");
const ClientEmail = document.getElementById("ClientEmail");
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

startDate.value= date.getMonth() + 1 +"/"+ date.getDay()+"/" + date.getFullYear() ;


Category.value = CategoryValue;
availedPlan.value= PlanValue;
Price.value= PriceValue;

} // end of avail service function

