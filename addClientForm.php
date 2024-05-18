<?
require_once $_SERVER["DOCUMENT_ROOT"]."/header.php";
$connect = mysqli_connect('localhost', 'root', '', 'CRM');
if (!$connect) {
    die('Error connect to DataBase');
}
?>
<body>
<h1>Добавить Клиента</h1>
<form class="form-reg" action="addClient.php" method="post">
    <span>Фамилия</span>
    <input name="surname" type="text" placeholder="Фамилия">
    <span>Имя</span>
    <input id="name" name="name" type="text" placeholder="Имя">
    <span>Отчество</span>
    <input name="fathersname" type="text" placeholder="Отчество">
    <span>Номер телефона</span>
    <input name="phone" type="text" placeholder="Номер телефона">
    <span>Электронная почта</span>
    <input name="email" type="text" placeholder="Эл. почта">
    <button type="submit">Добавить</button>
</form>
</body>
</html>
