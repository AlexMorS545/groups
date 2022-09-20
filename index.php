<?php
include "server/server.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" sizes="96x96" href="images/logo_icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/logo_icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo_icon.png">
    <link rel="stylesheet" href="css/app.css">
    <meta charset="UTF-8">
    <title>Groups</title>
</head>
<body>
<header class="container">
    <div class="logo">
        <img src="images/logo.svg" alt="logo">
    </div>
    <nav>
        <div class="menu"><span></span></div>
        <ul>
            <?php foreach (array_keys($offices) as $key => $office): ?>
                <li data-office="<?=$office?>" style="--i:<?=$key?>;"><?= str_replace('_', ' ', $office) ?></li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>
<main>
    <div class="table container">
        <div class="table-row table-head">
            <div class="table-cell">Отдел</div>
            <div class="table-cell">Контрагент</div>
            <div class="table-cell">Сумма</div>
        </div>
        <div class="table-body"></div>
    </div>
</main>
<script src="js/app.js"></script>
</body>
</html>
