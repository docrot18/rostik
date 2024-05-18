<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'CRM');
if (!$connect) {
    die('Error connect to DataBase');
}
$name = $_POST['name'];
$login = $_POST['login'];
$pass = $_POST['password'];
$email = $_POST['email'];
$number = $_POST['number'];
$isAdmin = $_POST['is_Admin'];
print_r($_POST);

$pass = crypt($pass,"aboba");
mysqli_query($connect, "INSERT INTO `users` (`login`, `password`, `name`, `email`, `number`, `is_Admin`) VALUES ('". $login . "', '". $pass ."', '". $name ."','". $email ."' ,'". $number ."', '". $isAdmin . "')");

$_SESSION['message'] = 'Аккаунт создан';
header('Location: signup.php');
?>
