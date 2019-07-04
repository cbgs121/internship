<?php
        $dbuser="cbgs";
        $pass = "Chaudhary1@";
        $host = "localhost";
        $dbname = "ntpc";
        $conn = mysqli_connect($host,$dbuser,$pass,$dbname);
    if (mysqli_connect_error())
    {
        die("Connection failed!!!".mysqli_connect_error());
    }       
    
?>
