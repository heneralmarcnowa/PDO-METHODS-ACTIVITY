<?php
// insert_record.php
// this code is designed to insert a new record into a database table named Members
require 'dbconfig.php';
 
try {
    // Prepare the SQL statement
    $stmt = $pdo->prepare("INSERT INTO Members (MemberID, FirstName, LastName, DateOfBirth, ContactInfo, MembershipID, MembershipStartDate, MembershipEndDate) VALUES (:MemberID, :FirstName, :LastName, :DateOfBirth, :ContactInfo, :MembershipID, :MembershipStartDate, :MembershipEndDate)");
    // Bind the parameters
    $stmt->bindParam(':MemberID', $MemberID);
    $stmt->bindParam(':FirstName', $FirstName);
    $stmt->bindParam(':LastName', $LastName);
    $stmt->bindParam(':DateOfBirth', $DateOfBirth);
    $stmt->bindParam(':ContactInfo', $ContactInfo);
    $stmt->bindParam(':MembershipID', $MembershipID);
    $stmt->bindParam(':MembershipStartDate', $MembershipStartDate);
    $stmt->bindParam(':MembershipEndDate', $MembershipEndDate);
 
    // Data that we will insert
    $MemberID = 21;
    $FirstName = 'Jayson Bryan';
    $LastName = 'Alferez';
    $DateOfBirth = '2000-03-05';
    $ContactInfo = 'jaysonbryanalferez@gmail.com';
    $MembershipID = 1;
    $MembershipStartDate = '2024-01-01';
    $MembershipEndDate = '2024-02-01';
 
    // Execute the statement
    $stmt->execute();
    echo "New record created successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>