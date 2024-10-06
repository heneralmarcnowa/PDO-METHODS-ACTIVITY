<?php
// fetch_all.php
// this code is designed to fetch all records from a database table named Members and display them
require 'dbconfig.php';
 
try {
    // Prepare the SQL statement
    $stmt = $pdo->prepare("SELECT * FROM Members");
    // Execute the statement
    $stmt->execute();
    // Fetch all records
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
    echo "<pre>";
    print_r($result);
    echo "</pre>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>