<html>
<head>
    <title>Item in store</title>
    <style>
    table, th, td 
        {
            border: 1px solid black;
            border-collapse: collapse;
        }
th, td
        {
            padding: 5px;
        }
th,td
        {
    text-align: center;
        }
        h1{
            font-size: 8vw;
            margin: none;
            padding: none;
        }
    
    
    
    </style>
    </head>
    <body>
    <h1><center>Product in store</center></h1>
    
    
    </body>
</html>
<?php
session_start();
include_once("conn.php");
$sql = "select * from store";
$result = mysqli_query($conn,$sql);
echo'
<table style="width:100%">
          <tr>
            <th>Product_name</th> 
            <th>Company</th>
            <th>Machine_serial_no</th>
            
            <th>Incoming date</th>
          </tr>
    
    
<tr>';
    
    while ($row = mysqli_fetch_assoc($result))
    {
				echo '<tr>
					<td>' .$row["product_name"] . '</td>
					<td>' .$row["company"] . '</td>
                    <td>' .$row["machine_serial_no"] . '</td>
					<td>' .$row["incoming_date"] . '</td>
				</tr>';
    }
    echo"<br>";
    echo"</tr></table>";          
            


















?>