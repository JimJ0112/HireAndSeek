function init() // This is the function the browser first runs when it's loaded.
{
  displayOrders() // Then runs the refresh function for the first time.
  var int = self.setInterval(function () {
    displayOrders() 
  }, 3000); // Set the refresh() function to run every 10 seconds. [1 second would be 1000, and 1/10th of a second would be 100 etc.
}





function displayOrders() {
var xmlhttp = new XMLHttpRequest();
xmlhttp.open("POST", "Backend/OrdersBackend.php", true);

var params = "UserName="+ sessionStorage.getItem('sessionName');

xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

xmlhttp.onreadystatechange = function() {
    if (this.readyState === 4 || this.status === 200){ 
       
        Table = document.getElementById("OrdersTable").innerHTML = "";
        var dataArray = this.response;
       dataArray = JSON.parse(dataArray);
        console.log(dataArray);
        var Number = dataArray.length;  
       createElements(Number);
        setData(dataArray);
        
 
    }else{console.log(err);}      
};

xmlhttp.send(params);

}


// function to create elements
function createElements(Number){

    DataNumber = Number;
    Table = document.getElementById("OrdersTable");

    // column headers
    var columnHeaders  = document.createElement('tr');
    columnHeaders.setAttribute('class','columnHeaders');

    var CustomerCOL = document.createElement('td');
    var JobNameCOL = document.createElement('td');
    var PlanAvailedCOL = document.createElement('td');
    var DueDateCOL = document.createElement('td');
    var PriceCOL = document.createElement('td');
    var FileMailingCOL = document.createElement('td');
    var NotesCOL = document.createElement('td');
    var GcashNumCOL = document.createElement('td');
    var StatusCOL = document.createElement('td');
    var BtnsCOL = document.createElement('td');


    CustomerCOL.innerText="CATEGORY";
    JobNameCOL.innerText="TITLE";
    PlanAvailedCOL.innerText="DESCRIPTION";
    DueDateCOL.innerText="BASIC PLAN DESCRIPTION";
    PriceCOL.innerText="BASIC PLAN PRICE";
    FileMailingCOL.innerText="STANDARD PLAN DESCRIPTION";
    NotesCOL.innerText="STANDARD PLAN PRICE";
    GcashNumCOL.innerText="PREMIUM PLAN DESCRIPTION";
    StatusCOL.innerText="PREMIUM PLAN PRICE";
    

    
     
     columnHeaders.appendChild(CustomerCOL);
     columnHeaders.appendChild(JobNameCOL);
     columnHeaders.appendChild(PlanAvailedCOL);
     columnHeaders.appendChild(DueDateCOL);
     columnHeaders.appendChild(PriceCOL);
     columnHeaders.appendChild(FileMailingCOL);
     columnHeaders.appendChild(NotesCOL);
     columnHeaders.appendChild(GcashNumCOL);
     columnHeaders.appendChild( StatusCOL);
     columnHeaders.appendChild(BtnsCOL);


     Table.appendChild(columnHeaders);
     // end 
    
    for(var i = 0;i<DataNumber;i++){
    
    
    row = document.createElement('tr');
    
    Buyer = document.createElement('td');
    JOB = document.createElement('td');
    
    
    PlanAvailed = document.createElement('td');
    Price = document.createElement('td');
    DueDate = document.createElement('td'); 
    
    Notes = document.createElement('td');
    Status = document.createElement('td');
    FileMailing = document.createElement('td');
    Gcash = document.createElement('td');
    DeliverButton = document.createElement('Button');
    CancelButton = document.createElement('Button');
    ButtonsCol = document.createElement('td');
    


    
    Buyer.setAttribute('class','Buyer');
    JOB.setAttribute('class','JOB');
    
    Gcash.setAttribute('class','Gcash');
    PlanAvailed.setAttribute('class','PlanAvailed');
    Price.setAttribute('class','price');
    DueDate.setAttribute('class','DueDate'); 
    Notes.setAttribute('class','Notes'); 
    Status.setAttribute('class','Status'); 
    FileMailing.setAttribute('class','FileMailing');

    DeliverButton.setAttribute('class','Deliver');
    CancelButton.setAttribute('class','Cancel');
    
   // DeliverButton.setAttribute('onclick','JOBDelivered(');
    
    
 row.appendChild(Buyer);
 row.appendChild(JOB);
 row.appendChild(PlanAvailed);
 row.appendChild(DueDate);
 row.appendChild(Price);
 row.appendChild(FileMailing);
 row.appendChild(Notes);
 row.appendChild(Gcash);
 row.appendChild(Status);
 ButtonsCol.appendChild(DeliverButton);
 ButtonsCol.appendChild(CancelButton);
 row.appendChild(ButtonsCol);

    Table.append(row);

    } 
    
    
    } // end of function


    // set data function

