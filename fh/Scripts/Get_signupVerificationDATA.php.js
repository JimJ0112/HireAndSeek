var xmlhttp = new XMLHttpRequest();
xmlhttp.open("POST", "Backend/GET_signupVerificationDATA.php", true);

xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

xmlhttp.onreadystatechange = function() {
    if (this.readyState === 4 || this.status === 200){ 
       
        
        var dataArray = this.response;
        dataArray = JSON.parse(dataArray);
        console.log(dataArray);

 
    }       
};

xmlhttp.send();

