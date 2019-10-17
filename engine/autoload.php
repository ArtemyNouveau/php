<?php


function autoLoad ($dir, $excludeFiles = []) {
    if (!file_exists($dir)) {
        echo "Папка <b>{$dir}</b> не существует!";
        return;
    }

    $files = scandir($dir);
    $excludeFiles = array_merge(['.' , '..'], $excludeFiles);

    foreach ($files as $file) {
        if (in_array($file, $excludeFiles)) continue;
        if (is_dir($dir.DIRECTORY_SEPARATOR.$file))
            autoLoad($dir.DIRECTORY_SEPARATOR.$file, $excludeFiles);
        if (mime_content_type($dir.DIRECTORY_SEPARATOR.$file) != "text/x-php") continue;
        require_once ($dir.DIRECTORY_SEPARATOR.$file);
    }
}
