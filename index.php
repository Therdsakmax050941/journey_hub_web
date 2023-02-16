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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <title>Journey บ้านพักพูลวิลล่า</title>
</head>

<header>
  <nav class="navbar navbar-expand-lg navbar-light header_bg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="margin-left: 500px;"><img src="/img/logo2.png" width="120px"
          height="80px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">หน้าแรก</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-link active" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              ที่พัก
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">link1</a></li>
              <li><a class="dropdown-item" href="#">link2</a></li>
              <li><a class="dropdown-item" href="#">link3</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-link active" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              เจอนี่ไกด์ รีวิว
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">link3</a></li>
              <li><a class="dropdown-item" href="#">link2</a></li>
              <li><a class="dropdown-item" href="#">link1</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><img src="/img/facebook.svg"
                width="20px">&nbsp;เจอนี่ฮับ ที่พักเขาใหญ่</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><img src="/img/line.svg" width="30px">&nbsp;ID Line
              : @800rlthr</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><img
                src="https://img.icons8.com/neon/30/null/ringer-volume.png" />&nbsp;โทร :
              0946989991</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<body>
  <?php include('villa_db.php') ?>
  <div class="w3-container header_body" style="margin-top: 90px; text-align: center "></div>
  <br><br>
  <h3> Filtter</h3>

  <div id="myBtnContainer">
    <h3>หมวดหมู่ :</h3>
    <button class="btn filter-btn" onclick="filterSelection('popular')"> พูลวิลล่ายอดนิยม</button>
    <button class="btn filter-btn" onclick="filterSelection('cheap')"> พูลวิลล่าราคาถูก</button>
    <button class="btn filter-btn" onclick="filterSelection('all')"> พูลวิลล่าทั้งหมด</button>
    <button class="btn filter-btn" onclick="filterSelection('promo')"> โปรโมชั่น</button>
  </div>
  <div id="myBtnContainer">
    <h3>จำนวนห้องนอน :</h3>
    <button class="btn filter-btn"  onclick="filterSelection('bedrooms-two')"> 2 ห้องนอน</button>
    <button class="btn filter-btn"  onclick="filterSelection('bedrooms-three')"> 3 ห้องนอน</button>
    <button class="btn filter-btn"  onclick="filterSelection('bedrooms-four')"> 4 ห้องนอน</button>
    <button class="btn filter-btn"  onclick="filterSelection('bedrooms-five')"> 5 ห้องนอน</button>
    <button class="btn filter-btn"  onclick="filterSelection('bedrooms-six+')"> 6 ห้องนอนขึ้นไป</button>
  </div>
  <div id="myBtnContainer">
    <h3>จำนวนคน :</h3>
    <button class="btn filter-btn 6+" data-guests="guests-10" onclick="filterSelection('guests-ten')"> 10 ท่าน </button>
    <button class="btn filter-btn" data-guests="guests-15" onclick="filterSelection('guests-fifteen')"> 15 ท่าน</button>
    <button class="btn filter-btn" data-guests="guests-20" onclick="filterSelection('guests-twenty')"> 20 ท่าน</button>
  </div>
  <div class="w3-row-padding" style="margin-top: 90px;">
    <?php foreach ($villas as $villa): ?>
      <div
        class="w3-col l3 m6 w3-margin-bottom filter-item filterDiv <?= $villa["category"] ?>     <?= $villa["bedrooms"] ?>     <?= $villa["guests"] ?>">
        <div class="w3-card">
          <?php if (!empty($villa["img"])): ?>
            <img src='<?= $villa["img"] ?>' style="width:100%">
          <?php endif; ?>
          <div class="w3-container">
            <br>
            <h4>
              <?= $villa["name_villa"] ?>
            </h4>
            <p>
              <?= $villa["content"] ?>
            </p>
            <a href="<?= $villa['url'] ?>" class="btn btn-primary font">รายละเอียด</a>
            <p> </p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <!--SCRIPT FILTER -->
  <script>
    filterSelection("all")
    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("filterDiv");
      if (c == "all") c = "";
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }

    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
      }
    }

    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
      }
      element.className = arr1.join(" ");
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
  </script>
</body>

</html>