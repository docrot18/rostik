<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'CRM');
if (!$connect) {
    die('Error connect to DataBase');
}
$name = explode(" ", $_POST['client']);


mysqli_query($connect, "DELETE FROM `clients` WHERE `name` = '" . $name[1] . "' AND `surname` = '" . $name[0] . "'");

$_SESSION['message'] = 'Клиент Удален!';
header('Location: index.php');
?>
