<?php
$host = "sql12.freesqldatabase.com";
$databaseName = "sql12649280";
$databaseUser = "sql12649280";
$databasePassword = "7wpRdPUiqx";
$port = 3306;

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$databaseName", $databaseUser, $databasePassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $item = $_POST["item"];
        $Pc = $_POST["Pc"];
        $price = $_POST["price"];

        $sql = "INSERT INTO scgOrders (item, Pc, price) VALUES (:item, :Pc, :price)";

        $stmt = $pdo->prepare($sql);

        // You need to provide the userID value. Replace '123' with the actual userID.
        $userID = 123;

        $stmt->bindParam(':item', $item);
        $stmt->bindParam(':Pc', $Pc);
        $stmt->bindParam(':price', $price);

        $stmt->execute();

        echo "Data inserted successfully!";
    } else {
        echo "Form not submitted.";
    }

    $pdo = null; // Close the database connection
} catch (PDOException $e) {
    // Handle any database connection errors here
    echo "Connection failed: " . $e->getMessage();
}
?>
