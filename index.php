<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Главная</title>
<link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width">
<!--Подключаем jQuery-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<!--Подключаем JS скрипты-->
<script src="js/script.js"></script>
<!--Подключаемся к базе данных-->
<?php require_once 'components/connection.php';?>
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
                    <?php require_once 'components/menu.php'; ?>
                </div>
            </div>
        </header>
        <div class="content">
            <div class="block-1">
                <div class="information">
                    <h1>Добро пожаловать!</h1>
                    <h2>ООО "Алмаз-Эксперт"</h2>
                    <h2>ИНН 6350029261</h2>
                    <p>Своевременное прохождение ТО обеспечит высококвалифицированный персонал компании, имеющей все права для проведения данной процедуры, что является абсолютным гарантом надежности.</p>
                </div>
            </div>
        </div>
        <?php require_once 'components/footer.php'; ?>
    </div>
</body>
</html>
