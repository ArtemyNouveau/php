<?php
header("Content-Type: text/html; charset=utf-8");

const FEATURES = [
        '#s' => 'simple',
        '#t' => 'text',
        '#f' => 'for',
        '#e' => 'example'
]
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
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
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Logo</a>
            <ul class="right hide-on-med-and-down">
                <li>
                    <a href="#">Sass</a>
                </li>
                <li>
                    <a href="#">Components</a>
                </li>
                <!-- Dropdown Trigger -->
                <li>
                    <a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                    <ul id="dropdown1" class="dropdown-content">
                        <?php foreach (FEATURES as $key => $feature) : ?>
                            <li><a href=<?=$key?>><?=$feature?></a></li>
                        <?php endforeach;?>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main>
    <div class="container">
        <ul class="collapsible">
            <li class="active">
                <div class="collapsible-header" tabindex="0">
                    First task
                    <span class="badge">1</span>
                </div>
                <div class="collapsible-body"><p>
                        In the interval (3, 20) numbers:
                        <?php include_once 'FirstTask.php' ?>
                        can be divided by 4
                    </p></div>
            </li>
            <li>
                <div class="collapsible-header" tabindex="0">
                    Second task
                    <span class="badge">2</span>
                </div>
                <div class="collapsible-body"><p>
                        <?php include_once 'SecondTask.php' ?>
                    </p></div>
            </li>
            <li>
                <div class="collapsible-header" tabindex="0">
                    Third task
                    <span class="badge">3</span>
                </div>
                <div class="collapsible-body"><p>
                        <?php include_once 'ThirdTask.php' ?>
                    </p></div>
            </li>
            <li>
                <div class="collapsible-header" tabindex="0">
                    Fourth task
                    <span class="badge">4</span>
                </div>
                <div class="collapsible-body"><p>
                        <?php include_once 'FourthTask.php' ?>
                    </p></div>
            </li>
            <li>
                <div class="collapsible-header" tabindex="0">
                    Fifth task
                    <span class="badge">5</span>
                </div>
                <div class="collapsible-body"><p>
                        <?php include_once 'FithTask.php' ?>
                    </p></div>
            </li>
            <li>
                <div class="collapsible-header" tabindex="0">
                    Sixth task
                    <span class="badge">6</span>
                </div>
                <div class="collapsible-body"><p>
                        Look at the header
                    </p></div>
            </li>
            <li>
                <div class="collapsible-header" tabindex="0">
                    Seventh task
                    <span class="badge">7</span>
                </div>
                <div class="collapsible-body"><p>
                        <?php include_once 'SeventhTask.php' ?>
                    </p></div>
            </li>
            <li>
                <div class="collapsible-header" tabindex="0">
                    Eight task
                    <span class="badge">8</span>
                </div>
                <div class="collapsible-body"><p>
                        <?php include_once 'EightTask.php' ?>
                    </p></div>
            </li>
            <li>
                <div class="collapsible-header" tabindex="0">
                    Ninth task
                    <span class="badge">9</span>
                </div>
                <div class="collapsible-body"><p>
                        <?php include_once 'NinthTask.php' ?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="index.js"></script>
</html>
