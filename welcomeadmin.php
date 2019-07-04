<?php
session_start();
if(isset($_SESSION['username']))
{
    
echo'
<html>
     <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>index</title>
         <link type="text/css" rel="stylesheet" href="adminstyle.css">
         <link href="styleweladmin.css" type="text/css" rel="stylesheet">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
         <script src="javascript.js"></script>
 
     </head>
     <body>
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="#">About</a>
          <a href="verify.php">Verify</a>
          <a href="dropuser.php">DropUser</a>
            <a href="http://localhost/ntpc/issueitems.php">Issue_itme</a>
            <a href="http://localhost/ntpc/fromstore.php">Available product</a>
            <a href="http://localhost/ntpc/issueitems.php">Issue_itme</a>
            <a href="http://localhost/ntpc/store.php">Store</a>';?>
          <?php
            echo'
            <form style="border:none;background-color:blueviolet;" action="adminlogout.php" method="POST">
            <button  type="submit" name="logout" class="btn">Logout</button>
                </form>
                
            

        </div>
         <div>
          <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Activity</span>
         </div>


 
         <ul class="fly-in-text hidden">
           
             
            
             <li>W</li>
             <li>E</li>
             <li>L</li>
             <li>C</li>
             <li>O</li>
             <li>M</li>
             <li>E</li>
             <br>
            <center>';  ?>
    
        <?php
                  $v = $_SESSION["username"];
             for ($x = 0; $x <= strlen($_SESSION["username"]); $x++)
                    {
                 if ($x==0){
                    echo"<li>".ucfirst($v[$x])."</li>"; 
                 }else
                 {
                    echo"<li>".($v[$x])."</li>";
                 }
                 
                                  }
               
             echo'</center> 
             
             
         </ul>
         <br>
         
         
         
         
       
         
     </body>
 </html>';
    
}
else{
    header("Location:adminlogin.php");
}
        ?>      