<?php
session_start();
if(isset($_POST['login'])){
    include_once('conn.php');
    $username = $_POST['empid'];
    $password = $_POST['password'];
    if(empty($username)||empty($password)){
        header("Location:login.php?signin=empty");
        exit();
    }else{
    $result = mysqli_query($conn,'select * from registration where empid="'.$username.'" and password="'.$password.'"');
        $row = mysqli_fetch_assoc($result);
     
    if(!$row){
       header("Location:login.php?signin=error");
        exit();
       
    }   
        
    elseif($row)
    {
        if($row['verify']!=1)
        {
            header('Location:login.php?signin=verify');
            exit();
        }
        elseif($row['verify'] == 1)
        {
         $_SESSION['username'] = $username;
            $_SESSION['name'] = $row['name'];
        
            $res= mysqli_query($conn,'select * from assigned_itmes where empid="'.$username.'"');
        $ro = mysqli_fetch_assoc($res);
           
            
            if($ro >=1)
            {
                header('Location:login.php?signin=success');
                $_SESSION['empid'] = $ro['empid'];
            }
            else
            {
                header('Location:login.php?signin=empt');
                
            }
        }
    }
    
    
    }
}
elseif(isset($_POST['forget']))
{
    include_once('conn.php');
    header('Location:forgetpassword.php');
}
?>