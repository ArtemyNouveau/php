<?php

function connectLocalDB (string $dbName = 'catagram', $password = '123456789', string $user = 'root', string $port = '3306') {
    $db = mysqli_connect('localhost:'.$port, $user, $password, $dbName) or die ('No connection');
    return $db;
}

function getQueryResult (string $query) {
    $rows = [];
    $queryResult = execQuery($query);

    while ($row = mysqli_fetch_assoc($queryResult)) {
        $rows[] = $row;
    }

    return $rows;
}

function execQuery (string $query) {
    $db = connectLocalDB();
    $result = mysqli_query($db, $query);
    mysqli_close($db);
    return $result;
}
