<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'CRM');
if (!$connect) {
    die('Error connect to DataBase');
}
$surname = $_POST['surname'];
$name = $_POST['name'];
$fathersname = $_POST['fathersname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
mysqli_query($connect, "INSERT INTO `clients` (`surname`, `name`, `fathersname`,  `phone`, `email`, `targets`) VALUES ('". $surname ."', '". $name ."', '". $fathersname ."','". $phone ."', '". $email ."', '')");

$_SESSION['message'] = 'Клиент добавлен!';
header('Location: index.php');
?>
