<?php
include("dbh-inc.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userID = $_POST["userID"];
    $item = $_POST["item"];
    $Pc = $_POST["Pc"];
    $price = $_POST["price"];

    $sql = "INSERT INTO scgOrders (userID, item, Pc, price) VALUES (:userID, :item, :Pc, :price)";

    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':userID', $userID);
        $stmt->bindParam(':item', $item);
        $stmt->bindParam(':Pc', $Pc);
        $stmt->bindParam(':price', $price);

        $stmt->execute();

        $pdo = null;

        echo "Data inserted successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Form not submitted.";
}
?>
