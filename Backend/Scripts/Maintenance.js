
function listFreelancerAccounts(){
var xmlhttp = new XMLHttpRequest();
var categoryItem = document.getElementsByClassName('categoryItem');
categoryItem[0].style.color="white";
categoryItem[1].style.color="black";
categoryItem[1].style.border="1px solid black";
categoryItem[0].style.border="none";
xmlhttp.open("POST", "GET_FreelancerVerificationDATA.php", true);

xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

xmlhttp.onreadystatechange = function() {
    if (this.readyState === 4 || this.status === 200){ 
       
        Table = document.getElementById("DisplayTable").innerHTML = "";
        var dataArray = this.response;
        dataArray = JSON.parse(dataArray);
        console.log(dataArray);
        var Number = dataArray.length;  
        createElements(Number);
        setData(dataArray);
        
 
    }else{console.log(err);}      
};

xmlhttp.send();

}// end of function



function listCustomerAccounts(){
    var xmlhttp = new XMLHttpRequest();
    var categoryItem = document.getElementsByClassName('categoryItem');
    categoryItem[0].style.color="black";
    categoryItem[1].style.color="white";
    categoryItem[0].style.border="1px solid black";
    categoryItem[1].style.border="none";

    xmlhttp.open("POST", "GET_CustomerVerificationDATA.php", true);
    
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 || this.status === 200){ 
           
            Table = document.getElementById("DisplayTable").innerHTML = "";
            var dataArray = this.response;
            dataArray = JSON.parse(dataArray);
            console.log(dataArray);
            var Number = dataArray.length;  
            createElements(Number);
            setData(dataArray);
            
     
        }else{console.log("connection request failed");}      
    };
    
    xmlhttp.send();
    
    }// end of function


//function that creates table elements for user data and append it to the displayTable

