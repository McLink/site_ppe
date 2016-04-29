<?php

$titre="Admin";

// Hachage du mot de passe
$password=$_POST['password'];
$login=$_POST['login'];

if($login!="admin" || $password!="admin75000")
{
    echo "Login ou mot de passe incorrect";
}
else 
{
    session_start();
    $_SESSION['login'] = $login;
    echo 'Bienvenue ' .$login;
    header('refresh:3;EspaceAdmin.php');
    exit();
}
?>