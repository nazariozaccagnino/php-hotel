<?php
session_start();
include __DIR__ . "/../Models/user.php";
$loginfailed = '<div class="mt-4 p-1 bg-danger rounded-1">E-mail o password errate, riprovare</div>';

if(!empty($_POST['email']) && !empty($_POST['password'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $logged = array_filter($users, function ($user) use ($email, $pass){
        return $user['email'] == $email && $user['password'] == $pass;
    });
    // var_dump($logged);
    if(count($logged) > 0){
        $_SESSION['logged'] = true;
        header ('Location: index.php');
    } else{
        echo $loginfailed;
    }
};