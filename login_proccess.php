<?php 
include('connect_to_database.php');
session_start();
{
    $user=mysql_real_escape_string($_POST['username']);
    $pass=mysql_real_escape_string($_POST['password']);
    $fetch=mysql_query("SELECT id FROM LogIns WHERE 
                         Username ='$user' and Password='$pass'");
    $count=mysql_num_rows($fetch);
    if($count!="")
    {
    session_register("sessionusername");
    $_SESSION['login_username']=$user;
    header("Location:profile.php"); 
    }
    else
    {
       header('Location:login.php');
    }

}
?>