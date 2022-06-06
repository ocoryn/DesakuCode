<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Qlox</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./global/css/global.css">
    <link rel="stylesheet" href="./global/css/navbar.css">
    <link rel="stylesheet" href="./global/css/banner.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Qlox</a>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a href="/profile.php" class="btn btn-outline-dark btn-gexio" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Profile">
                    <i class="fa-duotone fa-address-card"></i>
                </a>
                <a href="/auth/logout.php" class="btn btn-outline-dark btn-gexio" data-bs-toggle="tooltip" data-bs-placement="right" title="Logout">
                    <i class="fa-duotone fa-arrow-up-left-from-circle"></i>
                </a>
              </li>
            </ul>
        </div>
      </nav>
      <section style="margin-top: 5rem;" class="content-banner">
        <div class="container banner-op">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="banner-con text-center">
                        <p class="first-title"><i class="fad fa-code"></i> Qlox</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
          <div class="container pb-5">
            <h1 class="materi-title mt-4 mb-4"><i class="fad fa-compass"></i> Courses</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 gatauk">
              <div class="col">
                <div class="card card-gexio">
                  <img src="https://web.dev/images/courses/design/card.svg" class="card-img-top rounded" alt="...">
                  <div class="card-body">
                    <h5 class="card-title title-kartu">Learn Responsive Design!</h5>
                    <h6 class="desc-materi">
                      Let's explore all aspects of responsive design, learning how to make sites that look great and work well for everyone.
                    </h6>
                    <hr>
                    <p class="price">FREE</p>
                    <div class="d-grid gap-2 mt-3">
                      <a href="/courses/responsive-design" class="btn btn-dark" type="button">Details</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-gexio">
                  <img src="https://web.dev/images/courses/forms/card.svg" class="card-img-top rounded" alt="...">
                  <div class="card-body">
                    <h5 class="card-title title-kartu">Learn Forms!</h5>
                    <h6 class="desc-materi">
                    A course about HTML forms to help you improve your web developer expertise.
                  </h6>
                    <hr>
                    <p class="price">FREE</p>
                    <div class="d-grid gap-2 mt-3">
                      <a href="/courses/forms" class="btn btn-dark disabled">Details</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-gexio">
                  <img src="https://web.dev/images/courses/css/card.svg" class="card-img-top rounded" alt="...">
                  <div class="card-body">
                    <h5 class="card-title title-kartu">Learn CSS!</h5>
                    <h6 class="desc-materi">
                    Let’s gleefully breakdown complex aspects of CSS into digestible episodes covering everything from accessibility to z-index.
                    </h6>
                    <hr>
                    <p class="price">FREE</p>
                    <div class="d-grid gap-2 mt-3">
                      <a href="/courses/css" class="btn btn-dark disabled">Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
</body>
<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
</html>

<?php 
}else{
     header("Location: /auth/login.php");
     exit();
}
 ?>