<?php
session_start();
include("conn.php");
if(isset($_POST['reset']))
   {
      
       $empid = mysqli_real_escape_string($conn,$_POST['empid']);
      
       $pass = mysqli_real_escape_string($conn,$_POST['password_1']);
    
       $repass = mysqli_real_escape_string($conn,$_POST['password_2']);
    
           
    if(empty($empid)||empty($pass)||empty($repass))
    {
         header("Location:forgetpassword.php?signin=empty");
         exit();
    }
    else{
    $sq = 'select * from registration where empid = "'.$empid.'"';
        $result = mysqli_query($conn,$sq);
        $ro = mysqli_num_rows($result);
    if($ro == 1)
    {

           if($pass == $repass)
           {
               $sql = 'update registration set password ="'.$pass.'" where empid= "'.$empid.'"';
               $res = mysqli_query($conn,$sql);
               if (!res)
               {
                   header("Location:forgetpassword.php?signin=error");
                   exit(); 
               }
               else
               {
                   header("Location:forgetpassword.php?signin=success");
                   exit();
               }
           }
            else
              {
                    header("Location:forgetpassword.php?signin=notmatch");
                    exit();
              }
       
        }
        else
        {
            header("Location:forgetpassword.php?signin=notregist.");
        }
        }
}
#header("refresh:2; url=index.php");
   

?>