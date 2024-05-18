<?
session_start();
require_once $_SERVER["DOCUMENT_ROOT"]."/header.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/connect.php";
$connect = mysqli_connect('localhost', 'root', '', 'CRM');
if (!$connect) {
    die('Error connect to DataBase');
}
$arResult = mysqli_query($connect, "SELECT * FROM clients;");

?>
<body>
<h1>Клиенты</h1>
    <?if($_SESSION['user']['is_Admin'] === "on"):?>
    <div class="container">
        <?while($row = mysqli_fetch_assoc($arResult)){?>
            <div class="task-card">
                <div class="task-card-content">
                    <div class="task-card__title"><?=$row["surname"]?> <?=$row["name"]?> <?=$row["fathersname"]?></div>
                    <div class="task-card-dop">
                        <div class="task-card__worker">Телефон: <?=$row["phone"]?></div>
                        <div class="task-card__worker">Эл. почта: <?=$row["email"]?></div>
                    </div>
                </div>
            </div>
        <?}?>
        <a class="btn right" href="addClientForm.php">Добавить Клиента</a>
    </div>
    <?else:?>
        <div class="news-container container">
            <h2 style="display: flex;justify-content: center;font-size:30px;margin-top: 10%">Чтобы увидеть список клиентов необходимо зайти в учетную запись Администратора</h2>
        </div>
    <?endif;?>
<?
require_once $_SERVER["DOCUMENT_ROOT"]."/footer.php";
?>
