function init() // This is the function the browser first runs when it's loaded.
{
    displayJobs() // Then runs the refresh function for the first time.
  var int = self.setInterval(function () {
    displayJobs()
  }, 1000); // Set the refresh() function to run every 10 seconds. [1 second would be 1000, and 1/10th of a second would be 100 etc.
}





function displayJobs() {
var xmlhttp = new XMLHttpRequest();
xmlhttp.open("POST", "Backend/GetJobsBackend.php", true);

var params = "UserName="+ sessionStorage.getItem('sessionName');

xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

xmlhttp.onreadystatechange = function() {
    if (this.readyState === 4 || this.status === 200){ 
       
       Table = document.getElementById("JobsTable").innerHTML = "";
        var dataArray = this.response;
        dataArray = JSON.parse(dataArray);
        console.log(dataArray);
        var Number = dataArray.length;  
        createElements(Number);
        setData(dataArray);
        
 
    }else{console.log(err);}      
};

xmlhttp.send(params);

} // end of create element function













// functions


// function to create elements
function createElements(Number){

    DataNumber = Number;
    Table = document.getElementById("JobsTable");
    
    for(var i = 0;i<DataNumber;i++){
    
    
    row = document.createElement('tr');
    
    category = document.createElement('td'); 
    Title = document.createElement('td');
    Description = document.createElement('td');
    BasicPlanDescription = document.createElement('td');
    BasicPlanPrice = document.createElement('td');
    StandardPlanDescription = document.createElement('td');
    StandardPlanPrice = document.createElement('td');
    PremiumPlanDescription = document.createElement('td');
    PremiumPlanPrice = document.createElement('td');
    JobTotalRatings = document.createElement('td');
    Job5StarRatings = document.createElement('td');
    Job4StarRatings = document.createElement('td');
    Job3StarRatings = document.createElement('td');
    Job2StarRatings = document.createElement('td');
    Job1StarRatings = document.createElement('td');
    JobDeleteButton = document.createElement('button');
    Gcash = document.createElement('td');

    JobDeleteButton.setAttribute('class','JobDeleteButton');
    category.setAttribute('class','category');
    Title.setAttribute('class','Title');
    Description.setAttribute('class','Description');
    BasicPlanDescription.setAttribute('class','BasicPlanDescription'); 
    BasicPlanPrice.setAttribute('class','BasicPlanPrice'); 
    StandardPlanDescription.setAttribute('class','StandardPlanDescription'); 
    StandardPlanPrice.setAttribute('class','StandardPlanPrice'); 
    PremiumPlanDescription.setAttribute('class','PremiumPlanDescription'); 
    PremiumPlanPrice.setAttribute('class','PremiumPlanPrice'); 
    JobTotalRatings.setAttribute('class','JobTotalRatings'); 
    Job5StarRatings.setAttribute('class','Job5StarRatings'); 
    Job4StarRatings.setAttribute('class','Job4StarRatings'); 
    Job3StarRatings.setAttribute('class','Job3StarRatings'); 
    Job2StarRatings.setAttribute('class','Job2StarRatings'); 
    Job1StarRatings.setAttribute('class','Job1StarRatings'); 
    Gcash.setAttribute('class','Gcash');

    row.appendChild(category);
    row.appendChild(Title);
    row.appendChild(Description);
    row.appendChild(BasicPlanDescription);
    row.appendChild(BasicPlanPrice);
    row.appendChild(StandardPlanDescription); 
    row.appendChild(StandardPlanPrice);
    row.appendChild(PremiumPlanDescription);
    row.appendChild(PremiumPlanPrice);
    row.appendChild(JobTotalRatings);
    row.appendChild(Job5StarRatings);
    row.appendChild(Job4StarRatings);
    row.appendChild(Job3StarRatings);
    row.appendChild(Job2StarRatings);
    row.appendChild(Job1StarRatings);
    row.appendChild(Gcash);
    row.appendChild(JobDeleteButton);

    Table.append(row);

    } 
    
    
    } // end of function


    function setData(array){
        var DataArray = array;
        var Number = DataArray.length;
    
    category= document.getElementsByClassName('category');
    Title= document.getElementsByClassName('Title');
    Description= document.getElementsByClassName('Description');
    BasicPlanDescription= document.getElementsByClassName('BasicPlanDescription'); 
    BasicPlanPrice= document.getElementsByClassName('BasicPlanPrice'); 
    StandardPlanDescription= document.getElementsByClassName('StandardPlanDescription'); 
    StandardPlanPrice= document.getElementsByClassName('StandardPlanPrice'); 
    PremiumPlanDescription= document.getElementsByClassName('PremiumPlanDescription'); 
    PremiumPlanPrice= document.getElementsByClassName('PremiumPlanPrice'); 
    JobTotalRatings= document.getElementsByClassName('JobTotalRatings'); 
    Job5StarRatings= document.getElementsByClassName('Job5StarRatings'); 
    Job4StarRatings= document.getElementsByClassName('Job4StarRatings'); 
    Job3StarRatings= document.getElementsByClassName('Job3StarRatings'); 
    Job2StarRatings= document.getElementsByClassName('Job2StarRatings'); 
    Job1StarRatings= document.getElementsByClassName('Job1StarRatings'); 
    const Gcash = document.getElementsByClassName('Gcash');
    JobDeleteButton = document.getElementsByClassName('JobDeleteButton');
 
    
        for(var i = 0; i<Number; i++){
    
            category[i].innerText = DataArray[i]['category'];
            Title[i].innerText = DataArray[i]['ServiceTitle'];
            Description[i].innerText = DataArray[i]['ServiceDescription'];
            BasicPlanDescription[i].innerText = DataArray[i]['ServiceBasicPlanDescription'];
            BasicPlanPrice[i].innerText = DataArray[i]['ServiceBasicPlanPrice'];
            StandardPlanDescription[i].innerText = DataArray[i]['ServiceStandardPlanDescription'];
            StandardPlanPrice[i].innerText = DataArray[i]['ServiceStandardPlanPrice'];
            PremiumPlanDescription[i].innerText = DataArray[i]['ServicePremiumPlanDescription'];
            PremiumPlanPrice[i].innerText = DataArray[i]['ServicePremiumPlanPrice'];
            JobTotalRatings[i].innerText = DataArray[i]['ServiceTotalRatings'];
            Job5StarRatings[i].innerText = DataArray[i]['Service5StarRatings'];
            Job4StarRatings[i].innerText = DataArray[i]['Service4StarRatings'];
            Job3StarRatings[i].innerText = DataArray[i]['Service3StarRatings'];
            Job2StarRatings[i].innerText = DataArray[i]['Service2StarRatings'];
            Job1StarRatings[i].innerText = DataArray[i]['Service1StarRatings'];
            JobDeleteButton[i].setAttribute('onclick','DeleteJob('+DataArray[i]['ServiceID']+')');
            JobDeleteButton[i].innerText = "Remove";
            Gcash[i].innerText = DataArray[i]['Gcash'];


    
        }
    
    }// end of function




    function DeleteJob(ID){
    var ServiceID = ID;

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "Backend/DeleteJobsBackend.php", true);

        var params = "ServiceID="+ID;

        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xmlhttp.onreadystatechange = function() {
    if (this.readyState === 4 || this.status === 200){ 
       
       Table = document.getElementById("JobsTable").innerHTML = "";
        var dataArray = this.response;
       // dataArray = JSON.parse(dataArray);
        console.log(dataArray);
       // var Number = dataArray.length;  
       // createElements(Number);
       // setData(dataArray);
        
 
    }else{console.log(err);}      
};

xmlhttp.send(params);
    }