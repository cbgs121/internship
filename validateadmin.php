<?php
session_start();
if(isset($_POST['adminlogin'])){
    include_once('conn.php');
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    if(empty($username)||empty($password)){
        header("Location:adminlogin.php?signin=empty");
        exit();
    }else{
    $result = mysqli_query($conn,'select * from admin where username="'.$username.'" and password="'.$password.'"');
        $row = mysqli_num_rows($result);
    if($row!=1){
       header("Location:adminlogin.php?signin=error");
        exit();
       
    }   
        
    else
    {
         $_SESSION['username'] = $username;
        if(isset($_SESSION['username']))
        {
            header('Location:welcomeadmin.php');
        }
        
        
    }
    
    
    }
}
?>