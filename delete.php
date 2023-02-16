<?php
// Start a session (if not already started)
include('server.php');
// Check if the user is logged in

// Get the ID of the villa to be deleted (from the URL)
$villa_id = $_GET['id'];

// Delete the villa from the database (assuming you have a database connection)
// This code assumes that the ID is a valid integer (you should sanitize the input in production code)
$delete_query = "DELETE FROM villa_data WHERE id = $villa_id";
$result = mysqli_query($conn, $delete_query);

// Check if the deletion was successful
if ($result) {
    // Redirect the user to the villas page
    echo "<script>alert('ลบเรียบร้อย!!!!'); window.location.href = 'admin.php';</script>";
    
} else {
    // Display an error message
    echo "Error deleting villa";
}
?>
