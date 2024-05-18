<?
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'CRM');
if (!$connect) {
    die('Error connect to DataBase');
}


function auth($connect,$login,$pass) {
	//Находим совпадение в базе данных
	$result = mysqli_query($connect,"SELECT * FROM userlist WHERE login='$login' AND password='$pass'");
	if($result) {
		if(mysqli_num_rows($result) == 1) {//Проверяем, одно ли совпадение
			$user = mysqli_fetch_array($result); //Получаем данные пользователя и заносим их в сессию
            $_SESSION['user']=[
                "name" => $user['name'],
                "login" => $user['login'],
                "id" => $user['id'],
                "is_Admin" => $user['is_Admin']
            ];
			return true; //Возвращаем true, потому что авторизация успешна
		} else {
			unset($_SESSION); //Удаляем все данные из сессии и возвращаем false, если совпадений нет или их больше 1
			return false;
		}
	} else {
		return false; //Возвращаем ложь, если произошла ошибка
	}
}

function load($connect) {
	$echo = "";
	if(auth($connect,$_SESSION['user']['login'],$_SESSION['user']['password'])) {//Проверяем успешность авторизации
		$result = mysqli_query($connect,"SELECT * FROM messages"); //Запрашиваем сообщения из базы
		if($result) {
			if(mysqli_num_rows($result) >= 1) {
				while($array = mysqli_fetch_array($result)) {//Выводим их с помощью цикла
                    $temp = $array['id'];
					$user_result = mysqli_query($connect,"SELECT * FROM `users` WHERE id='$temp';");//Получаем данные об авторе сообщения
					if(mysqli_num_rows($user_result) == 1) {
						$user = mysqli_fetch_array($user_result);
						$echo .= "<div class='chat__message chat__message_$user[nick_color]'><b>$user[login]:</b> $array[message]</div>"; //Добавляем сообщения в переменную $echo
					}
				}
			
			} else {
				$echo = "Нет сообщений!";//В базе ноль записей
			}
		}
	} else {
		$echo = "Проблема авторизации";//Авторизация не удалась
	}
	
	return $echo;//Возвращаем результат работы функции
}

function send($connect,$message) {
	if(auth($connect,$_SESSION['login'],$_SESSION['password'])) {//Если авторизация удачна
		$message = htmlspecialchars($message);//Заменяем символы ‘<’ и ‘>’на ASCII-код
		$message = trim($message); //Удаляем лишние пробелы
		$message = addslashes($message); //Экранируем запрещенные символы
		$result = mysqli_query($connect,"INSERT INTO messages (user_id,message) VALUES ('$_SESSION[id]','$message')");//Заносим сообщение в базу данных
	}
	return load($connect); //Вызываем функцию загрузки сообщений
}

//Получаем переменные из супермассива $_POST
//Тут же их можно проверить на наличие инъекций
if(isset($_POST['act'])) {$act = $_POST['act'];}
if(isset($_POST['var1'])) {$var1 = $_POST['var1'];}
if(isset($_POST['var2'])) {$var2 = $_POST['var2'];}

switch($_POST['act']) {//В зависимости от значения act вызываем разные функции
	case 'load': 
		$echo = load($connect); //Загружаем сообщения
	break;
	
	case 'send': 
		if(isset($var1)) {
			$echo = send($connect,$var1); //Отправляем сообщение
		}
	break;
	
	case 'auth': 
		if(isset($var1) && isset($var2)) {//Авторизуемся
			if(auth($connect,$var1,$var2)) {
				$echo = load($connect);
			}
		}
	break;
}

echo $echo;//Выводим результат работы кода


