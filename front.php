<!DOCTYPE html>
<html lang="en">
<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...

?>
  <link rel="stylesheet" type="text/css"   href="css/styles.css">
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <title>Eco Harmony</title>
</head>
<body>
  
    <div class="other-content"><font color = "white">
        <div class="header_bottom">
            <div class="container-fluid">
              <nav class="navbar navbar-expand-lg custom_nav-container">
                
                
                <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
                  <ul class="navbar-nav">                    
                    <li class="nav-item ">
                        <a class="hoverable" href="front.php">front</a>
                      </li>
                    <li class="nav-item">
                      <a class="hoverable" href="index.html">Home </a>
                    </li>
                    <li class="nav-item">
                      <a class="hoverable" href="about.html"> About</a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="hoverable" href="donatur.php"> Donasi </a>
                    </li>
                    <li class="nav-item">
                      <a class="hoverable" href="hasil_kegiatan.php">TABLE DATA</a>
                    </li>
                    <li class="nav-item">
                      <a class="hoverable" href="event.html">Event</a>
                    </li>              
                  </ul>
                </div>
               
                <head>
             
                  <style>
                      body {
                          font-family: Arial, sans-serif;
                          margin: 0;
                          padding: 0;
                      }
                      #navbar {
                          background-color: transparent;
                          overflow: hidden;
                      }
                      #navbar img {
                          height: 40px; /* Sesuaikan dengan tinggi logo yang diinginkan */
                          padding: 10px;
                      }  
                  </style>
              </head>    
              <body>                                     
              </nav>
              
              <div class="container">
                <div   class="object"  id="navbar">
                    <img src="image/eco.png" alt="Logo">
                    <style>   
                                      
                    </style>
                </div>
              </div>
              <div class="container">
                <div   class="log"  id="navbar">
                    
                      <li><a class="hoverable" href="profile.php" style="color: yellowgreen;" >profile</a></li>
                    <style>   
                      li{list-style: none;}                
                    </style>
                </div>
              </div>  
              <div class="container">
                <div   class="out"  id="navbar">                                         
                      <li><a class="hoverable1" href="logout.php" style="color: rgb(205, 50, 50);" >LOGOUT</a></li>
                    <style>   
                      li{list-style: none;}                
                    </style>
                </div>
                
              </div>     
    </div>                                                                                                    
              <hr >                        
            </div>           
          </div>
      </div>
      
      
  <div class="video-container">
    <video autoplay muted loop id="background-video">
      <source src="image/nature.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="content">
      <h2 class="custom-text">-Life On Earth-</h2>
      
      <h2 class="custom-text1">We take care of nature, nature takes care of us.</h2>
    </div>
  </div>
  
  
</body>
</html>
