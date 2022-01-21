const clientVideo = document.getElementById("video");
const canvas = document.getElementById("photocapture");


function displayNext(){
const Layer1 = document.getElementById("Register_Layer1");
const Layer2 = document.getElementById("Register_Layer2");
const Layer3 = document.getElementById("Register_Layer3");
const Layer4 = document.getElementById("Register_Layer4");
const displayVideo = document.getElementById("startvideo");


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
displayVideo.style.display = "none";
document.getElementById("Next").style.display = "block";
document.getElementById("CaptureImage").style.display="none";

} 
else if(Layer2_Display != "none" && Layer1_Display == "none" && Layer3_Display == "none" && Layer4_Display == "none"){
console.log(Layer1_Display + " /" + Layer2_Display + " / " + Layer3_Display+ " / " + Layer4_Display);
Layer1.style.display = "none";
Layer2.style.display = "none";
Layer3.style.display = "block";
Layer4.style.display = "none";
displayVideo.style.display = "block";
document.getElementById("CaptureImage").style.display="block";
document.getElementById("Next").style.display = "block";

}
else if(Layer3_Display != "none" && Layer1_Display == "none" && Layer2_Display == "none" && Layer4_Display == "none"){
    console.log(Layer1_Display + " /" + Layer2_Display + " / " + Layer3_Display+ " / " + Layer4_Display);
Layer1.style.display = "none";
Layer2.style.display = "none";
Layer3.style.display = "none";
Layer4.style.display = "block";
displayVideo.style.display = "none";
document.getElementById("Next").style.display = "none";
document.getElementById("CaptureImage").style.display="none";

}
else if(Layer4_Display != "none" && Layer1_Display == "none" && Layer2_Display == "none" && Layer3_Display == "none"){
    console.log(Layer1_Display + " /" + Layer2_Display + " / " + Layer3_Display+ " / " + Layer4_Display);
Layer1.style.display = "block";
Layer2.style.display = "none";
Layer3.style.display = "none";
Layer4.style.display = "none";
displayVideo.style.display = "none";
document.getElementById("CaptureImage").style.display="none";

       
}}



 async function startvideo(){
    //ask the user for permission to use a media input
    let stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
    //save the data from media input into the <video> tag
	clientVideo.srcObject = stream;

    // stops the video after the capture button has been pushed
    document.getElementById("CaptureImage").addEventListener('click',function(){

        const tracks = stream.getTracks(); // getTracks() are built in functionality of javascript
        tracks[0].stop();


    });
} // para sa camera  

document.getElementById("CaptureImage").addEventListener('click',function(){
    // gets the image data from the <video> and draws it into the html <canvas>
    var image_captured = canvas.getContext('2d').drawImage(clientVideo, 0, 0, canvas.width, canvas.height);
    // save canvas into a variable
    let image_data_url = canvas.toDataURL();
    
    // set the value of hidden input field into the data from canvas
   document.getElementById("UserSnapshot").value = image_data_url;
       
} 


);





