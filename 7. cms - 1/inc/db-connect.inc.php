<?php

try {
    // DSN (Data Source Name) for PostgreSQL
    $dsn = 'pgsql:host=localhost;port=5432;dbname=cms';

    // Database user
    $user = 'postgres';

    // User password
    $password = '1234';

    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}
catch (PDOException $e) {
    // Uncomment the next line during development to see the actual error
    // var_dump($e->getMessage());
    echo 'A problem occured with the database connection...';
    die();
}

