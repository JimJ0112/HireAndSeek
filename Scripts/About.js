function displayOverview(){
    const Overview = document.getElementById("About-OverviewContent");
    const Team = document.getElementById("About-TeamContent");
    
    var Overview_Display = window.getComputedStyle(Overview).display;
    var Team_Display = window.getComputedStyle(Team).display;
   
    Overview.style.display = "grid";
    Team.style.display = "none";
   
    changeOverviewBG()
}
function displayTeam(){
    const Overview = document.getElementById("About-OverviewContent");
    const Team = document.getElementById("About-TeamContent");
 
    var Overview_Display = window.getComputedStyle(Overview).display;
    var Team_Display = window.getComputedStyle(Team).display;
    
    Overview.style.display = "none";
    Team.style.display = "grid";

    changeTeamBG();

}  

function changeOverviewBG(){
    var OverviewBG = document.getElementById("About-OverviewBtn");
    var TeamBG = document.getElementById("About-TeamBtn");
   
    TeamBG.style.backgroundColor="#5E5E5E";
    OverviewBG.style.backgroundColor="#3A3A3A";

}
function changeTeamBG(){
    var OverviewBG = document.getElementById("About-OverviewBtn");
    var TeamBG = document.getElementById("About-TeamBtn");
   
    TeamBG.style.backgroundColor="#3A3A3A";
    OverviewBG.style.backgroundColor="#5E5E5E";

}
