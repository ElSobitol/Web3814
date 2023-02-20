<?php 
require('data.php');

?>


<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Моя первая страница</title>
  <link rel="shortcut icon" href="./img/browser_icon.png">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>

  <header>
    <h1>Заголовок страницы о чем-то</h1>
    <img src="./img/logo.png" alt="Это наш логотип">
    <nav>
      <li><a href="./index.php">Главная</a></li>
      <li><a href="#aboutme">Обо мне</a></li>
      <li><a href="#">Контакты</a></li>
      <li><a href="./test.php">Тестовый блок</a></li>
      <li><a href="./weather.php">Погода JSON</a></li>
    </nav>

  </header>
  <div class="container">
    <div class="sidebar">
      <h2 id="aboutme">Обо мне</h2>
      <p><?= $let ?> consectetur adipisicing elit. Reprehenderit beatae, dolores quia fugiat, dignissimos minus ipsa maxime asperiores exercitationem velit suscipit, itaque voluptas nostrum voluptatibus aut iusto tempora libero. Aspernatur!
      Sequi esse odio, necessitatibus cum consequatur pariatur ullam dignissimos ab. Aspernatur corporis ad quibusdam explicabo maiores nostrum architecto, accusantium dolore voluptatum. Laborum, quo quas repudiandae error modi ullam eveniet vel.
      Expedita laboriosam molestias repellendus hic totam perferendis delectus ullam possimus qui repellat quidem sed officiis rem mollitia, tenetur, dignissimos quas maiores id eaque excepturi illo fugiat. Voluptate vel enim iste?
      Quos, fuga magnam sunt doloremque illum ipsam, iste pariatur, quasi tempore amet inventore qui quas illo? Cupiditate quibusdam voluptatem fugiat laborum iure omnis voluptate ipsa magni. Nisi nulla mollitia ipsam.
      Aliquam asperiores, similique praesentium fugiat culpa suscipit minima officia deleniti repellat explicabo! Atque deleniti eum explicabo, ducimus sit commodi cupiditate nobis molestiae praesentium non necessitatibus sunt, repudiandae quia sed natus.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit beatae, dolores quia fugiat, dignissimos minus ipsa maxime asperiores exercitationem velit suscipit, itaque voluptas nostrum voluptatibus aut iusto tempora libero. Aspernatur!
      Sequi esse odio, necessitatibus cum consequatur pariatur ullam dignissimos ab. Aspernatur corporis ad quibusdam explicabo maiores nostrum architecto, accusantium dolore voluptatum. Laborum, quo quas repudiandae error modi ullam eveniet vel.
      Expedita laboriosam molestias repellendus hic totam perferendis delectus ullam possimus qui repellat quidem sed officiis rem mollitia, tenetur, dignissimos quas maiores id eaque excepturi illo fugiat. Voluptate vel enim iste?
      Quos, fuga magnam sunt doloremque illum ipsam, iste pariatur, quasi tempore amet inventore qui quas illo? Cupiditate quibusdam voluptatem fugiat laborum iure omnis voluptate ipsa magni. Nisi nulla mollitia ipsam.
      Aliquam asperiores, similique praesentium fugiat culpa suscipit minima officia deleniti repellat explicabo! Atque deleniti eum explicabo, ducimus sit commodi cupiditate nobis molestiae praesentium non necessitatibus sunt, repudiandae quia sed natus.</p>
    </div>
    <div class="main">
      <h2>О главном</h2>
      <p><?= $arrayTest['ключ']; ?> sit amet consectetur adipisicing elit. Reprehenderit beatae, dolores quia fugiat, dignissimos minus ipsa maxime asperiores exercitationem velit suscipit, itaque voluptas nostrum voluptatibus aut iusto tempora libero. Aspernatur!
      Sequi esse odio, necessitatibus cum consequatur pariatur ullam dignissimos ab. Aspernatur corporis ad quibusdam explicabo maiores nostrum architecto, accusantium dolore voluptatum. Laborum, quo quas repudiandae error modi ullam eveniet vel.
      Expedita laboriosam molestias repellendus hic totam perferendis delectus ullam possimus qui repellat quidem sed officiis rem mollitia, tenetur, dignissimos quas maiores id eaque excepturi illo fugiat. Voluptate vel enim iste?
      Quos, fuga magnam sunt doloremque illum ipsam, iste pariatur, quasi tempore amet inventore qui quas illo? Cupiditate quibusdam voluptatem fugiat laborum iure omnis voluptate ipsa magni. Nisi nulla mollitia ipsam.
      Aliquam asperiores, similique praesentium fugiat culpa suscipit minima officia deleniti repellat explicabo! Atque deleniti eum explicabo, ducimus sit commodi cupiditate nobis molestiae praesentium non necessitatibus sunt, repudiandae quia sed natus.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit beatae, dolores quia fugiat, dignissimos minus ipsa maxime asperiores exercitationem velit suscipit, itaque voluptas nostrum voluptatibus aut iusto tempora libero. Aspernatur!
      Sequi esse odio, necessitatibus cum consequatur pariatur ullam dignissimos ab. Aspernatur corporis ad quibusdam explicabo maiores nostrum architecto, accusantium dolore voluptatum. Laborum, quo quas repudiandae error modi ullam eveniet vel.
      Expedita laboriosam molestias repellendus hic totam perferendis delectus ullam possimus qui repellat quidem sed officiis rem mollitia, tenetur, dignissimos quas maiores id eaque excepturi illo fugiat. Voluptate vel enim iste?
      Quos, fuga magnam sunt doloremque illum ipsam, iste pariatur, quasi tempore amet inventore qui quas illo? Cupiditate quibusdam voluptatem fugiat laborum iure omnis voluptate ipsa magni. Nisi nulla mollitia ipsam.
      Aliquam asperiores, similique praesentium fugiat culpa suscipit minima officia deleniti repellat explicabo! Atque deleniti eum explicabo, ducimus sit commodi cupiditate nobis molestiae praesentium non necessitatibus sunt, repudiandae quia sed natus.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit beatae, dolores quia fugiat, dignissimos minus ipsa maxime asperiores exercitationem velit suscipit, itaque voluptas nostrum voluptatibus aut iusto tempora libero. Aspernatur!
      Sequi esse odio, necessitatibus cum consequatur pariatur ullam dignissimos ab. Aspernatur corporis ad quibusdam explicabo maiores nostrum architecto, accusantium dolore voluptatum. Laborum, quo quas repudiandae error modi ullam eveniet vel.
      Expedita laboriosam molestias repellendus hic totam perferendis delectus ullam possimus qui repellat quidem sed officiis rem mollitia, tenetur, dignissimos quas maiores id eaque excepturi illo fugiat. Voluptate vel enim iste?
      Quos, fuga magnam sunt doloremque illum ipsam, iste pariatur, quasi tempore amet inventore qui quas illo? Cupiditate quibusdam voluptatem fugiat laborum iure omnis voluptate ipsa magni. Nisi nulla mollitia ipsam.
      Aliquam asperiores, similique praesentium fugiat culpa suscipit minima officia deleniti repellat explicabo! Atque deleniti eum explicabo, ducimus sit commodi cupiditate nobis molestiae praesentium non necessitatibus sunt, repudiandae quia sed natus.</p>
    



     <ul>
      <li><?= $arrayTest3[0]; ?></li>
      <li>Список 2</li>
    </ul>
    <ol>
      <li>СП1</li>
      <li>СП2</li>
      <li>СП3</li>
    </ol>
    </div>
  </div>
 
  <footer>
    <p>&#169; Все права защищены. Мой сайт</p>
    <p><a href="#top">Перейти вверх страницы</a></p>
  </footer>
</body>
</html>