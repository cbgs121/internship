<?php
    session_start();
?>


<html>
<head>
<title>AdminLogin</title>
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
    location.replace("http://localhost/ntpc/")
}
         </script>
</head>
<body>
<div class="header">
<h2 style="display :inline;">Admin_Login</h2>
    <span style="display:inline;float:right;"><button type="button" name="back"  class="bt" onclick="home()" >Home</button>
    </span>

</div>
<form method="post" action="validateadmin.php">
<?php
    $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(strpos($fullurl,"signin=empty")==true)
    {
        echo"<p><center style='color:red;'>Fill all the entry</center></p>";
        
    }
    if(strpos($fullurl,"signin=error")==true)
    {
        echo"<p><center style='color:red;'>Invalid username or password</center></p>";
        
    }
    
    
    ?>
<div class="input-group">
<label>Username</label>
<input type="text" name="username" placeholder="Enter Username">
</div>

<div class="input-group">
<label>Password</label>
<input type="password" name="password" placeholder="Enter Password">
</div>

<div class="input-group">
    <center>
    
    <button type="submit" class="btn" name="adminlogin">Login
    </button>
        </center>
    </div>
</form>
</body>
</html>
