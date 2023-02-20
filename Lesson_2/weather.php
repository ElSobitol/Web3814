<?php 
//куда будем стучаться
$url = 'https://api.openweathermap.org/data/2.5/weather';

$options = array(
  'q' => 'Moscow',
  'APPID' => '99b222f689c668d8061958cad827baeb',
  'units' => 'metric',
  'lang'  => 'ru'
);

$special = curl_init();
curl_setopt($special, CURLOPT_RETURNTRANSFER, true);
curl_setopt($special, CURLOPT_URL, $url.'?'.http_build_query($options));

$responce = curl_exec($special);
$datainfo = json_decode($responce, true);

curl_close($special);

echo '<pre>';

print_r($datainfo);
?>






<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Виджет погоды JSOn</title>
  <link rel="shortcut icon" href="./img/browser_icon.png">
  <link rel="stylesheet" href="./css/style.css">
  
</head>
<body>

  <header>
    <h1>Виджет погоды JSOn</h1>
    <img src="./img/logo.png" alt="Это наш логотип">
    <nav>
      <li><a href="./index.php">Главная</a></li>
      <li><a href="#aboutme">Обо мне</a></li>
      <li><a href="#">Контакты</a></li>
      <li><a href="./test.php">Тестовый блок</a></li>
      <li><a href="./weather.php">Погода JSON</a></li>
    </nav>

  </header>


  <footer>
    <p>&#169; Все права защищены. Мой сайт</p>
    <p><a href="#top">Перейти вверх страницы</a></p>
  </footer>
</body>
</html>