function setData(array){
    var DataArray = array;
    var Number = DataArray.length;


    const DueDate = document.getElementsByClassName('DueDate');
    const Buyer = document.getElementsByClassName('Buyer');
    const JOB = document.getElementsByClassName('JOB');
    const PlanAvailed = document.getElementsByClassName('PlanAvailed');
    const FileMailing = document.getElementsByClassName('FileMailing');
    const Notes = document.getElementsByClassName('Notes');
    const Status = document.getElementsByClassName('Status');
    const DeliverButton = document.getElementsByClassName('Deliver');
    const CancelButton = document.getElementsByClassName('Cancel');
    const price = document.getElementsByClassName('price');
    const Gcash = document.getElementsByClassName('Gcash');
    var today = new Date();

    for(var i = 0; i<Number; i++){

        Buyer[i].innerText = DataArray[i]['ClientEmail'];
        price[i].innerText = DataArray[i]['Price'];
      JOB[i].innerText = DataArray[i]['ServiceTitle'];
       PlanAvailed[i].innerText = DataArray[i]['availedPlan']; 
        FileMailing[i].innerText = DataArray[i]['FileMailingAddress'];
        Notes[i].innerText = DataArray[i]['clientNotes']; 
         Status[i].innerText = DataArray[i]['TransactionStatus']; 
         Status[i].style.color="darkblue"; 
         Status[i].style.fontWeight="bold"; 

         DeliverButton[i].innerText = "Deliver";
         Gcash[i].innerText = DataArray[i]['Gcash'];
         DeliverButton[i].setAttribute('onclick','DeliverJob('+DataArray[i]['transactionID']+')');
         CancelButton[i].innerText = "Cancel"; 
         CancelButton[i].setAttribute('onclick','CancelJob('+DataArray[i]['transactionID']+')');

         DueDate[i].innerText = DataArray[i]['transactionFinishedDate'];

         
         var deadline = new Date(DataArray[i]['transactionFinishedDate']);

         if(today > deadline){
            DueDate[i].style.color = "red";
         }

    }

}// end of function

function DeliverJob(ID){
    var TransactionID = ID;


var xmlhttp = new XMLHttpRequest();
xmlhttp.open("POST", "Backend/DeliverOrder.php", true);

var params = "TransactionID="+ TransactionID;

xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

xmlhttp.onreadystatechange = function() {
    if (this.readyState === 4 || this.status === 200){ 
       
      
        var dataArray = this.response;
     
        console.log(dataArray);
 
        
 
    }else{console.log(err);}      
};

xmlhttp.send(params);
    
} // end of deliver job





function CancelJob(ID){
    var TransactionID = ID;


var xmlhttp = new XMLHttpRequest();
xmlhttp.open("POST", "Backend/CancelOrder.php", true);

var params = "TransactionID="+ TransactionID;

xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

xmlhttp.onreadystatechange = function() {
    if (this.readyState === 4 || this.status === 200){ 
       
        //Table = document.getElementById("OrdersTable").innerHTML = "";
        var dataArray = this.response;
        //dataArray = JSON.parse(dataArray);
        console.log(dataArray);
        //var Number = dataArray.length;  
       //createElements(Number);
        //setData(dataArray);
        
 
    }else{console.log(err);}      
};

xmlhttp.send(params);
    
} //// end of deliver job
