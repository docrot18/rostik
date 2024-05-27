<?
require_once $_SERVER["DOCUMENT_ROOT"]."/header.php";
$connect = mysqli_connect('localhost', 'root', '', 'CRM');
if (!$connect) {
    die('Error connect to DataBase');
}
$arResult = mysqli_query($connect, "SELECT * FROM clients;");
?>
    <body>
    <h1>Удалить Клиента</h1>
    <form class="form-reg" action="deleteClient.php" method="post">
        <span>Выберите клиента для удаления</span>
        <select name="client">
            <?while($row = mysqli_fetch_assoc($arResult)){?>
                <option><?=$row["surname"]?> <?=$row["name"]?></option>
            <?}?>
        </select>
        <button type="submit">Удалить</button>
    </form>
    </body>
    </html>
<?php
