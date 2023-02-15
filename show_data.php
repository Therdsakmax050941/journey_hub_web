<?php include('server.php'); ?>

<?php
// Retrieve all villa data
$sql = "SELECT * FROM villa_data";
$result = $conn->query($sql);
$villas = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $villas[] = $row;
    }
}

$conn->close();
?>