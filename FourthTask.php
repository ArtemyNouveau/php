<?php
CONST LEET = array(
    "а" => 'a',
    "б" => 'b',
    "в" => 'v',
    "г" => 'g',
    "д" => 'd',
    "е" => 'e',
    "ё" => 'yo',
    "ж" => 'zh',
    "з" => 'z',
    "и" => 'i',
    "й" => 'j',
    "к" => 'k',
    "л" => 'l',
    "м" => 'm',
    "н" => 'n',
    "о" => 'o',
    "п" => 'p',
    "р" => 'r',
    "с" => 'c',
    "т" => 't',
    "у" => 'u',
    "ф" => 'f',
    "х" => 'h',
    "ц" => 'ts',
    "ч" => 'ch',
    "ш" => 'sh',
    "щ" => 'sch',
    "ъ" => '"',
    "ы" => 'y',
    "ь" => '`',
    "э" => 'eh',
    "ю" => 'yu',
    "я" => 'ya',
);

function leetTranslate ($string) : string {
    $string = mb_convert_encoding($string, "UTF-8", mb_detect_encoding($string));;
    $sentences = explode('.', $string);
    if (!$sentences) return '';
    $isFirst = true;

    foreach ($sentences as $i => $sentence) {
        $sentence = mb_strtolower($sentence);
        mb_regex_encoding('UTF-8');
        mb_internal_encoding("UTF-8");
        $charArray = preg_split('/(?<!^)(?!$)/u', $sentence);
        foreach ($charArray as $j => $char) {
            if (!array_key_exists($char, LEET)) {
                $charArray[$j] = $char;
                continue;
            }
            if ($isFirst) {
                $charArray[$j] = strtoupper(LEET[$char]);
                $isFirst = false;
                continue;
            }
            $charArray[$j] = LEET[$char];
        }

        $sentence = implode("", $charArray);
        $isFirst = true;
        $sentences[$i] = $sentence;
    }

    return implode(".", $sentences);
}

echo leetTranslate('Обычный текст для теста. Транслит - мощь. Sample Text Nothing helps.');
