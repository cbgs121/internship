<?php 
    if(isset($_POST['verify'])){
    include_once('conn.php');
    $empid = mysqli_real_escape_string($conn,$_POST['empid']);
    
    if(empty($empid))
    {
        header("Location:verify.php?signin=empty");
        exit();
    }
    else
    {
        $re = mysqli_query($conn,'select * from registration where empid="'.$empid.'"');
        $ro = mysqli_num_rows($re);
        if($ro == 1){
             $result = mysqli_query($conn,'update registration set verify = 1 where empid ="'.$empid.'"');
        
    if(!$result)
    {
       header("Location:verify.php?signin=error");
        exit();
       
    }   
    else
    {     /*  $re = mysqli_query($conn,'select * from issued_items where empid="'.$empid.'"');
            $ro = mysqli_num_rows($re);
            if($ro<1)
            {
            $ree = mysqli_query($conn,'insert into issued_items (empname,empid,phoneno,email) select name,empid,phoneno,email from registration where empid="'.$empid.'"');
            }*/
            header("Location:verify.php?signin=success");
            exit();
            
    }
        }
    else
    {       
            
            
            header("Location:verify.php?signin=notexist");
            exit();
    }
}
    }

?>

<html>
<head>
<title>User Verification</title>
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
<h2 style="display :inline;">Verify</h2>
  <span style="display:inline;float:right;"><button type="button" name="logout"  class="bt" onclick="home()" >Back</button>
    </span>  
</div>
    <form method="POST" action="verify.php">
    
     <?php
    $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
       
         
       
    if(strpos($fullurl,"signin=success")==true)
    {
        echo"<p><center style='color:green;'>Successfully verified<br></center></p>";
        
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
        <button type="submit" class="btn" name="verify">Verify</button>
    </center>
    </div>
    </form>
</body>
</html>