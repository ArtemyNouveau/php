<?php
$regions = [];
$regions['Московская'] = [
    'Москва', 'Зеленоград', 'Клин'
];
$regions['Ленинградская'] = [
    'Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'
];
$regions['Рязанская'] = [
    'Касимов', 'Скопин', 'Сасово', 'Ряжск'
];


foreach ($regions as $key => $innerArr)
{
    echo "Область $key".PHP_EOL;
    echo 'Города:';
    foreach ($innerArr as $val){
        echo ", $val";
   }
    echo ". </br>";
}
