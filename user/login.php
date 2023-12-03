<?php
require_once "../dashboard/shared/instances.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($user->login($email, $password)){
        setcookie("isLogged", true,0, "/");
        header("location: ../dashboard/");
    }else{
        header("location: ../login.php");
    }

}