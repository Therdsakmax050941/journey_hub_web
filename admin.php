<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Journey Admin</title>

  <!-- Add Bootstrap CSS stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>
  <header>
    <h1 style="text-align: center;">Input Villa into MySQL</h1>
    <h4 style="text-align: center;">ใส่ข้อมูลบ้านและรายละเอียดอะ ยูโน้</h4>
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
          <label for="top">อันดับที่จะโชว์:</label>
          <input type="number" id="top" name="top" class="form-control">
        </div>

        <div class="form-group">
          <label for="url">Name of Villa: *ถ้าไม่มีใส่ #</label>
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

<br><br><br>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name of Villa</th>
              <th>Content</th>
              <th>ลำดับ</th>
              <th>Image</th>
              <th>URL</th>
              <th>Time Added</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php include('show_data.php') ?>
            <?php foreach ($villas as $villa): ?>
              <tr>
                <td><?= $villa["id"] ?></td>
                <td><?= $villa["name_villa"] ?></td>
                <td><?= $villa["content"] ?></td>
                <td><?= $villa["top"] ?></td>
                <td>
                  <?php if (!empty($villa["img"])): ?>
                    <img src="<?= $villa["img"] ?>" width="100" height="100">
                  <?php endif; ?>
                </td>
                <td>
                <?= $villa["url"] ?>
                </td>
                <td><?= $villa["time_add"] ?></td>
                <td>
                <a href="edit.php?id=<?= $villa['id'] ?>" class="btn btn-primary">Edit</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Add Bootstrap JS scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html