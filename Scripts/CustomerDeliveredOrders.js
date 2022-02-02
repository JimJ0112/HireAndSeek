function init() // This is the function the browser first runs when it's loaded.
{
  displayOrders() // Then runs the refresh function for the first time.
  var int = self.setInterval(function () {
    displayOrders() 
  }, 3000); // Set the refresh() function to run every 10 seconds. [1 second would be 1000, and 1/10th of a second would be 100 etc.
}





function displayOrders() {
var xmlhttp = new XMLHttpRequest();
xmlhttp.open("POST", "Backend/CustomerDeliveredOrdersBackend.php", true);

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


    CustomerCOL.innerText="FREELANCER";
    JobNameCOL.innerText="TITLE";
    PlanAvailedCOL.innerText="AVAILED PLAN";
    
    PriceCOL.innerText="PRICE";
    FileMailingCOL.innerText="RECIEVE FILES IN ";
    NotesCOL.innerText="YOUR NOTES";
    GcashNumCOL.innerText="SEND PAYMENT TO";
    StatusCOL.innerText="STATUS";
    

    
     
     columnHeaders.appendChild(CustomerCOL);
     columnHeaders.appendChild(JobNameCOL);
     columnHeaders.appendChild(PlanAvailedCOL);
  
     columnHeaders.appendChild(PriceCOL);
     columnHeaders.appendChild(FileMailingCOL);
     columnHeaders.appendChild(GcashNumCOL);
     columnHeaders.appendChild(NotesCOL);
     columnHeaders.appendChild( StatusCOL);
     


     Table.appendChild(columnHeaders);

    for(var i = 0;i<DataNumber;i++){
    
    
    row = document.createElement('tr');
    
    Buyer = document.createElement('td');
    JOB = document.createElement('td');
    Gcash = document.createElement('td');

    
    PlanAvailed = document.createElement('td');
    Price = document.createElement('td');
    DueDate = document.createElement('td'); 
    
    Notes = document.createElement('td');
    Status = document.createElement('td');
    FileMailing = document.createElement('td');
 
    


    
    Buyer.setAttribute('class','Buyer');
    JOB.setAttribute('class','JOB');
    Gcash.setAttribute('class','Gcash');
    
    PlanAvailed.setAttribute('class','PlanAvailed');
    Price.setAttribute('class','price');
    DueDate.setAttribute('class','DueDate'); 
    Notes.setAttribute('class','Notes'); 
    Status.setAttribute('class','Status'); 
    FileMailing.setAttribute('class','FileMailing');
  
   // DeliverButton.setAttribute('onclick','JOBDelivered(');
    
    
 row.appendChild(Buyer);
 row.appendChild(JOB);
 row.appendChild(PlanAvailed);
 row.appendChild(Price);
 row.appendChild(FileMailing);
 row.appendChild(Gcash);
 row.appendChild(Notes);
 row.appendChild(Status);


    Table.append(row);

    } 
    
    
    } // end of function


    // set data function

function setData(array){
    var DataArray = array;
    var Number = DataArray.length;



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
    for(var i = 0; i<Number; i++){

        Buyer[i].innerText = DataArray[i]['OwnerEmail'];
        price[i].innerText = DataArray[i]['Price'];
      JOB[i].innerText = DataArray[i]['ServiceTitle'];
       PlanAvailed[i].innerText = DataArray[i]['availedPlan']; 
        FileMailing[i].innerText = DataArray[i]['FileMailingAddress'];
        Notes[i].innerText = DataArray[i]['clientNotes']; 
         Status[i].innerText = DataArray[i]['TransactionStatus']; 
         Status[i].style.color="green"; 
         Status[i].style.fontWeight="bold"; 
         Gcash[i].innerText = DataArray[i]['Gcash'];


    }

}// end of function
