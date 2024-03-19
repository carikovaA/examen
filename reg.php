<html>
<meta charset="utf-8"/>
<head>
<title>Регистрация</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div>



<?php 
$host='localhost';
$database='examen';
$user='root';
$password='';

$link=mysqli_connect($host,$user,$password,$database) or die ("Ошибка" . mysqli_error($link));
if(isset($_POST['imya']) && isset($_POST['familia']) && isset($_POST['login'])&& isset($_POST['parol']))
{
	$imya = $_POST['imya'];
	$familia = $_POST['familia'];
	$login = $_POST['login'];
	$parol = $_POST['parol'];
	
	if($imya && $familia && $login && $parol)
	{
		$query = "insert into sotrydnik(imya,familia,login,parol) values ('$imya','$login','$familia','$parol')";
		$result = mysqli_query($link,$query) or die ("Ошибка" . mysqli_error($link));

		if ($result) {
			mysqli_close($link); // Close the database connection
			header("Location: autoriz.php"); // Redirect to success page
			exit;
		} else {
			die("Ошибка: " . mysqli_error($link));
		}
	}
}
?>


</div>

<div>
 <h1>Регистрация</h1>
<form method="POST">
 <p><label for="imya">Имя<br>
 <input class="text-field__input" name="imya" size="32" type="text" pattern="[a-zA-Z\s]{3,20}"  value="" required></label></p>
 <p><label for="familia">Фамилия<br>
 <input class="text-field__input" name="familia" size="32" type="text" pattern="[a-zA-Z\s]{3,20}"  value="" required></label></p>
<p><label for="login">Логин<br>
<input class="text-field__input" name="login" size="32" type="text" pattern="[a-zA-Z\s]{3,20}"  value="" required></label></p>
<p><label for="parol">Пароль<br>
<input class="text-field__input" name="parol" size="32" type="password" pattern="[a-zA-Z\s]{3,20}"  value="" required></label></p>
<p><input class="button" name="register" type="submit" value="Зарегистрироваться" ></p>
<p>Уже зарегистрированы? <a href= "autoriz.php">Введите имя пользователя</a>!</p>
</form>
</div>
</div>
</body>
</html>