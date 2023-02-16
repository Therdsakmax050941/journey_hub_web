<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Journey Admin - Edit Villa</title>

  <!-- Add Bootstrap CSS stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <header>
    <div style="text-align: center;" >
    <h1>Edit Villa <?php $id = $_GET['id']; echo "  ID:  ".$id ?></h1>
    <h4>แก้ไขข้อมูลบ้านและรายละเอียดอะ ยูโน้</h4>
    </div>
    <br><br><br>
  </header>

  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form method="post" action="admin_db.php" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name_villa">Name of Villa:</label>
          <input type="text" id="name_villa" name="name_villa" class="form-control">
        </div>

        <div class="form-group">
          <label for="content">Content:</label>
          <textarea id="content" name="content" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="category">หมวดหมู่:</label>
            <select id="category" name="category" class="form-control">
              <option value="">--Select Category--</option>
              <option value="popular">พูลวิลล่ายอดนิยม</option>
              <option value="cheap">พูลวิลล่าราคาถูก</option>
              <option value="all">พูลวิลล่าทั้งหมด</option>
              <option value="promo">โปรโมชั่น</option>
            </select>
          </div>

          <div class="form-group">
            <label for="bedrooms">จำนวนห้องนอน:</label>
            <select id="bedrooms" name="bedrooms" class="form-control">
              <option value="">--Select Category--</option>
              <option value="bedrooms-two">2 ห้องนอน</option>
              <option value="bedrooms-three">3 ห้องนอน</option>
              <option value="bedrooms-four">4 ห้องนอน</option>
              <option value="bedrooms-five">5 ห้องนอน</option>
              <option value="bedrooms-six+">6 ห้องนอนขึ้นไป</option>
            </select>
          </div>

          <div class="form-group">
            <label for="guests">จำนวนคน:</label>
            <select id="guests" name="guests" class="form-control">
              <option value="">--Select Category--</option>
              <option value="guests-ten"> 10 ท่าน </option>
              <option value="guests-fifteen">15 ท่าน</option>
              <option value="guests-twenty">20 ท่าน</option>
            </select>
          </div>
        <div class="form-group">
          <label for="top">อันดับที่จะโชว์:</label>
          <input type="number" id="top" name="top" class="form-control">
        </div>

        <div class="form-group">
          <label for="url">URL: * ถ้าไม่มีใส่ #</label>
          <input type="text" id="url" name="url" class="form-control">
        </div>

        <div class="form-group">
          <label for="img">Image:</label>
          <input type="file" id="img" name="img" class="form-control">
        </div>

          <input type="submit" value="Submit" class="btn btn-primary btn-block mt-3">
        </form>
      </div>
    </div>
  </div>
        </body>
</html>
<?php
  include('server.php');

  // Retrieve villa data from database
  $id = $_GET['id'];
  $sql = "SELECT * FROM villa_data WHERE id = $id";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    $villa = $result->fetch_assoc();
  } else {
    echo "Villa not found";
  }

  // Handle form submission
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name_villa = $_POST["name_villa"];
    $content = $_POST["content"];
    $category = $_POST["category"];
    $bedrooms = $_POST["bedrooms"];
    $guests = $_POST["guests"];
    $top = $_POST["top"];
    $url = $_POST["url"];

    // Check if new image uploaded
    if (isset($_FILES["img"]) && is_uploaded_file($_FILES["img"]["tmp_name"])) {
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["img"]["name"]);

      if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
      }

      if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
        $img = $target_file;
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }

    // Update villa data in database
    $sql = "UPDATE villa_data SET name_villa = '$name_villa', content = '$content', category = '$category', bedrooms = '$bedrooms' , guests = '$guests', img = '$img', top = '$top', url = '$url' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // Insertion successful
        echo "<script>alert('Villa updated successfully'); window.location.href = 'admin.php';</script>";
    } else {
        // Insertion failed
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

  $conn->close();
?>

        