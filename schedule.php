<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Режим работы</title>
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
                    <?php require_once 'components/menu.php'; ?>
              </div>
           </div>
      </header>
    <div class="content">
      <table class="grafic">
        <tbody>
            <tr>
                <td class="<?php $result = $link->query("SELECT `color` FROM `schedule` WHERE `id`='1'"); foreach ($result as $row); if ((implode($row)) == true) {echo "green";} else {echo "red";}?>">
                    <?php $result = $link->query("SELECT * FROM `schedule` WHERE `id`='1'"); foreach ($result as $row); {echo $row['day'];} ?></td>
                <td><?php $result = $link->query("SELECT * FROM `schedule` WHERE `id`='1'"); foreach ($result as $row); {echo $row['time'];} ?></td>
            </tr>
            <tr>
                <td class="<?php $result = $link->query("SELECT `color` FROM `schedule` WHERE `id`='2'"); foreach ($result as $row); if ((implode($row)) == true) {echo "green";} else {echo "red";}?>">
                    <?php
                    $result = $link->query("SELECT * FROM `schedule` WHERE `id`='2'"); foreach ($result as $row); {echo $row['day'];} ?></td>
                <td><?php $result = $link->query("SELECT * FROM `schedule` WHERE `id`='2'"); foreach ($result as $row); {echo $row['time'];} ?></td>
            </tr>
            <tr>
                <td class="<?php $result = $link->query("SELECT `color` FROM `schedule` WHERE `id`='3'"); foreach ($result as $row); if ((implode($row)) == true) {echo "green";} else {echo "red";}?>">
                    <?php $result = $link->query("SELECT * FROM `schedule` WHERE `id`='3'"); foreach ($result as $row); {echo $row['day'];} ?></td>
                <td><?php $result = $link->query("SELECT * FROM `schedule` WHERE `id`='3'"); foreach ($result as $row); {echo $row['time'];} ?></td>
            </tr>
            <tr>
                <td class="<?php $result = $link->query("SELECT `color` FROM `schedule` WHERE `id`='4'"); foreach ($result as $row); if ((implode($row)) == true) {echo "green";} else {echo "red";}?>">
                    <?php $result = $link->query("SELECT * FROM `schedule` WHERE `id`='4'"); foreach ($result as $row); {echo $row['day'];} ?></td>
                <td><?php $result = $link->query("SELECT * FROM `schedule` WHERE `id`='4'"); foreach ($result as $row); {echo $row['time'];} ?></td>
            </tr>
            <tr>
                <td class="<?php $result = $link->query("SELECT `color` FROM `schedule` WHERE `id`='5'"); foreach ($result as $row); if ((implode($row)) == true) {echo "green";} else {echo "red";}?>">
                    <?php $result = $link->query("SELECT * FROM `schedule` WHERE `id`='5'"); foreach ($result as $row); {echo $row['day'];} ?></td>
                <td><?php $result = $link->query("SELECT * FROM `schedule` WHERE `id`='5'"); foreach ($result as $row); {echo $row['time'];} ?></td>
            </tr>
            <tr>
                <td class="<?php $result = $link->query("SELECT `color` FROM `schedule` WHERE `id`='6'"); foreach ($result as $row); if ((implode($row)) == true) {echo "green";} else {echo "red";}?>">
                    <?php $result = $link->query("SELECT * FROM `schedule` WHERE `id`='6'"); foreach ($result as $row); {echo $row['day'];} ?></td>
                <td><?php $result = $link->query("SELECT * FROM `schedule` WHERE `id`='6'"); foreach ($result as $row); {echo $row['time'];} ?></td>
            </tr>
            <tr>
                <td class="<?php $result = $link->query("SELECT `color` FROM `schedule` WHERE `id`='7'"); foreach ($result as $row); if ((implode($row)) == true) {echo "green";} else {echo "red";}?>">
                    <?php $result = $link->query("SELECT * FROM `schedule` WHERE `id`='7'"); foreach ($result as $row); {echo $row['day'];} ?></td>
                <td><?php $result = $link->query("SELECT * FROM `schedule` WHERE `id`='7'"); foreach ($result as $row); {echo $row['time'];} ?></td>
            </tr>
            <tr>
                <th rowspan="2">Без перерыва на обед</th>
            </tr>
        </tbody>
        </table>
            <br>
        <table class="communication" width="50%">
        <tbody>
            <tr>
                <td colspan="2">
                    <p>Чтобы записаться на прохождение ТО, необходимо позвонить или написать письмо нам на электронный ящик:</p>
                </td>
            </tr>
            <tr>
                <td>Телефон:</td>
                <td><a class="contact" href="tel:<?php $result = $link->query("SELECT * FROM `contacts`"); foreach ($result as $row) {echo $row['phone'];} ?>">
                        <?php $result = $link->query("SELECT * FROM `contacts`"); foreach ($result as $row) {echo $row['phone'];} ?>
                    </a>
                </td>
            </tr>
            <tr>
                <td>Электронная почта:</td>
                <td><a class="contact" href="<?php $result = $link->query("SELECT * FROM `contacts`"); foreach ($result as $row) {echo $row['email'];} ?>">
                        <?php $result = $link->query("SELECT * FROM `contacts`"); foreach ($result as $row) {echo $row['email'];} ?>
                    </a>
                </td>
            </tr>    
        </tbody>    
        </table>
    </div>
       <?php include 'components/footer.php'; ?>
    </div>
</body>
</html>
