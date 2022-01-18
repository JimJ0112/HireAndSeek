
const searchSuggestions = document.getElementById("SearchSuggestions");
const searchBar = document.getElementById("title");
console.log(searchBar);
var searchResults;
var isTyping = false;

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

            

            searchBar.addEventListener('keydown',function(){
               isTyping = true;
            });
           // isTyping = false;

           searchBar.addEventListener('keyup',function(){
            isTyping = true;
         });

            if(isTyping){

                searchSuggestions.style.display = "block";
                searchSuggestions.innerHTML = searchResults;

            } 
                searchSuggestions.style.display = "hidden";
            

            


     
       
        } else{}      
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