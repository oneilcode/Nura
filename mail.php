<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flexy Group - Ваша заявка отправлена"</title>
</head>
<body>
  <?php
  //проверяем, существуют ли переменные в массиве POST
  if(!isset($_POST['name']) and !isset($_POST['phone'])){
  ?> <form name="form" class="form__presentation" action="mail.php" method="POST">
		<h2 class="form__title title">Скачать презентацию</h2>
		<p class="form__subtitle">Оставьте свои контакты и мы вам вышлем</p>
		<input required class="form__input form__input_user" name="name" type="text" placeholder="Ваше имя" />
		<input required class="form__input form__input_tel" name="phone" type="tel" placeholder="Номер телефона" />
		<buttom id="submit" class="form__button btn" value="Отправить" type="submit">Отправить</buttom>
	</form> <?php
  } else {
  //показываем форму
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $name = htmlspecialchars($name);
  $phone = htmlspecialchars($phone);
  $name = urldecode($name);
  $phone = urldecode($phone);
  $name = trim($name);
  $phone = trim($phone);
  if (mail("vikimiki_93@mail.ru", "Заявка с сайта Nura", "Телефон: ".$phone.".\r\nИмя: ".$name."\r\nОтправлено для:vikimiki_93@mail.ru \r\n", "")){
  ?>
  <div style="font-size: 30px; text-align: center; margin-top: 20px;">
    Спасибо. Ваше сообщение отправлено.
  </div>
  <?php
  } else {
  ?>
  <div style="font-size: 30px; text-align: center; margin-top: 20px;">
    При отправки произошла ошибка.
  </div>
  <?php
  }
  }

  ?>

  <meta name="generator">

<script type="text/javascript">

setTimeout('location.replace("/index.html")', 3000);

/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/

</script> 

  </body>

</html>
