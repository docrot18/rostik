<?
session_start();
unset($_SESSION['user']);
unset($_SESSION['Is_Admin']);
header('Location: index.php');