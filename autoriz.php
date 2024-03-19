<?php
$host = 'localhost';
$database = 'examen';
$user = 'root';
$password = '';
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка" . mysqli_error($link));

if (isset($_POST['login']) && isset($_POST['parol'])) {
    $login = $_POST['login'];
    $parol = $_POST['parol'];

    $query = "SELECT * FROM sotrydnik WHERE login = '$login' AND parol = '$parol'";
    $result = mysqli_query($link, $query) or die("Ошибка" . mysqli_error($link));
    
    if (mysqli_num_rows($result) == 1) {
        echo "Авторизация успешна! Добро пожаловать! ";
        mysqli_close($link); // Close the database connection
        header("Location: okno.php"); // Redirect to success page
        exit;
    } else {
        echo "Ошибка логина или пароля. Пожалуйста, проверьте ваши данные. ";
    }
}
?>

<html>
<head>
  <meta charset="utf-8" />
  <title>Авторизация</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div>
    <form method="POST">
      <h3>Авторизация</h3>
      <div>
        <div>
          <p><label for="login">Логин<br>
          <input class="text-field__input" type="text" name="login" required />
        </div>
        <div>
        <p><label for="parol">Пароль<br>
          <input class="text-field__input" type="password" name="parol" required />
        </div>
      </div>
      <input class="button" type="submit" value="Войти">
    </form>
  </div>
</body>
</html>