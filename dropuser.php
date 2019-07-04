<?php 
    if(isset($_POST['drop'])){
    include_once('conn.php');
        session_start();
    $empid = mysqli_real_escape_string($conn,$_POST['empid']);
    
    if(empty($empid))
    {
        header("Location:dropuser.php?signin=empty");
        exit();
    }
    else
    {
        $re = mysqli_query($conn,'select * from registration where empid="'.$empid.'"');
        $ro = mysqli_num_rows($re);
        if($ro == 1)
        {
             $result = mysqli_query($conn,'delete from registration where empid ="'.$empid.'"');
            $ress = mysqli_query($conn,'delete from issued_items where empid="'.$empid.'"');
        
    if(!$result||!$ress)
            {
               header("Location:dropuser.php?signin=error");
                exit();
            }   
    else
            {       $re = mysqli_query($conn,'select * from issued_items where empid="'.$empid.'"');
                    $ro = mysqli_num_rows($re);
                    if($ro<1)
                    {
                    header("Location:dropuser.php?signin=success");
                    exit();
                    }
            }
        }
    else
    {        
            header("Location:dropuser.php?signin=notexist");
            exit();
    }
}
    }

?>

<html>
<head>
<title>Drop User</title>
    <link type="text/css" href="adminstyle.css" rel="stylesheet">
    <style>
        .bt{
padding: 10px;
font-size: 15px;
color: white;
background: #5F9EA0;
border: none;
            margin: 10px;
border-radius: 5px;
}

    
    
    </style>
    <script>
                 function home() {
    location.replace("http://localhost/ntpc/welcomeadmin.php");
}
         </script>
   
</head>
<body>
    
<div class="header">
<h2 style="display :inline;">Drop User</h2>
  <span style="display:inline;float:right;"><button type="button" name="logout"  class="bt" onclick="home()" >Back</button>
    </span>  
</div>
    <form method="POST" action="dropuser.php">
    
     <?php
    $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
       
         
       
    if(strpos($fullurl,"signin=success")==true)
    {
        echo"<p><center style='color:green;'>Successfully droped<br></center></p>";
    }
  if(strpos($fullurl,"signin=empty")==true)
    {
        echo"<p><center style='color:red;'>Enter Employee id<br></center></p>"; 
    }
  if(strpos($fullurl,"signin=error")==true)
    {
        echo"<p><center style='color:red;'>Something getting wrong!!! Try again<br></center></p>"; 
    }  
  if(strpos($fullurl,"signin=notexist")==true)
    {
        echo"<p><center style='color:red;'>You have't signuped<br></center></p>"; 
    }
   ?>   
<div class="input-group">
<label>Empid</label>
<input type="text" name="empid" placeholder="Enter Employee Id">
</div>
<div class="input-group">
    
    <center>
        <button type="submit" class="btn" name="drop">Drop</button>
    </center>
    </div>
    </form>
</body>
</html>