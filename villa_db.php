<?php
include('server.php');

// Retrieve all villa data sorted by time added
$sql = "SELECT * FROM villa_data ORDER BY time_add DESC";
$result = $conn->query($sql);
$villas = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $villas[] = $row;
    }
}

$conn->close();
?>