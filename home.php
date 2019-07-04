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
                 background-color: #000;
                 color: white;
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
             
         </style>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
         <script type="text/javascript">
             
             $(function() {
                 
                 setTimeout(function() {
                     $('.fly-in-text').removeClass('hidden');
                 }, 500);
                 
             })();
             function adFunction() {
    location.replace("http://localhost/ntpc/adminlogin.php")
}
             function userFunction() {
    location.replace("http://localhost/ntpc/adminlogin.php")
}   
             function NuserFunction() {
    location.replace("http://localhost/ntpc/index.php")
}
         </script>
 
     </head>
     <body>
 
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
         <button style ="margin-top: 30%;margin-left:10%;"  type="button" name="user" value="User" class="btn">User</button>
         <button style ="margin-top: 30%;margin-left:10%;"  type="button" name="newuser" value="NewUser" class="btn">New User</button>
         
         
         
         
         
     </body>
 </html>