<?php 
session_start();
if(isset($_POST['store']))
{
    include_once('conn.php');
    $pname = $_POST['pname'];
    $cname = $_POST['cname'];
    $mcsno = $_POST['mcsno'];
    $dat = date('m/d/Y h:i:s a', time());
    if(empty($pname)||empty($cname)||empty($mcsno))
    {
        header("location:store.php?signin=empty");
        exit();
    }
    else
    {
        $sql = "insert into store(product_name,company,machine_serial_no,incoming_date) values('$pname','$cname','$mcsno','$dat')";
        $result = mysqli_query($conn,$sql);
        if(!$result)
        {
            header("location:store.php?signin=error");
            exit();
        }
        else
        {
            header("location:store.php?signin=success");
            exit();
        }
        
    }
    
}

?>

<html>
<head>
<title>Store</title>
    
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
<h2 style="display :inline;">store</h2>
    <span style="display:inline;float:right;"><button type="button" name="back"  class="bt" onclick="home()" >Back</button>
    </span>
</div>
<form method="post" action="store.php">
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
/*if(strpos($fullurl,"signin=duplicate")==true)
    {
    $errr = $_SESSION['$errr'];
    echo mysqli_error($conn);
        echo"<br><p><center style='color:red;'><b>Sorry!!!
        You are already registerd<b></center></p>";
        
    }*/
    if(strpos($fullurl,"signin=success")==true)
    {
       
        echo"<p><center style='color:Green;'><b>Product successfully stored
        <b></center></p>";
        
    }
    /*if(strpos($fullurl,"signin=passwordnotmatch")==true)
    {
        echo"<p><center style='color:red;'><b>Sorry!!! Password not match<b></center></p>";
        
    }*/
    
    
    ?>
<div class="input-group">
<label>Product Name</label>
<input type="text" name="pname"  placeholder="Enter Product Name">
</div>
<div class="input-group">
<label>Company Name</label>
<input type="text" name="cname" placeholder="Enter Company Name">
</div>
<div class="input-group">
<label>MC Serial No</label>
<input type="text" name="mcsno" placeholder="Enter machine serial no">
</div>

<div class="input-group">
    
    <center><button type="submit" class="btn" name="store">Store
    </button></center>
    </div>

</form>
</body>
</html>