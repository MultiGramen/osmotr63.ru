<nav class="header_menu">
    <ul class="header_list">
        <li>
            <a href="index.php" class="header_link click"><?php $result = $link->query("SELECT * FROM `menu` WHERE `id`='1'"); foreach($result as $row); {echo $row['name'];} ?></a>
        </li>
        <li>
            <a href="contacts.php" class="header_link click"><?php $result = $link->query("SELECT * FROM `menu` WHERE `id`='2'"); foreach($result as $row); {echo $row['name'];} ?></a>
        </li>
        <li>
            <a href="oplata.php" class="header_link click"><?php $result = $link->query("SELECT * FROM `menu` WHERE `id`='3'"); foreach($result as $row); {echo $row['name'];} ?></a>
        </li>
        <li>
            <a href="documents.php" class="header_link click"><?php $result = $link->query("SELECT * FROM `menu` WHERE `id`='4'"); foreach($result as $row); {echo $row['name'];} ?></a>
        </li>
        <li>
            <a href="schedule.php" class="header_link click"><?php $result = $link->query("SELECT * FROM `menu` WHERE `id`='5'"); foreach($result as $row); {echo $row['name'];} ?></a>
        </li>
        <li>
            <a href="documentsto.php" class="header_link click"><?php $result = $link->query("SELECT * FROM `menu` WHERE `id`='6'"); foreach($result as $row); {echo $row['name'];} ?></a>
        </li>
    </ul>
</nav>