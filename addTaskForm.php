<?
require_once $_SERVER["DOCUMENT_ROOT"]."/header.php";
$connect = mysqli_connect('localhost', 'root', '', 'CRM');
if (!$connect) {
    die('Error connect to DataBase');
}
$arResult = mysqli_query($connect, "SELECT * FROM clients;");
?>
<body>
<h1>Добавить задачу</h1>
<form class="form-reg" action="addTask.php" method="post">
    <span>Название</span>
    <input name="title" type="text" placeholder="Название">
    <span>Описание</span>
    <input id="description" name="description" type="text" placeholder="Комментарий">
    <span>Дедлайн</span>
    <input name="date" type="date" placeholder="Сделать до">
    <span>Исполнитель</span>
    <input name="worker" type="text" placeholder="Ответственный">
    <span>Клиент</span>
    <select name="client">
        <option>Нет клиента</option>
        <?while($row = mysqli_fetch_assoc($arResult)){?>
            <option><?=$row["surname"]?> <?=$row["name"]?></option>
        <?}?>
    </select>
    <button type="submit">Удалить</button>
</form>
</body>
</html>
