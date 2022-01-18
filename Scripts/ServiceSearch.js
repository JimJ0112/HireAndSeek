
const searchSuggestions = document.getElementById("SearchSuggestions");


var searchResults;

function SendSearch(){
    
    
    var query = document.getElementById("title").value;
    var params = "title="+query;
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.open("POST", "Backend/SearchServices.backend.php", true);
    
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 || this.status === 200){ 

            console.log(this.responseText); // echo from php
          
            searchResults = this.responseText;
     
       
        } else{searchSuggestions.style.display = "none";}      
    };

    xmlhttp.send(params);


}


function showSuggestions(){
    searchSuggestions.style.display = "block";
    searchSuggestions.innerText = searchResults;
}

function hideSuggestions(){
    searchSuggestions.style.display = "none";
}