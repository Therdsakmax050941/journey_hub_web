<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/CSS/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Athiti">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>Journey บ้านพักพูลวิลล่า</title>
</head>

<header>
<nav class="navbar navbar-expand-lg navbar-light header_bg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="margin-left: 500px;"><img src="/img/logo2.png"
          width="120px" height="80px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">หน้าแรก</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle nav-link active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ที่พัก
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">link1</a></li>
            <li><a class="dropdown-item" href="#">link2</a></li>
            <li><a class="dropdown-item" href="#">link3</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle nav-link active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          เจอนี่ไกด์ รีวิว
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">link3</a></li>
            <li><a class="dropdown-item" href="#">link2</a></li>
            <li><a class="dropdown-item" href="#">link1</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  aria-current="page" href="#"><img src="/img/facebook.svg" width="20px">&nbsp;เจอนี่ฮับ ที่พักเขาใหญ่</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  aria-current="page"href="#"><img src="/img/line.svg" width="30px">&nbsp;ID Line : @800rlthr</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  aria-current="page" href="#" ><img src="https://img.icons8.com/neon/30/null/ringer-volume.png" />&nbsp;โทร :
        0946989991</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>

<body>
  <div class="w3-container header_body" style="margin-top: 90px; text-align: center "></div>

  <h1> Filtter</h1>


  </div>
  <?php include('villa_db.php') ?>
  <div class="w3-row-padding" style="margin-top: 90px;">
    <?php foreach ($villas as $villa): ?>
      <div class="w3-col l3 m6 w3-margin-bottom">
          <div class="w3-card">
            <?php if (!empty($villa["img"])): ?>
              <img src='<?= $villa["img"] ?>' style="width:100%">
            <?php endif; ?>
            <div class="w3-container">
              <h4>
                <?= $villa["name_villa"] ?>
              </h4>
              <p>
                <?= $villa["content"] ?>
              </p>
              <a href="<?= $villa['url'] ?>" class="btn btn-primary font">รายละเอียด</a>
              <p>   </p>
            </div>
          </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>

</html>