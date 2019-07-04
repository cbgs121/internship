<html>
     <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>index</title>
         <style type="text/css">
             
             *{
                 margin: 0;
                 padding: 0;
             }
             body {
                 
                 background-image:url("back.jpg"),url('back2.jpg');
                 color: white;
  		 background-size: cover;
                 font-family: "Lato", sans-serif;
             }
             ul li{
                 
           
            
            text-align:center;
       
         text-shadow:0 0 20px #ff005b,
                    0 0 30px #f5405b,
                    0 0 40px #ff005b,
                    0 0 50px #ffffff,
                    0 0 60px #ff005b;
             }
             .fly-in-text {
                 list-style: none;
                 position: absolute;
                 left: 50%;
                 top: 30%;
                 transform: translateX(-50%) translateY(-50%);
             }
             .fly-in-text li {
                 display: inline-block;
                margin-right: 30px;
                 font-family: Open Sans, Arial;
                 font-weight: 300;
                 font-size: 4em;
                 color: #fff;
                 opacity: 1;
                 transition: all 2s ease;
             }
             .fly-in-text li:last-child {
                 margin-right: 0;
             }
             .fly-in-text.hidden li {
                 opacity: 0;
             }
             .fly-in-text.hidden li:nth-child(1) { transform: translateX(-200px) translateY(-200px); }
             .fly-in-text.hidden li:nth-child(2) { transform: translateX(220px) translateY(200px); }
             .fly-in-text.hidden li:nth-child(3) { transform: translateX(-300px) translateY(-120px); }
             .fly-in-text.hidden li:nth-child(4) { transform: translateX(210px) translateY(120px); }
            .fly-in-text.hidden li:nth-child(5) { transform: translateX(-200px) translateY(-200px); }
             .fly-in-text.hidden li:nth-child(9) { transform: translateX(220px) translateY(200px); }
             .fly-in-text.hidden li:nth-child(7) { transform: translateX(-300px) translateY(-120px); }
             .fly-in-text.hidden li:nth-child(6) { transform: translateX(210px) translateY(120px); }
            .fly-in-text.hidden li:nth-child(10) { transform: translateX(-200px) translateY(-200px); }
             .fly-in-text.hidden li:nth-child(12) { transform: translateX(220px) translateY(200px); }
             .fly-in-text.hidden li:nth-child(13) { transform: translateX(-300px) translateY(-120px); }
             .fly-in-text.hidden li:nth-child(1) { transform: translateX(210px) translateY(120px); }
             .btn {
                padding: 20px;
                font-size: 30px;
                color: white;
                background-color:blueviolet;
                border: none;
                border-radius: 5px;
                 margin-top: 30%;
                 margin-left: 27%;
                }
             .btn:hover{
                 background-color:mediumvioletred;
                 
             }
             .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
             
         </style>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
         <script type="text/javascript">
             
             $(function() {
                 
                 setTimeout(function() {
                     $('.fly-in-text').removeClass('hidden');
                 }, 500);
                 
             })();
             function myFunction() {
    location.replace("http://localhost/ntpc/adminlogin.php")
}
             function userFunction() {
    location.replace("http://localhost/ntpc/login.php")
}
             function NuserFunction() {
    location.replace("http://localhost/ntpc/newuser.php")
}
             function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
var i = 0;
var txt = "Lorem ipsum dummy text blabla.Resize the browser window to see how the text size scales.Use the  unit when sizing the text. 10vw will set the size to 10% of the viewport widthViewport is the browser window size. 1vw = 1% of viewport width. If the viewport is 50cm wide, 1vw is 0.5cm.";
var speed = 20;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
         </script>
 
     </head>
     <body>
         
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="acknowledgement.php">Acknowledgement</a>
  <a href="adminlogin.php">Admin</a>
  <a href="login.php">User</a>
  <a href="newuser.php">NewUser</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
         
 
         <ul class="fly-in-text hidden">
           
             
            
             <li>N</li>
             <li>T</li>
             <li>P</li>
             <li>C</li>
             <br>
             <li>U</li>
             <li>N</li>
             <li>C</li>
             <li>H</li>
             <li>A</li>
             <li>H</li>
             <li>A</li>
             <li>R</li>
             
             
         </ul>
         <br>
         <button type="button" name="admin" value="Admin" class="btn" onclick="myFunction()">Admin</button>
         <button style ="margin-top: 30%;margin-left:10%;"  type="button" name="user" value="User" class="btn" onclick="userFunction()">User</button>
         <button style ="margin-top: 30%;margin-left:10%;"  type="button" name="newuser" value="NewUser" class="btn" onclick="NuserFunction()">New User</button>
         
         
         
         
         
     </body>
 </html>
