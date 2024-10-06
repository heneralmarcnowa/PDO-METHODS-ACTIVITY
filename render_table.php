<?php
// render_table.php
// this code is designed to fetch all records from a Members table in a database and render them as an HTML table
require 'dbconfig.php';

try {
    // Prepare the SQL statement
    $stmt = $pdo->prepare("SELECT * FROM Members");
    // Execute the statement
    $stmt->execute();
    // Fetch all records
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // HTML and CSS for the table
    echo "<style>
            table, th, td {
                border: 1px solid black;
                border-radius: 10px;
                padding: 8px;
                text-align: left;
            }
            table {
                border-collapse: collapse;
                width: 100%;
                margin-top: 20px;
            }
            th {
                background-color: #f2f2f2;
            }
          </style>";

    echo "<table>";
    echo "<tr><th>MemberID</th><th>FirstName</th><th>LastName</th><th>DateOfBirth</th><th>ContactInfo</th><th>MembershipID</th><th>MembershipStartDate</th><th>MembershipEndDate</th></tr>";

    // Loop through the result and create table rows
    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>" . $row['MemberID'] . "</td>";
        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['LastName'] . "</td>";
        echo "<td>" . $row['DateOfBirth'] . "</td>";
        echo "<td>" . $row['ContactInfo'] . "</td>";
        echo "<td>" . $row['MembershipID'] . "</td>";
        echo "<td>" . $row['MembershipStartDate'] . "</td>";
        echo "<td>" . $row['MembershipEndDate'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>