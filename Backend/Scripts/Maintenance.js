var xmlhttp = new XMLHttpRequest();
xmlhttp.open("POST", "GET_signupVerificationDATA.php", true);

xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

xmlhttp.onreadystatechange = function() {
    if (this.readyState === 4 || this.status === 200){ 
       
        
        var dataArray = this.response;
        dataArray = JSON.parse(dataArray);
        console.log(dataArray);
        var Number = dataArray.length;  
        createElements(Number);
        setData(dataArray);
        
 
    }else{console.log(err);}      
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
  
    
    AccountID2Type = document.createElement('td');
    AccountID2COL =document.createElement('td');
  
    
    AccountSnapshot =document.createElement('td');
 
    
    
    
    AccountCheckBox.setAttribute('type','checkbox');
    AccountCheckBox.setAttribute('class','AccountCheckBox');
    
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







    
    AccountCheckBoxCOL.appendChild(AccountCheckBox);
 
    
    row.appendChild(AccountCheckBoxCOL);
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
        var DataArray = array;
        var Number = parseInt(DataArray.length);
        var ID1imgArray = new Array();
        var ID2imgArray = new Array();
        var SnapshotimgArray = new Array();


     
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
       
        AccountSnapshot = document.getElementsByClassName('AccountSnapShot'); 
     
   

        for(var i =0;i<Number;i++){


            
             
            AccountIDCOL[i].innerText = DataArray[i]['id'];
            AccountEmailCOL[i].innerText = DataArray[i]['email'];
            AccountFirstName[i].innerText = DataArray[i]['firstname'];
            AccountLastname[i].innerText = DataArray[i]['lastname'];
            AccountMiddleName[i].innerText = DataArray[i]['middleinitial'];
            AccountAge[i].innerText = DataArray[i]['age'];
            AccountContact[i].innerText =DataArray[i]['contact'];
            AccountAddress[i].innerText =DataArray[i]['address'];
            AccountGender[i].innerText =DataArray[i]['gender'];
            AccountLanguage[i].innerText =DataArray[i][''];
            AccountOccupation[i].innerText =DataArray[i]['occupation'];
            AccountID1Type[i].innerText =DataArray[i]['idimage1type'];
            AccountID2Type[i].innerText =DataArray[i]['idimage2type'];
            var imgID1 = new Image();
            imgID1.src = DataArray[i]['idimage1directory'];
            AccountID1COL[i].appendChild(imgID1);
            
            var imgID2 = new Image();
            imgID2.src = DataArray[i]['idimage2directory'];
            AccountID2COL[i].appendChild(imgID2);
     
            var imgSS = new Image();
            imgSS.src = DataArray[i]['snapshotdirectory'];
            AccountSnapshot[i].appendChild(imgSS);

         



        }



    }// end of function


