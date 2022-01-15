

function displayNext(){
const Layer1 = document.getElementById("Register_Layer1");
const Layer2 = document.getElementById("Register_Layer2");
const Layer3 = document.getElementById("Register_Layer3");
const Layer4 = document.getElementById("Register_Layer4");

var Layer1_Display = window.getComputedStyle(Layer1).display;
var Layer2_Display = window.getComputedStyle(Layer2).display;
var Layer3_Display = window.getComputedStyle(Layer3).display;
var Layer4_Display = window.getComputedStyle(Layer4).display;


if(Layer1_Display != "none" && Layer2_Display == "none" && Layer3_Display == "none" && Layer4_Display == "none"){
console.log(Layer1_Display + " /" + Layer2_Display + " / " + Layer3_Display+ " / " + Layer4_Display);
Layer1.style.display = "none";
Layer2.style.display = "block";
Layer3.style.display = "none";
Layer4.style.display = "none";

} 
else if(Layer2_Display != "none" && Layer1_Display == "none" && Layer3_Display == "none" && Layer4_Display == "none"){
console.log(Layer1_Display + " /" + Layer2_Display + " / " + Layer3_Display+ " / " + Layer4_Display);
Layer1.style.display = "none";
Layer2.style.display = "none";
Layer3.style.display = "block";
Layer4.style.display = "none";

}
else if(Layer3_Display != "none" && Layer1_Display == "none" && Layer2_Display == "none" && Layer4_Display == "none"){
    console.log(Layer1_Display + " /" + Layer2_Display + " / " + Layer3_Display+ " / " + Layer4_Display);
Layer1.style.display = "none";
Layer2.style.display = "none";
Layer3.style.display = "none";
Layer4.style.display = "block";

}
else if(Layer4_Display != "none" && Layer1_Display == "none" && Layer2_Display == "none" && Layer3_Display == "none"){
    console.log(Layer1_Display + " /" + Layer2_Display + " / " + Layer3_Display+ " / " + Layer4_Display);
Layer1.style.display = "block";
Layer2.style.display = "none";
Layer3.style.display = "none";
Layer4.style.display = "none";
       
}}