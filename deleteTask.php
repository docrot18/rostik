<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'CRM');
if (!$connect) {
    die('Error connect to DataBase');
}
$name = $_POST['title'];


mysqli_query($connect, "DELETE FROM `tasks` WHERE `title` = '" . $name . "'");

$_SESSION['message'] = 'Задача Удалена!';
header('Location: task.php');
?>
