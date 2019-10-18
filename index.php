<?php
header("Content-Type: text/html; charset=utf-8");
include_once './engine/autoload.php';
autoLoad('config');
//autoLoad('./engine/dbControllers');
include_once './engine/dbControllers/db.php';
include_once './engine/dbControllers/catImgController.php';
include_once './engine/dbControllers/catInfoController.php';
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
<?php include_once TEMPLATES_DIR.'scripts.php'?>
</html>
