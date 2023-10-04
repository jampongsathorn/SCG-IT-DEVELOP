<?php
// Database connection parameters
$host = "sql12.freesqldatabase.com";
$databaseName = "sql12650860";
$databaseUser = "sql12650860";
$databasePassword = "UILQH2ZyNU";
$port = 3306;

$conn = new mysqli($host, $databaseUser, $databasePassword, $databaseName, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$currentYear = date("Y");

$sql = "SELECT DATE_FORMAT(orderDate, '%b') AS month, SUM(Pc*price) AS totalSum FROM scgOrders WHERE YEAR(orderDate) = $currentYear GROUP BY month ORDER BY FIELD(month, 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');";
$result = $conn->query($sql);

$yearOrder = [];
$totalSum = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $month[] = $row["month"];
        $totalSum[] = $row["totalSum"];
    }
}
$conn->close();

header('Content-Type: application/json');
$data = [
    "month" => $month,
    "totalSum" => $totalSum,
];
echo json_encode($data);
?>
