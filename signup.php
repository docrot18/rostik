<?
require_once $_SERVER["DOCUMENT_ROOT"]."/header.php";
?>
<body>
<h1>Регистрация</h1>
<form class="form-reg" action="reg.php" method="post">
    <div class="form-grid">
        <div class="form-group">
            <span>Имя</span>
            <input name="name" type="text" placeholder="Имя">
        </div>
        <div class="form-group">
            <span>Логин</span>
            <input name="login" type="text" placeholder="Логин">
        </div>
        <div class="form-group">
            <span>Пароль</span>
            <input name="password" type="password" placeholder="Пароль">
        </div>
        <div class="form-group">
            <span>Эл.Почта</span>
            <input name="email" type="email" placeholder="Эл. Почта">
        </div>
        <div class="form-group">
            <span>Телефон</span>
            <input name="number" type="number" placeholder="Телефон">
        </div>
        <div  class="form-group">
            <span>Является Администратором?</span>
            <input name="is_Admin" type="checkbox">
        </div>
    </div>
    <button type="submit">Зарегистрировать</button>
</form>
</body> 
</html>