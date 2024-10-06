<?php
// delete_record.php
// this code is designed to delete a record from a database table named Members based on a specific MemberID
require 'dbconfig.php';
 
try {
    // Prepare the SQL statement
    $stmt = $pdo->prepare("DELETE FROM Members WHERE MemberID = :id");
    // Bind the parameter
    $stmt->bindParam(':id', $id);
    // Id to delete
    $id = 21;
    // Execute the statement
    $stmt->execute();
    echo "Record deleted successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>