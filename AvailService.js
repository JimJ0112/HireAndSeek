var xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET", "Backend/ServiceInfoPOST.php", true);

xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

xmlhttp.onreadystatechange = function() {
    if (this.readyState === 4 || this.status === 200){ 
        console.log(this.responseText); // echo from php
        var accountSelected = this.response;
        accountSelected = JSON.parse(accountSelected);
        
        document.getElementsByClassName("AccountName")[0].innerHTML = accountSelected[1];
        document.getElementsByClassName("AccountLevel")[0].innerHTML = accountSelected[2];
        document.getElementById("ServiceTitle").innerHTML = accountSelected[3];
        document.getElementById("totalRatings").innerHTML = accountSelected[4];
        document.getElementById("AvailService_Description").innerHTML = accountSelected[5];
        document.getElementById("Buy").innerHTML = accountSelected[6];
    }       
};
xmlhttp.send();