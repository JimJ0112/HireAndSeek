<!DOCTYPE html>
<html>
    <head>

        <script src="ServicesOffered.js"> </script>
        <link rel="stylesheet" href="Style.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
    
            <!-- Nav bar section -->
            <nav> 
                <a href="Index.php">Home</a>
                <ul id = "navlist">
                    <li class= "navElement" id="searchbar"> <input type = "text" >  <input type="button"> </li>
                    <li class= "navElement"> <a href = "ServicesOffered.php"> EXPLORE </a> </li>
                    <li class= "navElement"> <a href = "BecomeAFreelancer.php"> BECOME A FREELANCER </a> </li>
                    <li class= "navElement"> <a href = "Login_Index.php"> LOGIN </a> </li>
                    <li class= "navElement"> <a href = "About.php"> ABOUT </a> </li>
                
                </ul>
            </nav>
            
                <!-- Categories Section -->
                <nav id="ServicesOffered_Categories">

                    <ul id="ServicesOffered_CategoriesList">
                        <li class="ServicesOffered_CategoriesElement" id="HighRatedServices" onclick="GetData('Backend/GET_HighRatedServicesDATA.php')"> High Rated Services </li>
                        <li class="ServicesOffered_CategoriesElement" id="GraphicsandDesign" onclick="GetData('Backend/GET_GraphicsAndDesignDATA.php')"> Graphics and Design </li>
                        <li class="ServicesOffered_CategoriesElement" id="VideoandPresentation" onclick="GetData('Backend/GET_VideoandPresentationDATA.php')"> Video and Presentation </li>
                        <li class="ServicesOffered_CategoriesElement" id="MusicandAudio" onclick="GetData('Backend/GET_MusicandAudioDATA.php')"> Music and Audio </li>
                        <li class="ServicesOffered_CategoriesElement" id="DevelopmentandIT" onclick="GetData('Backend/GET_DevelopmentandITDATA.php')"> Development and IT</li>
                    </ul>

                </nav>

                <!-- Carousel-->
                <div id="ServicesOffered_Carousel">
                    <h1>Carousel Placeholder</h1>
                </div>
                <!-- Services Offered-->
                <h3 id="ServicesOffered_CategoryTxt"> Category Placeholder </h3>

                <!-- Services Offered cards -->
                <div id="ServicesOffered_Cards">


                    <div class="card">
                      <p class="ServiceID">N</p>
                        <img id="Card_Carousel" src="placeholder.png" alt="Denim Jeans" style="width:100%">

                      

                     
                       
                         <img class="AccountProfilePicture" src="profilepic-placeholder.jpg"> 
                         <h4 class="AccountName" id="accname_1">Account Name </h4> 
                        

                        <p class="AccountLevel">Level </p>
                   

                        <p class="ServiceTitle">Service Title Placeholder</p>
                        <p class="ratings">Ratings Placeholder</p>
                        <p class="ServiceDescription">Some text about the Service..</p>
                        
                       
                       <a href="AvailService.php"> <button class ="ButtonPrice"  id="1" onclick="ButtonClicked(this.id)">Price Starts at Php 000.00</button> </a>
                        
                      </div>


                      <div class="card">
                        <p class="ServiceID">N</p>
                        <img id="Card_Carousel" src="placeholder.png" alt="Denim Jeans" style="width:100%">

                      

                        
                       
                         <img class="AccountProfilePicture" src="profilepic-placeholder.jpg"> 
                         <h4 class="AccountName" id="accname_2">Account Name </h4> 
                        

                        <p class="AccountLevel">Level </p>
                   

                        <p class="ServiceTitle">Service Title Placeholder</p>
                        <p class="ratings">Ratings Placeholder</p>
                        <p class="ServiceDescription">Some text about the Service..</p>
                        
                       
                        <a href="AvailService.php"> <button class="ButtonPrice" id="2" onclick="ButtonClicked(this.id)" >Price Starts at Php 000.00</button> </a>
                      </div>

                      <div class="card">
                        <p class="ServiceID">N</p>
                        <img id="Card_Carousel" src="placeholder.png" alt="Denim Jeans" style="width:100%">

                      

                        
                       
                         <img class="AccountProfilePicture" src="profilepic-placeholder.jpg"> 
                         <h4 class="AccountName" id="accname_3">Account Name </h4> 
                        

                        <p class="AccountLevel">Level </p>
                   

                        <p class="ServiceTitle">Service Title Placeholder</p>
                        <p class="ratings">Ratings Placeholder</p>
                        <p class="ServiceDescription">Some text about the Service..</p>
                        
                       
                        <a href="AvailService.php"> <button class="ButtonPrice" id="3" onclick="ButtonClicked(this.id)">Price Starts at Php 000.00</button> </a>
                      </div>

                      <div class="card">
                        <p class="ServiceID">N</p>
                        <img id="Card_Carousel" src="placeholder.png" alt="Denim Jeans" style="width:100%">

                      

                        
                       
                         <img class="AccountProfilePicture" src="profilepic-placeholder.jpg"> 
                         <h4 class="AccountName" id="accname_4">Account Name </h4> 
                        

                        <p class="AccountLevel">Level </p>
                   

                        <p class="ServiceTitle">Service Title Placeholder</p>
                        <p class="ratings">Ratings Placeholder</p>
                        <p class="ServiceDescription">Some text about the Service..</p>
                        
                       
                        <a href="AvailService.php"> <button class="ButtonPrice" id="4"onclick="ButtonClicked(this.id)">Price Starts at Php 000.00</button></a>
                      </div>


                      <div class="card">
                        <p class="ServiceID">N</p>
                        <img id="Card_Carousel" src="placeholder.png" alt="Denim Jeans" style="width:100%">

                      

                        
                       
                         <img class="AccountProfilePicture" src="profilepic-placeholder.jpg"> 
                         <h4 class="AccountName" id="accname_5">Account Name </h4> 
                        

                        <p class="AccountLevel">Level </p>
                   

                        <p class="ServiceTitle">Service Title Placeholder</p>
                        <p class="ratings">Ratings Placeholder</p>

                         <p class="ServiceDescription"> Some text about the Service..</p>
                        
                       
                         <a href="AvailService.php">  <button class="ButtonPrice" id="5" onclick="ButtonClicked(this.id)">Price Starts at Php 000.00</button></a>
                      </div>




                </div>

                <br>


            <!-- Footer -->
            <footer>
                <h1> Footer Placeholder</h1>
            </footer>
<script src="ServicesOffered.js"> </script>
     
    </body>
</html>