<?php

$host = "sql12.freesqldatabase.com";
$databaseName = "sql12650860";
$databaseUser = "sql12650860";
$databasePassword = "UILQH2ZyNU";
$port = 3306;

$conn = new mysqli($host, $databaseUser, $databasePassword, $databaseName, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT item, SUM(Pc*price) AS totalSum FROM scgOrders GROUP BY item ORDER BY totalSum DESC LIMIT 10";
$result = $conn->query($sql);

$items = [];
$totalSum = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $items[] = $row["item"];
        $totalSum[] = $row["totalSum"];
    }
}
$conn->close();

header('Content-Type: application/json');
$data = [
    "items" => $items,
    "totalSum" => $totalSum,
];
echo json_encode($data);
