<?php
// fetch_single.php
// this code is designed to fetch a single record from a database table named Members based on a specific MemberID and display it
require 'dbconfig.php';
 
try {
    // Prepare the SQL statement
    $stmt = $pdo->prepare("SELECT * FROM Members WHERE MemberID = :id");
    // Bind the parameter
    $stmt->bindParam(':id', $id);
    // Id to fetch
    $id = 1;
    // Execute the statement
    $stmt->execute();
    // Fetch the record
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
 
    echo "<pre>";
    print_r($result);
    echo "</pre>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>