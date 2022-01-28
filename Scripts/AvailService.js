function init() // This is the function the browser first runs when it's loaded.
{
    displayAvailedService() // Then runs the refresh function for the first time.
  var int = self.setInterval(function () {
    displayAvailedService()
  }, 30000); // Set the refresh() function to run every 10 seconds. [1 second would be 1000, and 1/10th of a second would be 100 etc.
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

             
             TotalRatings();

             BasicPlan();




        } else{window.location.href="ServicesOffered.php"}   
        
       // console.log("array for plan" + ArrayForPlan);
       
    };
    
     xmlhttp.send("ReqServiceID=" + AvailedService);

    } // end of display availed service
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

    var now = new Date();
    var Freelancer = sessionStorage.getItem('sessionName');

    MessageDate.value = now.getUTCMonth() + 1 + " / " + parseInt(now.getUTCDate() + 1) + " / " + now.getUTCFullYear();
    MessageTime.value = now.getUTCHours() + " : " + now.getUTCMinutes();
    MessageRecepient_Form.value = Freelancer;
    MessageSubject_Form.value=array[0]['ServiceTitle'];


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
document.getElementById("AvailServiceForm").style.display = "block";
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

startDate.value= date.getMonth() + 1 +"/"+ date.getDay()+"/" + date.getFullYear() ;


Category.value = CategoryValue;
availedPlan.value= PlanValue;
Price.value= PriceValue;








} // end of avail service function



function BasicPlan(){
    const BasicPlanDescription = document.getElementById("BasicPlanDescription_Info");
    const BasicPlanPrice = document.getElementById("BasicPlanPrice_Info");

document.getElementById("BasicBtn").focus();

var Plan = document.getElementById('Plan_Plan');
var PlanDescription = document.getElementById('Plan_Description');
var Price  = document.getElementById("Buy");


Plan.innerText = "Basic Plan";
PlanDescription.innerText = BasicPlanDescription.innerText;
Price.innerText = "Php "+BasicPlanPrice.innerText + ".00";

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
        
 }


 function HideDiv(){
    document.getElementById("AvailServiceForm").style.display = "none";
 }



 function add1star(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "Backend/AddRatings.php", true);
    
    var params = "ServiceID="+ sessionStorage.getItem('AvailedServiceID')+"&Star=1";
    
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



 function add2star(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "Backend/AddRatings.php", true);
    
    var params = "ServiceID="+ sessionStorage.getItem('AvailedServiceID')+"&Star=2";
    
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


 function add3star(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "Backend/AddRatings.php", true);
    
    var params = "ServiceID="+ sessionStorage.getItem('AvailedServiceID')+"&Star=3";
    
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


 function add4star(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "Backend/AddRatings.php", true);
    
    var params = "ServiceID="+ sessionStorage.getItem('AvailedServiceID')+"&Star=4";
    
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


 function add5star(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "Backend/AddRatings.php", true);
    
    var params = "ServiceID="+ sessionStorage.getItem('AvailedServiceID')+"&Star=5";
    
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
