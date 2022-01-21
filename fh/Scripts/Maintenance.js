var xmlhttp = new XMLHttpRequest();
xmlhttp.open("POST", "Backend/GET_signupVerificationDATA.php", true);

xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

xmlhttp.onreadystatechange = function() {
    if (this.readyState === 4 || this.status === 200){ 
       
        
        var dataArray = this.response;
        dataArray = JSON.parse(dataArray);
        console.log(dataArray.length);
        var Number = dataArray.length;
        createElements(Number);
        
 
    }       
};

xmlhttp.send();

//function that creates table elements for user data and append it to the displayTable

function createElements(Number){

    DataNumber = Number;
    Table = document.getElementById("DisplayTable");
    for(var i = 0;i<DataNumber;i++){
    
    
    row = document.createElement('tr');
    
    AccountCheckBoxCOL = document.createElement('td');
    AccountCheckBox = document.createElement('input');
    
    
    AccountIDCOL = document.createElement('td');
    AccountEmailCOL = document.createElement('td'); 
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
    AccountID1Img = document.createElement('image');
    
    AccountID2Type = document.createElement('td');
    AccountID2COL =document.createElement('td');
    AccountID2Img =document.createElement('image');
    
    AccountSnapshot =document.createElement('td');
    AccountSnapshotImg =document.createElement('image');
    
    
    
    AccountCheckBox.setAttribute('type','checkbox');
    AccountCheckBoxCOL.setAttribute('class','AccountCheckBox');
    
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
    AccountID1Img.setAttribute('class','AccountIDImg'); 
    
    AccountID2Type.setAttribute('class','AccountID2Type'); 
    AccountID2COL.setAttribute('class','AccountID2COL'); 
    AccountID2Img.setAttribute('class','AccountID2Img'); 
    
    AccountSnapshot.setAttribute('class','AccountSnapShot'); 
    AccountSnapshotImg.setAttribute('class','AccountSnapShotImg'); 
    
    
    AccountCheckBox.setAttribute('type','checkbox');
    AccountCheckBoxCOL.setAttribute('class','AccountCheckBox');
    
    
    AccountID1COL.appendChild(AccountID1Img);
    
    AccountID2COL.appendChild(AccountID2Img);
    
    AccountSnapshot.appendChild(AccountSnapshotImg);
    
    
    row.appendChild(AccountIDCOL);
    row.appendChild(AccountEmailCOL);
    row.appendChild(AccountFirstName);
    row.appendChild(AccountLastname);
    row.appendChild(AccountMiddleName);
    row.appendChild(AccountAge);
    row.appendChild(AccountContact);
    row.appendChild(AccountAddress);
    row.appendChild(AccountGender);
    row.appendChild(AccountLanguage);
    row.appendChild(AccountOccupation);
    row.appendChild(AccountID1Type);
    row.appendChild(AccountID1COL);
    row.appendChild(AccountID2Type);
    row.appendChild(AccountID2COL);
    row.appendChild(AccountSnapshot);
    
    Table.append(row);

    }
    
    
    } // end of function


    function setData(array){
        var DataArray;
        

    }


