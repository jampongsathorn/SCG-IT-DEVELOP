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

// Get the current year and month
$currentYear = date("Y");
$currentMonth = date("m");

// SQL query to retrieve the total sum for the current month
$sqlMonthly = "SELECT SUM(Pc*price) AS totalSum FROM scgOrders WHERE YEAR(orderDate) = $currentYear AND MONTH(orderDate) = $currentMonth";
$resultMonthly = $conn->query($sqlMonthly);

$monthlyEarn = 0;

if ($resultMonthly->num_rows > 0) {
    $row = $resultMonthly->fetch_assoc();
    $monthlyEarn = $row["totalSum"];
}

// SQL query to retrieve the total sum for the entire year
$sqlAnnual = "SELECT SUM(Pc*price) AS totalSum FROM scgOrders WHERE YEAR(orderDate) = $currentYear";
$resultAnnual = $conn->query($sqlAnnual);

$annualEarn = 0;

if ($resultAnnual->num_rows > 0) {
    $row = $resultAnnual->fetch_assoc();
    $annualEarn = $row["totalSum"];
}

// SQL query to retrieve top seller product
$sqlTopSeller = "SELECT item AS topSeller, SUM(Pc*price) AS totalSum FROM scgOrders GROUP BY item ORDER BY totalSum DESC";
$resultTopSeller = $conn->query($sqlTopSeller);

$topSeller = "Material 000066";
$topSellerValue = '$10,000';

if ($resultTopSeller->num_rows > 0) {
    $row = $resultTopSeller->fetch_assoc();
    $topSeller = $row["topSeller"];
    $topSellerValue = $row["totalSum"];
}

$conn->close();

header('Content-Type: application/json');
echo json_encode(["monthlyEarn" => $monthlyEarn, "annualEarn" => $annualEarn, "topSeller" => $topSeller, "topSellerValue" => $topSellerValue]);
?>
