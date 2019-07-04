<?php include('conn.php'); 
session_start();

?>

<html>
<head>
<title>RegistrationL</title>
    
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
<h2 style="display :inline;">Register</h2>
    <span style="display:inline;float:right;"><button type="button" name="back"  class="bt" onclick="home()" >Home</button>
    </span>
</div>
<form method="post" action="register.php">
    <?php
    $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(strpos($fullurl,"signin=empty")==true)
    {
        echo"<p><center style='color:red;'><b>Fill all the entry<b></center></p>";
        
    }
    if(strpos($fullurl,"signin=error")==true)
    {
        echo"<p><center style='color:red;'><b>Somthig went wrong Try again<b></center></p>";
        
    }
if(strpos($fullurl,"signin=duplicate")==true)
    {
    $errr = $_SESSION['$errr'];
    echo mysqli_error($conn);
        echo"<br><p><center style='color:red;'><b>Sorry!!!
        You are already registerd<b></center></p>";
        
    }
    if(strpos($fullurl,"signin=success")==true)
    {
       
        echo"<p><center style='color:Green;'><b>You have completed registration successfully
        <br>Your employee ID is '".$_SESSION['empid']."'<b></center></p>";
        
    }
    if(strpos($fullurl,"signin=passwordnotmatch")==true)
    {
        echo"<p><center style='color:red;'><b>Sorry!!! Password not match<b></center></p>";
        
    }
    
    
    ?>
<div class="input-group">
<label>Name</label>
<input type="text" name="name"  placeholder="Enter Name">
</div>
<div class="input-group">
<label>Email</label>
<input type="email" name="email" placeholder="Enter your email">
</div>
<div class="input-group">
<label>Phoneno</label>
<input type="tel" name="phoneno" placeholder="Enter your Phone no">
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
    
    <button type="submit" class="btn" name="register_btn">Register
    </button>
    </div>
<p>
Already a member? <a href="login.php">Sign in</a>
</p>
</form>
</body>
</html>