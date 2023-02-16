<?php
include('server.php');

// Get form data
$name_villa = $_POST["name_villa"];
$content = $_POST["content"];
$category = $_POST["category"];
$bedrooms = $_POST["bedrooms"];
$guests = $_POST["guests"];
$top = $_POST["top"];
$url = $_POST["url"];



// Check if the given top value already exists in the database
$sql_check_top = "SELECT * FROM villa_data WHERE top = '$top' LIMIT 1";
$result = $conn->query($sql_check_top);
if ($result->num_rows > 0) {
    // Given top value already exists, show alert message and redirect to the form page
    echo "<script>alert('มีแล้วใส่ซ้ำมาทำไม ห้วย!!!!'); window.location.href = 'admin.php';</script>";
    exit();
}

// Save uploaded image
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);

if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

if (!is_uploaded_file($_FILES["img"]["tmp_name"]) || !move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
    echo "Sorry, there was an error uploading your file.";
} else {
    echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";

    // Insert data into database
    $sql = "INSERT INTO villa_data (name_villa, content, category, bedrooms, guests,  img,top, url)
    VALUES ('$name_villa', '$content', '$category', '$bedrooms', '$guests', '$target_file', '$top' ,'$url')";

    if ($conn->query($sql) === TRUE) {
        // Insertion successful
        echo "<script>alert('New record created successfully'); window.location.href = 'admin.php';</script>";
    } else {
        // Insertion failed
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
