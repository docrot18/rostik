<?
session_start();
require_once $_SERVER["DOCUMENT_ROOT"]."/header.php";
?>
<body>
<h1>Войти</h1>
<form class="form-reg" action="log.php" method="post">
    <p><?=$_SESSION['message']?></p>
    <span>Логин</span>
    <input name="login" type="text" placeholder="Логин">
    <span>Пароль</span>
    <input name="password" type="password" placeholder="Пароль">
    <button type="submit">Войти</button>
    <a class="singup" href="signup.php">Зарегистрироваться нового пользователя?</a>
</form>
</body>
</html>