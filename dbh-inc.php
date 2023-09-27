<?php
$host = "sql12.freesqldatabase.com";
$databaseName = "sql12649280";
$databaseUser = "sql12649280";
$databasePassword = "7wpRdPUiqx";
$port = 3306;

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$databaseName", $databaseUser, $databasePassword);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo = null;

    echo "Connection Success";
} catch (PDOException $e) {
    // Handle any database connection errors here
    echo "Connection failed: " . $e->getMessage();
}
?>
