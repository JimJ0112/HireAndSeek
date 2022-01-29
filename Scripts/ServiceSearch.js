
const searchSuggestions = document.getElementById("SearchSuggestions");
const searchBar = document.getElementById("title");
console.log(searchBar);
var searchResults;


function searchSuggestionResults(){
    
    
    var query = document.getElementById("title").value;
    var params = "title="+query;
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.open("POST", "Backend/SearchServices.backend.php", true);
    
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 || this.status === 200){ 

            console.log(this.responseText); // echo from php
          
            searchResults = this.responseText;
            console.log(searchBar.value)
            

          
            
           

                if(searchBar.value == ''){
                    searchSuggestions.style.display = "none";

                }else{ 
            
                searchSuggestions.style.display = "block";
                searchSuggestions.innerHTML = searchResults;}
                

           




            


     
       
        } else{}      
    };

    xmlhttp.send(params);


}


/* function for clicking the search suggestions */
/*
function searchSuggestionClicked($id){

    alert('You have clicked suggestion id number: '+$id);
}

*/

function showSearchBar(){

    const Lisearchbar = document.getElementById('searchbar');
    const searchBar = document.getElementById('title');
    const btnSearch = document.getElementById('btnSearch');
    var search = window.getComputedStyle(Lisearchbar).getPropertyValue("Visibility");




       // alert(search);

        if(search === "hidden"){
            viewSearchBar();
            search = window.getComputedStyle(searchBar).getPropertyValue("Visibility");
        } else{
            hideSearchBar();
            search = window.getComputedStyle(searchBar).getPropertyValue("Visibility");
        }
    

}

function hideSearchBar(){
    const Lisearchbar = document.getElementById('searchbar');
    const searchBar = document.getElementById('title');
    const btnSearch = document.getElementById('btnSearch');

    Lisearchbar.style.visibility = "hidden";
    
}

function viewSearchBar(){
    const Lisearchbar = document.getElementById('searchbar');
    const searchBar = document.getElementById('title');
    const btnSearch = document.getElementById('btnSearch');

    Lisearchbar.style.visibility = "visible";
    searchbar.style.visibility = "visible";
}
