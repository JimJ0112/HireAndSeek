
var AvailedService = sessionStorage.getItem('AvailedServiceID');

if(!AvailedService){ window.location.href="ServicesOffered.php";
console.log(AvailedService);
}


    //Main
    
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


   // NOT DONE YET
   
    //totalRatings.innerHTML = ;
    
    //console.log(AccountName);
    //console.log(AccountLevel);
   console.log(ServiceTitle);
   // console.log(totalRatings);
   // console.log(ServiceDescription);
   // console.log(BuyButton);


}


function availService(array){
var DataArray = array;

            

const OwnerEmail = document.getElementById("OwnerEmail");
const ClientEmail = document.getElementById("ClientEmail");
const ServiceID = document.getElementById("ServiceID");
const ServiceTitle = document.getElementById("ServiceTitle"); 
const clientNotes = document.getElementById("clientNotes");
const startDate = document.getElementById("startDate");
const finishedDate =document.getElementById("finishedDate");
const availedPlan = document.getElementById("availedPlan");
const Price = document.getElementById("Price");
           


  
    


} // end of avail service function