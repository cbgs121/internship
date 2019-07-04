<?php include('conn.php') ?>

<html>
<head>
<title>Reset Password</title>
    <link type="text/css" href="adminstyle.css" rel="stylesheet">
    <script>
                 function home() {
    location.replace("http://localhost/ntpc/")
}
         </script>
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
</head>
<body>
    
<div class="header">
<h2 style="display :inline;">Reset_Password</h2>
    <span style="display:inline;float:right;"><button type="button" name="back"  class="bt" onclick="home()" >Home</button>
    </span>
</div>
<form method="post" action="reset.php">
     <?php
    $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(strpos($fullurl,"signin=success")==true)
    {
        echo"<p><center style='color:green;'>Change made Successfully<br></center></p>";
        
    }
if(strpos($fullurl,"signin=error")==true)
    {
        echo"<p><center style='color:red;'>Sorry!!! for truble<br></center></p>";
        
    }
if(strpos($fullurl,"signin=empty")==true)
    {
        echo"<p><center style='color:red;'>Fill all entry<br></center></p>";
        
    }if(strpos($fullurl,"signin=notmatch")==true)
    {
        echo"<p><center style='color:red;'>Password not match<br></center></p>";
        
    }if(strpos($fullurl,"signin=notregist.")==true)
    {
        echo"<p><center style='color:red;'>Sorry!!! you are not registerd<br></center></p>";
        
    }
   
?>
    <div class="input-group">
<label>Empid</label>
<input type="text" name="empid" placeholder="Enter Employee Id">
</div>

<div class="input-group">
<label>Password</label>
<input type="password" name="password_1" placeholder="Set Password">
</div>
<div class="input-group">
<label>Confirm password</label>
<input type="password" name="password_2" placeholder="Confirm Password">
</div>
<div class="input-group">
    <center><button type="submit" class="btn" name="reset">Reset
        </button></center>
    </div>

</form>
</body>
</html>