function createElements(Number){

    DataNumber = Number;
    Table = document.getElementById("DisplayTable");
    
    for(var i = 0;i<DataNumber;i++){
    
    
    row = document.createElement('tr');
    
    AccountCheckBoxCOL = document.createElement('td');
    AccountCheckBox = document.createElement('input');
    AccountEmailHidden = document.createElement('input');
    
    AccountIDCOL = document.createElement('td');
    AccountEmailCOL = document.createElement('td'); 
    AccountFileMailingAddress= document.createElement('td');
    AccountFirstName = document.createElement('td');
    AccountLastname = document.createElement('td');
    AccountMiddleName = document.createElement('td');
    AccountAge = document.createElement('td');
    AccountContact =document.createElement('td');
    AccountAddress =document.createElement('td');
    AccountGender =document.createElement('td');
    AccountLanguage =document.createElement('td');
    AccountOccupation =document.createElement('td');
    
    AccountID1Type =document.createElement('td');
    AccountID1COL =document.createElement('td');
  
    
    AccountID2Type = document.createElement('td');
    AccountID2COL =document.createElement('td');
  
    
    AccountSnapshot =document.createElement('td');
    AccountType = document.createElement('td');
    
    AccountEmailHidden.setAttribute('class','AccountEmailHidden');
    AccountEmailHidden.setAttribute('name','AccountEmailHidden');
    AccountEmailHidden.setAttribute('Type','Hidden');

    AccountFileMailingAddress.setAttribute('class','MailingAddress');
    AccountCheckBox.setAttribute('type','checkbox');
    AccountCheckBox.setAttribute('class','AccountCheckBox');
    AccountCheckBox.setAttribute('name','AccountCheckBox[]');
    AccountIDCOL.setAttribute('class','AccountID');
    AccountEmailCOL.setAttribute('class','AccountEmail');
    AccountFirstName .setAttribute('class','AccountFirstName');
    AccountLastname.setAttribute('class','AccountLastName'); 
    AccountMiddleName.setAttribute('class','AccountMiddleName'); 
    AccountAge.setAttribute('class','AccountAge'); 
    AccountContact.setAttribute('class','AccountContact'); 
    AccountAddress.setAttribute('class','AccountAddress'); 
    AccountGender.setAttribute('class','AccountGender'); 
    AccountLanguage.setAttribute('class','AccountLanguage'); 
    AccountOccupation.setAttribute('class','AccountOccupation'); 
    
    AccountID1Type.setAttribute('class','AccountID1Type'); 
    AccountID1COL.setAttribute('class','AccountID1Col'); 
   
    
    AccountID2Type.setAttribute('class','AccountID2Type'); 
    AccountID2COL.setAttribute('class','AccountID2COL'); 

    
    AccountSnapshot.setAttribute('class','AccountSnapShot'); 

    
    
    AccountCheckBox.setAttribute('type','checkbox');
    AccountCheckBoxCOL.setAttribute('class','AccountCheckBoxCOL');
    AccountType.setAttribute('class','AccountType')






    
    AccountCheckBoxCOL.appendChild(AccountCheckBox);
 
    row.appendChild(AccountEmailHidden);
    row.appendChild(AccountCheckBoxCOL);
    row.appendChild(AccountIDCOL);
    row.appendChild(AccountEmailCOL);
    row.appendChild(AccountFirstName);
    row.appendChild(AccountLastname);
    row.appendChild(AccountMiddleName);
    row.appendChild(AccountAge);
    row.appendChild(AccountContact);
    row.appendChild(AccountFileMailingAddress); //MailingAddress
    row.appendChild(AccountAddress);
    row.appendChild(AccountGender);
    row.appendChild(AccountLanguage);
    row.appendChild(AccountOccupation);
    row.appendChild(AccountID1Type);
    row.appendChild(AccountID1COL);
    row.appendChild(AccountID2Type);
    row.appendChild(AccountID2COL);
    row.appendChild(AccountSnapshot);
    row.appendChild(AccountType);

    Table.append(row);

    } 
    
    
    } // end of function


    function setData(array){
        var DataArray = array;
        var Number = parseInt(DataArray.length);
        var ID1imgArray = new Array();
        var ID2imgArray = new Array();
        var SnapshotimgArray = new Array();

        AccountEmailHidden = document.getElementsByClassName('AccountEmailHidden');
        MailingAddress = document.getElementsByClassName('MailingAddress');
        AccountCheckBox = document.getElementsByClassName('AccountCheckBox');
        AccountIDCOL= document.getElementsByClassName('AccountID');
        AccountEmailCOL = document.getElementsByClassName('AccountEmail');
        AccountFirstName = document.getElementsByClassName('AccountFirstName');
        AccountLastname = document.getElementsByClassName('AccountLastName'); 
        AccountMiddleName = document.getElementsByClassName('AccountMiddleName'); 
        AccountAge = document.getElementsByClassName('AccountAge'); 
        AccountContact = document.getElementsByClassName('AccountContact'); 
        AccountAddress = document.getElementsByClassName('AccountAddress');
        AccountGender = document.getElementsByClassName('AccountGender');
        AccountLanguage = document.getElementsByClassName('AccountLanguage'); 
        AccountOccupation = document.getElementsByClassName('AccountOccupation'); 
        AccountID1Type= document.getElementsByClassName( 'AccountID1Type');
        AccountID1COL = document.getElementsByClassName('AccountID1Col');
        AccountID1Img = document.getElementsByClassName('AccountIDImg');
        AccountID2Type = document.getElementsByClassName('AccountID2Type');
        AccountID2COL= document.getElementsByClassName( 'AccountID2COL');
       AccountType = document.getElementsByClassName('AccountType');
        AccountSnapshot = document.getElementsByClassName('AccountSnapShot'); 
     
   

        for(var i =0;i<Number;i++){

            AccountEmailHidden[i].value= DataArray[i]['email'];
            MailingAddress[i].innerText = DataArray[i]['FileMailingAddress'];
            AccountCheckBox[i].setAttribute('value',DataArray[i]['id']);
            AccountIDCOL[i].innerText = DataArray[i]['id'];
            AccountEmailCOL[i].innerText = DataArray[i]['email'];
            AccountFirstName[i].innerText = DataArray[i]['firstname'];
            AccountLastname[i].innerText = DataArray[i]['lastname'];
            AccountMiddleName[i].innerText = DataArray[i]['middlename'];
            AccountAge[i].innerText = DataArray[i]['Birthdate'];
            AccountContact[i].innerText =DataArray[i]['contact'];
            AccountAddress[i].innerText =DataArray[i]['address'];
            AccountGender[i].innerText =DataArray[i]['gender'];
            AccountLanguage[i].innerText =DataArray[i]['userlanguage'];
            AccountOccupation[i].innerText =DataArray[i]['occupation'];
            AccountID1Type[i].innerText =DataArray[i]['idimage1type'];
            AccountID2Type[i].innerText =DataArray[i]['idimage2type'];
            AccountType[i].innerText = DataArray[i]['AccountType'];

            var imgID1 = new Image();
            imgID1.src = DataArray[i]['idimage1directory'];
            imgID1.setAttribute('class','DataImg');
            AccountID1COL[i].appendChild(imgID1);
            AccountID1COL[i].setAttribute('onclick',"getID1('" + DataArray[i]['idimage1directory'] +"')");
            
            var imgID2 = new Image();
            imgID2.src = DataArray[i]['idimage2directory'];
            AccountID2COL[i].appendChild(imgID2);
            imgID2.setAttribute('class','DataImg');
            AccountID2COL[i].setAttribute('onclick',"getID1('" + DataArray[i]['idimage2directory'] +"')");
     
            var imgSS = new Image();
            imgSS.src = DataArray[i]['snapshotdirectory'];
            imgSS.setAttribute('class','DataImg');
            AccountSnapshot[i].appendChild(imgSS);
            AccountSnapshot[i].setAttribute('onclick',"getID1('" + DataArray[i]['snapshotdirectory'] +"')");

         



        }



    }// end of function




    // submit accepted

function submitAccept(){
    document.getElementById("DataForm").setAttribute('action','SubmitAcceptedAccounts.php');
    document.getElementById("DataForm").submit();
}

function submitDecline(){
    document.getElementById("DataForm").setAttribute('action','SubmitDeclinedAccounts.php');
    document.getElementById("DataForm").submit();
}


function getID1(source){

    var imgstring = source;
    var modalImg = document.getElementById('modalImg'); 
    var EmailConfirmBackground = document.getElementById('EmailConfirmBackground');
    modalImg.src = imgstring;
    EmailConfirmBackground.style.display ="block";
 
    


 }// end 


 function hideModal(){

  

    var EmailConfirmBackground = document.getElementById('EmailConfirmBackground');
 
    EmailConfirmBackground.style.display ="none";
 
    


 }// end 
 