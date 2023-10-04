<?php
// Insert from website to database
$host = "sql12.freesqldatabase.com";
$databaseName = "sql12650860";
$databaseUser = "sql12650860";
$databasePassword = "UILQH2ZyNU";
$port = 3306;

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$databaseName", $databaseUser, $databasePassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the request method is POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Receive the JSON data from the POST request
        $jsonData = file_get_contents("php://input");

        // Decode the JSON data into an associative array
        $data = json_decode($jsonData, true);

        // Extract data from the associative array
        $userID = $data["userID"];
        $orderDate = $data["orderDate"];
        $items = $data["items"];
        $pcs = $data["pcs"];
        $prices = $data["prices"];

        // Loop through the items and insert each item into the database
        for ($i = 0; $i < count($items); $i++) {
            $item = $items[$i];
            $pc = $pcs[$i];
            // Remove the "$" symbol and convert the price to a numeric value
            $price = floatval(str_replace("$", "", $prices[$i]));

            // Prepare the SQL statement
            $sql = "INSERT INTO scgOrders (userID, orderDate , item, Pc, price) VALUES (:userID, :orderDate, :item, :Pc, :price)";

            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':userID', $userID);
            $stmt->bindParam(':orderDate', $orderDate);
            $stmt->bindParam(':item', $item);
            $stmt->bindParam(':Pc', $pc);
            $stmt->bindParam(':price', $price);

            // Execute the SQL statement
            $stmt->execute();
        }

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
