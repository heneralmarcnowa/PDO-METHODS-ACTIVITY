<?php
// update_record.php
// this code will modify the record with MemberID 1, setting the new values for FirstName, LastName, DateOfBirth, ContactInfo, MembershipID, MembershipStartDate, and MembershipEndDate
require 'dbconfig.php';

try {
    // Prepare the SQL statement
    $stmt = $pdo->prepare("UPDATE Members SET FirstName = :FirstName, LastName = :LastName, DateOfBirth = :DateOfBirth, ContactInfo = :ContactInfo, MembershipID = :MembershipID, MembershipStartDate = :MembershipStartDate, MembershipEndDate = :MembershipEndDate WHERE MemberID = :id");
    
    // Bind the parameters
    $stmt->bindParam(':FirstName', $FirstName);
    $stmt->bindParam(':LastName', $LastName);
    $stmt->bindParam(':DateOfBirth', $DateOfBirth);
    $stmt->bindParam(':ContactInfo', $ContactInfo);
    $stmt->bindParam(':MembershipID', $MembershipID);
    $stmt->bindParam(':MembershipStartDate', $MembershipStartDate);
    $stmt->bindParam(':MembershipEndDate', $MembershipEndDate);
    $stmt->bindParam(':id', $id);

    // Data that we will update
    $FirstName = 'Michael';
    $LastName = 'Jackson';
    $DateOfBirth = '2003-05-01';
    $ContactInfo = 'michaeljackson123@gmail.com';
    $MembershipID = 3;
    $MembershipStartDate = '2024-10-06';
    $MembershipEndDate = '2025-04-06';
    $id = 1;

    // Execute the statement
    $stmt->execute();
    echo "Record updated successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>