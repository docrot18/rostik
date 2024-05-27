<?
require_once $_SERVER["DOCUMENT_ROOT"]."/header.php";
$connect = mysqli_connect('localhost', 'root', '', 'CRM');
if (!$connect) {
    die('Error connect to DataBase');
}
$arResult = mysqli_query($connect, "SELECT * FROM tasks;");
?>
    <body>
    <h1>Удалить Заявку</h1>
    <form class="form-reg" action="deleteTask.php" method="post">
        <span>Выберите Заявку для удаления</span>
        <select name="title">
            <?while($row = mysqli_fetch_assoc($arResult)){?>
                <option><?=$row["title"]?></option>
            <?}?>
        </select>
        <button type="submit">Удалить</button>
    </form>
    </body>
    </html>
<?php
