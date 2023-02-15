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
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <script src="/JS/screen_small.js"></script>
  <title></title>
</head>
<header>
  <div class="w3-top">
    <div class="w3-bar  w3-card  w3-large header_bg">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large"
        href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="#" class="w3-bar-item w3-button w3-padding-large" style="margin-left: 500px;;"><img src="/img/logo2.png"
          width="100px" height="80px"></a>

      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"
        style="margin-left: 50px; margin-top: 20px;">หน้าแรก</a>

      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" style="margin-top: 20px;"
        onclick="toggleAccommodationMenu()">ที่พัก <i class="fa fa-caret-down"></i></a>

      <div id="accommodationMenu" class="w3-bar-block w3-hide w3-padding-large w3-medium">
        <a href="#" class="w3-bar-item w3-button w3-hover-white">Link 1</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-white">Link 2</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-white">Link 3</a>
      </div>

      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" style="margin-top: 20px;"
        onclick="toggleGuideMenu()">เจอนี่ไกด์ รีวิว <i class="fa fa-caret-down"></i></a>

      <div id="guideMenu" class="w3-bar-block w3-hide w3-padding-large w3-medium">
        <a href="#" class="w3-bar-item w3-button w3-hover-white">Link 1</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-white">Link 2</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-white">Link 3</a>
      </div>



      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" style="margin-top: 20px;">
        <img src="/img/facebook.svg" width="30px">เจอนี่ฮับ ที่พักเขาใหญ่</a>


      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"
        style="margin-top: 20px;"><img src="/img/line.svg" width="30px">ID Line : @800rlthr</a>


      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"
        style="margin-top: 20px;"><img src="https://img.icons8.com/neon/30/null/ringer-volume.png" />โทร :
        0946989991</a>

    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
      <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
      <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
      <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
      <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
    </div>
  </div>
  <div class="header"></div>
</header>
<script>
  function toggleAccommodationMenu() {
  var x = document.getElementById("accommodationMenu");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

function toggleGuideMenu() {
  var x = document.getElementById("guideMenu");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

</script>


<body>
  <div class="w3-container header_body" style="margin-top: 90px; text-align: center "></div>

  <h1> Filtter</h1>


  </div>
  <?php include('villa_db.php') ?>
  <div class="w3-row-padding" style="margin-top: 90px;">
    <?php foreach ($villas as $villa): ?>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="<?= $villa['url'] ?>">
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
            </div>
          </div>
        </a>

      </div>
    <?php endforeach; ?>
  </div>
</body>

</html>