<?php
header('Content-Type: text/html; charset=UTF-8');

$myUsername= "demo";
$myPassword ="demo";

  if(isset($_POST['login'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    if($myUsername==$username && $myPassword==$password){
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        header("location:home.php");
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
    }   
?>