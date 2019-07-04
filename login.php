<?php 
    include_once('conn.php') ;
    session_start();
?>

<html>
<head>
<title>Login </title>
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
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
th,td {
    text-align: center;
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
<h2 style="display :inline;">Login</h2>
    <span style="display:inline;float:right;"><button type="button" name="logout"  class="bt" onclick="home()" >Home</button>
    </span>
</div>
    
    <?php
    $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
       
        if(isset($_SESSION['username']))
        {   
            
            echo ' <form action="logout.php" method="POST">';
    if(strpos($fullurl,"signin=success")==true)
    {
                echo "<center>".$_SESSION['username']."</center>";

        echo"<p><center style='color:green;'>Successfully login<br></center></p>";
    }
    if(strpos($fullurl,"signin=empt")==true)
    {
            echo"<p><center style='color:green;'>Successfully loged in<br></center></p>";        
    }
            
             
            
    
            echo'<br>

           <center> <button type="submit" name="logout" class="btn">Logout</button></center>
    
    
            </form>';
            echo"<br><center>List of product assigned to you</center><br>";
            
           
        $sql = "select * from assigned_itmes where empid=". $_SESSION['empid']."";
    $res = mysqli_query($conn,$sql);
    if(!$res)
    {
        echo("<center style='color:red;'>No product assigned</center>".mysqli_error($res));
    }?>
    <table style="width:100%">
          <tr>
            <th>Making_partner</th>
            <th>Product_name</th> 
            <th>Machine_serial_no</th>
            <th>Empid</th> 
            <th>Issueddate</th>
            <th>Department</th>
          </tr>
    
    
    
    
    <tr>
    <?php
    while ($row = mysqli_fetch_assoc($res))
    {
				echo '<tr>
					<td>' .$row["making_partner"] . '</td>
					<td>' .$row["product_name"] . '</td>
                    <td>' .$row["machine_serial_no"] . '</td>
					<td>' .$row["empid"] . '</td>
                    <td>' .$row["issueddate"] . '</td>
					<td>' .$row["department"] . '</td>
				</tr>';
    }
    echo"<br>";
    echo"</tr></table>";          
            
        }
        else
        {
            echo'   
<form method="post" action="validateuser.php">';
if(strpos($fullurl,"signin=empty")==true)
    {
        echo"<p><center style='color:red;'>Fill all the entry</center></p>";
        
    }

    if(strpos($fullurl,"signin=error")==true)
    {
        echo"<p><center style='color:red;'>Invalid username or password</center></p>";
        
    }
        if(strpos($fullurl,"signin=verify")==true)
    {
        echo"<p><center style='color:red;'>Sorry!!! You are not verified till now</center></p>";
        
    }
    
    
    echo'
<div class="input-group">
<label>Empid</label>
<input type="text" name="empid" placeholder="Enter Employee Id">
</div>

<div class="input-group">
<label>Password</label>
<input type="password" name="password" placeholder="Enter Password">
</div>

<div class="input-group">
    
    <button type="submit" class="btn" name="login">Login
    </button>
    
    
    <button type="submit" class="btn" name="forget">Forget Password
    </button>
    </div>
<p>
Not yet a member? <a href="newuser.php">Sign Up</a>
</p>
</form>';
        }
        
        ?>

   
</body>
</html>