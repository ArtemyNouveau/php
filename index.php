<?php
header("Content-Type: text/html; charset=utf-8");
include_once './engine/autoload.php';
autoLoad('config');
include DB_DIR.'db.php';
include DB_DIR.'catImgController.php';
include DB_DIR.'catInfoController.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="public/css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="public/js/materializeInit.js"></script>
</head>
<body>
<header>
    <?php include_once TEMPLATES_DIR.'navbar.php'?>
</header>
<main>
    <div class="container">
        <?php
        include_once ENGINE_DIR . 'gallery/galery.php'
        ?>
    </div>
</main>

<?php include_once TEMPLATES_DIR.'footer.php'?>
</body>
<script src="public/js/ajax.js"></script>
</html>
