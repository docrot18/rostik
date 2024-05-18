<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'CRM');
if (!$connect) {
    die('Error connect to DataBase');
}
$title = $_POST['title'];
$description = $_POST['description'];
$date = $_POST['date'];
$worker = $_POST['worker'];
mysqli_query($connect, "INSERT INTO `tasks` (`title`, `description`, `date`,  `worker`) VALUES ('". $title ."', '". $description ."', '". $date ."','". $worker ."')");

$_SESSION['message'] = 'Заявка добавлена!';
header('Location: task.php');
?>
