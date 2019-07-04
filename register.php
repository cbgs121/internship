<?php
include("conn.php");
session_start();
if(isset($_POST['register_btn']))
   {
       $name = $_POST['name'];

        $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    
       $pass = $_POST['password_1'];
    
       $repass = $_POST['password_2'];
           
           if(empty($name)||empty($email)||empty($pass)||empty($repass)||empty($phoneno))
           {
               header("Location:newuser.php?signin=empty");
        exit();
           }
       if($pass == $repass)
       {
           $sql = "insert into registration (name,email,phoneno,password) values('$name','$email','$phoneno','$pass')";
           $res = mysqli_query($conn,$sql);
           if (!$res)
           {
               $err = mysqli_error($conn);
               
               if($err){
                    header("Location:newuser.php?signin=duplicate");
        exit();
               }
               else
               {
              header("Location:newuser.php?signin=error");
        exit();
               }
       
           }
           else{
              
               $s = "select * from registration where name='$name' and phoneno = '$phoneno' ";
               $res  = mysqli_query($conn,$s);
               $row = mysqli_fetch_assoc($res);
               $_SESSION['empid'] = $row['empid'];
               header('Location:newuser.php?signin=success');
           }
       }
    else{
        header('Location:newuser.php?signin=passwordnotmatch');
        exit();
    }
   

   
}
?>