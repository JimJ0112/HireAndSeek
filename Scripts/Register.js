const clientVideo = document.getElementById("video");
const canvas = document.getElementById("photocapture");


function displayNext(){
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var email = document.getElementById('Email');
var fileEmail = document.getElementById('FileEmail');
var username = document.getElementById('Username');
var password = document.getElementById('Password');
var confirmPass = document.getElementById('ConfirmPassword');
var fname = document.getElementById('Fname');
var mname = document.getElementById('Mname');
var lname = document.getElementById('Lname');
var id1 = document.getElementById('id1');
var id2 = document.getElementById('id2');
var file1 = document.getElementById('file1');
var file2 = document.getElementById('file2');    
var video = document.getElementById('startvideo');
var capture = document.getElementById('CaptureImage');
var check = document.getElementById('checkboxAccept');
  
     
const Layer1 = document.getElementById("Register_Layer1");
const Layer2 = document.getElementById("Register_Layer2");
const Layer3 = document.getElementById("Register_Layer3");
const Layer4 = document.getElementById("Register_Layer4");
const displayVideo = document.getElementById("startvideo");


var Layer1_Display = window.getComputedStyle(Layer1).display;
var Layer2_Display = window.getComputedStyle(Layer2).display;
var Layer3_Display = window.getComputedStyle(Layer3).display;
var Layer4_Display = window.getComputedStyle(Layer4).display;

//Check is required fields is empty
    if(Layer1_Display == "grid" && email.value.length != 0 && fileEmail.value.length != 0 && username.value.length != 0 && 
        password.value.length != 0 && confirmPass.value.length != 0 && fname.value.length != 0 &&
        mname.value.length != 0 && lname.value.length != 0){
           
            if(Layer1_Display != "none" && Layer2_Display == "none" && Layer3_Display == "none" && Layer4_Display == "none"){
            console.log(Layer1_Display + " /" + Layer2_Display + " / " + Layer3_Display+ " / " + Layer4_Display);
            Layer1.style.display = "none";
            Layer2.style.display = "grid";
            Layer3.style.display = "none";
            Layer4.style.display = "none";
            displayVideo.style.display = "none";
            document.getElementById("Next").style.display = "grid";
            document.getElementById("CaptureImage").style.display="none";
            } 
        }
    else if(Layer2_Display == "grid" && id1.value.length != 0 && id2.value.length != 0 &&
            file1.files.length != 0 && file2.files.length != 0){

            if(Layer2_Display != "none" && Layer1_Display == "none" && Layer3_Display == "none" && Layer4_Display == "none"){
            console.log(Layer1_Display + " /" + Layer2_Display + " / " + Layer3_Display+ " / " + Layer4_Display);
            Layer1.style.display = "none";
            Layer2.style.display = "none";
            Layer3.style.display = "grid";
            Layer4.style.display = "none";
            displayVideo.style.display = "block";
            document.getElementById("CaptureImage").style.display="block";
            document.getElementById("Next").style.display = "grid";
            }
        }
    else if(Layer3_Display == "grid"){
            if(Layer3_Display != "none" && Layer1_Display == "none" && Layer2_Display == "none" && Layer4_Display == "none"){
                console.log(Layer1_Display + " /" + Layer2_Display + " / " + Layer3_Display+ " / " + Layer4_Display);
            Layer1.style.display = "none";
            Layer2.style.display = "none";
            Layer3.style.display = "none";
            Layer4.style.display = "grid";
            displayVideo.style.display = "none";
            document.getElementById("Next").style.display = "none";
            document.getElementById("CaptureImage").style.display="none";
            }
        }

    else if(Layer4_Display == "grid" && check.checked == true){
            if(Layer4_Display != "none" && Layer1_Display == "none" && Layer2_Display == "none" && Layer3_Display == "none"){
                console.log(Layer1_Display + " /" + Layer2_Display + " / " + Layer3_Display+ " / " + Layer4_Display);
            Layer1.style.display = "grid";
            Layer2.style.display = "none";
            Layer3.style.display = "none";
            Layer4.style.display = "none";
            displayVideo.style.display = "none";
            document.getElementById("CaptureImage").style.display="none";
            }   
    }
     
    else if(email.value.length != 0 && !email.value.match(mailformat)){
        alert("Email is invalid!");
        email.focus();
        return false;
    }
    else if(fileEmail.value.length != 0 && !fileEmail.value.match(mailformat)){
        alert("File Email is invalid!");
        fileEmail.focus();
        return false;
    }
    else if(password.value != confirmPass.value){
        alert("Password doesnt match!");
        confirmPass.focus();
        return false;
    } 
    else{
        alert("Values must be empty.");
        return false;
    }


} // close function


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
    // Preview image in Layer 2 Registration
    function previewBeforeUpload(id){
        document.querySelector("#"+id).addEventListener("change", function(e){
            if(e.target.files.length==0){
                return;
            }
        let file = e.target.files[0];
        let url = URL.createObjectURL(file);
        document.querySelector("#"+id+"-Preview div").innerText = file.name;
        document.querySelector("#"+id+"-Preview img").src = url;
    });
    }

    previewBeforeUpload("file1");
    previewBeforeUpload("file2");

