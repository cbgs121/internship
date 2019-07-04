<?php

session_start();
if(isset($_POST['issue']))
   {
        include_once("conn.php");
       $product_name = $_POST['pname'];
       $empid = $_POST['empid'];
        $company = $_POST['company'];
    $mcserialno = $_POST['mcserialno'];
    
       $dat = date("Y/m/d");
    
       $department = $_POST['department'];
           
    if(empty($product_name)||empty($empid)||empty($company)||empty($mcserialno)||empty($dat)||empty($department))
           {
               header("Location:issueitems.php?signin=empty");
               exit();
           }
    else
    {   
        $q = "SELECT * FROM store where machine_serial_no='$mcserialno'";
        $r = mysqli_query($conn,$q);
        $row = mysqli_fetch_assoc($r);
        if($row>0)
        {
            $d = "delete from store where machine_serial_no = '$mcserialno' ";
            $R = mysqli_query($conn,$d);
        }
        $sql= "insert into assigned_itmes(making_partner,product_name,machine_serial_no,empid,issueddate,department) values('$company','$product_name','$mcserialno','$empid','$dat','$department')";
        $result = mysqli_query($conn,$sql);
        if(!$result)
        {
            header("Location:issueitems.php?signin=qfail");
            exit();
        }
        else
        {
            header("location:issueitems.php?signin=success");
            exit();
        }
    }
  
}

?>

<html>
<head>
<title>product distribution</title>
    
    <link type="text/css" href="adminstyle.css" rel="stylesheet">
    <script>
                 function home() {
    location.replace("http://localhost/ntpc/welcomeadmin.php")
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
<h2 style="display :inline;">Issuing product</h2>
    <span style="display:inline;float:right;"><button type="button" name="back"  class="bt" onclick="home()" >Back</button>
    </span>
</div>
<form method="post" action="issueitems.php">
    <?php
    $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(strpos($fullurl,"signin=empty")==true)
    {
        echo"<p><center style='color:red;'>Fill all the entry</center></p>";
        
    }
    if(strpos($fullurl,"signin=qfail")==true)
    {
        echo"<p><center style='color:red;'>Somthig went wrong Try again</center></p>";
        
    }
if(strpos($fullurl,"signin=duplicate")==true)
    {
    $errr = $_SESSION['$errr'];
    echo mysqli_error($conn);
        echo"<br><p><center style='color:red;'>Sorry!!!
        You are already registerd</center></p>";
        
    }
    if(strpos($fullurl,"signin=success")==true)
    {
        echo " ".$_SESSION['name']." ";
        echo"<p><center style='color:Green;'>Product assigned successfully!!!</center></p>";
        
    }
    
    ?>

    <div class="input-group">
<label>Empid</label>
<input type="text" name="empid" placeholder="Enter Employee Id">
</div>
    <div class="input-group">
<label>Product Name</label>
<input type="text" name="pname"  placeholder="Product name">
</div>
<div class="input-group">
<label>Company</label>
<input type="text" name="company" placeholder="Enter company name">
</div>
<div class="input-group">
<label>MC_Serial No</label>
<input type="text" name="mcserialno" placeholder="Enter MC Serial no">
</div><div class="input-group">
<label>Department</label>
<select name="department">
  <option>It Department</option>
  <option>Switch Yard</option>
  <option>Service Building</option>
  <option>CHP</option>
 
  
</select></div>

<div class="input-group">
        <center>
            <button type="submit" class="btn" name="issue">Issue</button>
        </center>
</div>

</form>
</body>
</html>