<?php
$day = date('l, j');
$month = date('F');
$year = date('Y');
const TITLE = 'Site';
const HEADER = 'Sample text';

$a = 5;
$b = 10;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= TITLE ?></title>
</head>
<body>
<h1><?=HEADER?></h1>
<p>Today is <strong><?= $day ?></strong><sup>th</sup> of <strong><?= $month ?></strong> <strong><?= $year ?></strong></p>
<p>a = <?= $a ?>, b = <?= $b ?></p>
<?php
$a += $b;
$b = $a - $b;
$a -= $b;
?>
<p>a = <?= $a ?>, b = <?= $b ?></p>
</body>
</html>

<?php
$a = 5;
$b = '05';
echo "<br/>происходит неявное преобразование типов и сравнение, поэтому a и b равны<br/>";
var_dump($a == $b);                             // Почему true?
echo "<br/>происходит явное преобразование типов к целочисленному, но так как 0 в начале числа ничего не значит, то он не пишется<br/>";
var_dump((int)'012345');                        // Почему 12345?
echo "<br/>происходит сравнение на идентичность, где мы сравнивем 123.0 и 123<br/>";
var_dump((float)123.0 === (int)123.0); // Почему false?
echo "<br/>во время преобразования строки, мы спотыкаемся о нечисловой символ в начале и выводим 0, а 0 === 0<br/>";
var_dump((int)0 === (int)'hello, world'); // Почему true?
?>
