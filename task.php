<?
session_start();
require_once $_SERVER["DOCUMENT_ROOT"]."/header.php";

$connect = mysqli_connect('localhost', 'root', '', 'CRM');
if (!$connect) {
    die('Error connect to DataBase');
}
$arResult = mysqli_query($connect, "SELECT * FROM tasks;");
?>
<h1>Заявки</h1>
<div class="container">
    <div class="task-content">
        <?while($row = mysqli_fetch_assoc($arResult)){?>
            <div class="task-card">
                <div class="task-card-content">
                    <div class="task-card__title"><?=$row["title"]?></div>
                    <div class="task-card__description">Комментарий: <br><?=$row["description"]?></div>
                    <div class="task-card-dop">
                        <div class="task-card__date">Сделать до: <?=$row["date"]?></div>
                        <div class="task-card__worker">Ответственный: <?=$row["worker"]?></div>
                    </div>
                </div>
            </div>
        <?}?>
        </div>
        <a class="btn right" href="addTaskForm.php">Добавить заявку</a>
        <a class="btn right" href="deleteTaskForm.php">Удалить заявку</a>

    </div>



