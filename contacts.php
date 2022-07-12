<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Контакты</title>
<link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width">
<!--Подключаем jQuery-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<!--Подключаем JS скрипты-->
<script src="js/script.js"></script>
<!--Подключаемся к базе данных-->
<?php require_once 'components/connection.php'; ?>
</head>
<body>
    <div class="wrapper">
       <header class="header">
            <div class="container">
               <div class="header_body">
                   <?php require_once 'components/banner.php'; ?>
                   <div class="header_burger">
                       <span></span>
                   </div>
                    <?php require_once 'components/menu.php';?>
                </div>
           </div>
       </header>
        <div class="content">
            <div class="col-1">
                <table class="table">
                    <caption>Чтобы записаться на прохождение ТО, необходимо позвонить или написать письмо нам на электронный ящик:</caption>
                    <tbody>
                        <tr>
                            <td>Телефон:</td>
                            <td class="contact">
                                <p><a href="tel:<?php $result = $link->query("SELECT * FROM `contacts`"); foreach ($result as $row) {echo $row['phone'];} ?>">
                                        <?php $result = $link->query("SELECT * FROM `contacts`"); foreach ($result as $row) {echo $row['phone'];} ?>
                                    </a>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="email"><p>Электронная почта:</p></td>
                            <td><p><a class="contact" href="<?php $result = $link->query("SELECT * FROM `contacts`"); foreach ($result as $row) {echo $row['email'];} ?>">
                                        <?php $result = $link->query("SELECT * FROM `contacts`"); foreach ($result as $row) {echo $row['email'];} ?>
                                    </a>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td><p>Адрес:</p></td>
                            <td><p>
                                    <?php $result = $link->query("SELECT * FROM `contacts`"); foreach ($result as $row) {echo $row['address'];} ?>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div style="position:relative;overflow:hidden;"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Afca9da5f2df7201ce255af863160401f3d3519878b8ce82e1b6b07340c69b7ad&amp;source=constructor" width="520" height="412" frameborder="0"></iframe></div>
                </div>
        </div>
        <?php require 'components/footer.php'; ?>
    </div>
</body>
</html>
