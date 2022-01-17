function SendSearch(){

    var query = document.getElementById("title").value;
    var params = "title="+query;
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.open("POST", "Backend/SearchServices.backend.php", true);
    
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 || this.status === 200){ 

            console.log(this.responseText); // echo from php
     
       
        }       
    };

    xmlhttp.send(params);


}