<?php
if(isset($_POST['check']))
{
    include_once('conn.php');
    session_start();
    $empid = $_POST['empid'];
    if(empty($empid))
    {
        header('location:prassigntouser.php?signin=empty');
        exit();
        
    }
    else
    {
       $sql = "SELECT * FROM assigned_itmes where empid='$empid'";
        $result = mysqli_query($conn,$sql);
        if(!$result)
        {
            header("location:prassigntouser.php?sigin=error");
            exit();
        }
        else
        {
            echo'<html><body><table style="width:100%">
          <tr>
            <th>Making_partner</th>
            <th>Product_name</th> 
            <th>Machine_serial_no</th>
            <th>Empid</th> 
            <th>Issueddate</th>
            <th>Department</th>
          </tr>
        ';
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
    }
}







?>
<html>
<head>
<title>Checkuserassignproduct</title>
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
<h2 style="display :inline;">Product assign to user</h2>
  <span style="display:inline;float:right;"><button type="button" name="logout"  class="bt" onclick="home()" >Back</button>
    </span>  
</div>
    <form method="POST" action="prassigntouser.php">
    <div class="input-group">
<label>Empid</label>
<input type="text" name="empid" placeholder="Enter Employee Id">
</div>
<div class="input-group">
    
    <center>
        <button type="submit" class="btn" name="check">Submit</button>
    </center>
    </div>
    </form>
</body>
</html>