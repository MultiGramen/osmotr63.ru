<?php require_once 'components/connection.php';?>
<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Оплата</title>
<link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width">
<!--Подключаем jQuery-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<!--Подключаем JS скрипты-->
<script src="js/script.js"></script>
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
        <div class="payment">
            <table class="table">
                <tbody>
                <tr>
                    <td><p class="type_title"><strong>ТИП АВТОТРАНСПОРТА</strong></p></td>
                    <td><p class="type_title"><strong>СТОИМОСТЬ В РУБЛЯХ</strong></p></td>
                </tr>
                    <tr>
                        <td><p class="type"><?php $result = $link->query("SELECT * FROM `payment` WHERE `id`='1'"); foreach($result as $row); {echo $row['type'];} ?></p></td>
                        <td><p class="price"><?php $result = $link->query("SELECT * FROM `payment` WHERE `id`='1'"); foreach($result as $row); {echo $row['price'];} ?></p></td>
                    </tr>
                    <tr>
                        <td><p class="type"><?php $result = $link->query("SELECT * FROM `payment` WHERE `id`='2'"); foreach($result as $row); {echo $row['type'];} ?></p></td>
                        <td><p class="price"><?php $result = $link->query("SELECT * FROM `payment` WHERE `id`='2'"); foreach($result as $row); {echo $row['price'];} ?></p></td>
                    </tr>
                    <tr>
                        <td><p class="type"><?php $result = $link->query("SELECT * FROM `payment` WHERE `id`='3'"); foreach($result as $row); {echo $row['type'];} ?></p></td>
                        <td><p class="price"><?php $result = $link->query("SELECT * FROM `payment` WHERE `id`='3'"); foreach($result as $row); {echo $row['price'];} ?></p></td>
                    </tr>
                    <tr>
                        <td><p class="type"><?php $result = $link->query("SELECT * FROM `payment` WHERE `id`='4'"); foreach($result as $row); {echo $row['type'];} ?></p></td>
                        <td><p class="price"><?php $result = $link->query("SELECT * FROM `payment` WHERE `id`='4'"); foreach($result as $row); {echo $row['price'];} ?></p></td>
                    </tr>
                    <tr>
                        <td><p class="type"><?php $result = $link->query("SELECT * FROM `payment` WHERE `id`='5'"); foreach($result as $row); {echo $row['type'];} ?></p></td>
                        <td><p class="price"><?php $result = $link->query("SELECT * FROM `payment` WHERE `id`='5'"); foreach($result as $row); {echo $row['price'];} ?></p></td>
                    </tr>
                    <tr>
                        <td><p class="type"><?php $result = $link->query("SELECT * FROM `payment` WHERE `id`='6'"); foreach($result as $row); {echo $row['type'];} ?></p></td>
                        <td><p class="price"><?php $result = $link->query("SELECT * FROM `payment` WHERE `id`='6'"); foreach($result as $row); {echo $row['price'];} ?></p></td>
                    </tr>
                    <tr>
                        <td><p class="type"><?php $result = $link->query("SELECT * FROM `payment` WHERE `id`='7'"); foreach($result as $row); {echo $row['type'];} ?></p></td>
                        <td><p class="price"><?php $result = $link->query("SELECT * FROM `payment` WHERE `id`='7'"); foreach($result as $row); {echo $row['price'];} ?></p></td>
                    </tr>
                </tbody>
            </table>
            <table class="requisites">
                <caption><h5>РЕКВИЗИТЫ</h5></caption>
                <tbody>
                    <tr>
                        <td><p>ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ "Алмаз-Эксперт"</p></td>
                    </tr>
                    <tr>
                        <td><p>ИНН 6350029261</p></td>
                    </tr>
                    <tr>
                        <td><p>КПП 635001001</p></td>
                    </tr>
                    <tr>
                        <td><p>ОГРН 1226300025467</p></td>
                    </tr>
                    <tr>
                        <td><p>САМАРСКИЙ РФ АО "РОССЕЛЬХОЗБАНК"</p></td>
                    </tr>
                    <tr>
                        <td><p>БИК 043601978</p></td>
                    </tr>
                    <tr>
                        <td><p>ИНН 7725114488</p></td>
                    </tr>
                    <tr>
                        <td><p>КОД ОКПО 54048730</p></td>
                    </tr>
                    <tr>
                        <td><p>р/с № 40702810313020000357</p></td>
                    </tr>
                    <tr>
                        <td><p>к/с № 30101810900000000978</p></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        <?php require_once 'components/footer.php'; ?>
    </div>
</body>
</html>