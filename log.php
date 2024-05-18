<?
session_start();

$connect = mysqli_connect('localhost', 'root', '', 'CRM');
 if (!$connect) {
 die('Error connect to DataBase');
 }
$login = $_POST['login'];
$pass = $_POST['password'];
$pass = crypt($pass,"aboba");
$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '". $login ."' AND `password` = '". $pass ."'");
if(mysqli_num_rows($check_user)>0){

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user']=[
		"name" => $user['name'],
		"login" => $user['login'],
        "is_Admin" => $user['is_Admin']
	];


    header('Location: index.php');
}
else{

    $_SESSION['message'] = 'Неверный логин или пароль';
    header('Location: login.php');
}

?>