var UserEmail = sessionStorage.getItem('sessionName');

var xmlhttp = new XMLHttpRequest();
xmlhttp.open("POST", "Backend/ManageProfileBackend.php", true);

var params = "UserName="+ UserEmail;

xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

xmlhttp.onreadystatechange = function() {
    if (this.readyState === 4 || this.status === 200){ 
       
        var dataArray = this.response;
        dataArray = JSON.parse(dataArray);
        console.log(dataArray);
        setData(dataArray);
        
 
    }else{console.log(err);}      
};

xmlhttp.send(params);



// functions
function setData(array){
var DataArray = array;

const ManageName = document.getElementById("ManageName");
const ManageEmail = document.getElementById("ManageEmail");
const ManageAccountLevel = document.getElementById("ManageAccountLevel");
const ManageAccountType = document.getElementById("ManageAccountType");
const ManageDescription = document.getElementById("ManageDescription");
const ManageSkills = document.getElementById("ManageSkills");
const ManageBirthDate = document.getElementById("ManageBirthDate");
const ManageGender = document.getElementById("ManageGender");
const ManageContact = document.getElementById("ManageContact");

 ManageName.innerText = DataArray[0]['firstname'] + " " + DataArray[0]['lastname'];
 ManageEmail.innerText = DataArray[0]['email'];
 ManageAccountLevel.innerText = DataArray[0]['AccountLevel'];
 ManageAccountType.innerText = DataArray[0]['AccountType'];
 ManageDescription.value = DataArray[0]['description'];
 ManageSkills.value = DataArray[0]['skills'];
 ManageBirthDate.value = DataArray[0]['Birthdate'];
 ManageGender.value = DataArray[0]['gender'];
 ManageContact.value = DataArray[0]['contact'];
 ifCustomer();
}

function ifCustomer(){
    const ManageAccountType = document.getElementById("ManageAccountType");
    const ManageSkills = document.getElementById("ManageSkills");
    const skills = document.getElementById("lblSkills");

    if(ManageAccountType.innerText == 'Customer'){
        ManageSkills.style.display = "none";
        skills.style.display = "none";
    }
}