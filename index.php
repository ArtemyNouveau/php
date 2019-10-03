<?php
$day = date('l, j');
$month = date('F');
$year = date('Y');
const TITLE = 'Site';
const HEADER = 'Sample text';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= TITLE ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
<header>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo center">Logo</a>
        </div>
    </nav>
</header>
<main>
    <div class="container">
        <p>Today is <strong><?= $day ?></strong><sup>th</sup> of <strong><?= $month ?></strong>
            <strong><?= $year ?></strong>
        </p>

        <ul class="collapsible">
            <li class="active">
                <div class="collapsible-header" tabindex="0">
                    First, Third and Fourth task
                    <span class="badge">1, 3, 4</span>
                </div>
                <div class="collapsible-body" style="display: block;"><p>
                        <?php include_once 'FirstTask.php' ?>
                    </p></div>
            </li>
            <li>
                <div class="collapsible-header" tabindex="0">
                    Second task
                    <span class="badge">2</span>
                </div>
                <div class="collapsible-body" style="display: block;"><p>
                        <?php include_once 'SecondTask.php' ?>
                    </p></div>
            </li>
            <li>
                <div class="collapsible-header" tabindex="0">
                    Sixth task
                    <span class="badge">1</span>
                </div>
                <div class="collapsible-body" style="display: block;"><p>
                        7<sup>4</sup> =
                        <?php
                        include_once 'SixthTask.php';
                        echo power(7, 4);
                        ?>
                    </p></div>
            </li>
        </ul>
    </div>
</main>

<footer class="page-footer">
    <div class="container">
        <div class="row">

        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <?php
            $hours = (int)date('H');
            echo "Сейчас $hours час";
            if (($hours > 1 && $hours < 5) || ($hours > 21 && $hours < 25)) echo 'a';
            if (($hours > 5 && $hours < 21) || $hours == 0) echo 'ов';

            $minutes = (int)date('i');
            echo " $minutes минут";
            if ($minutes == 1) echo 'a';
            if ($minutes < 5 && $minutes > 1) echo 'ы';
            ?>
        </div>
    </div>
</footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>
