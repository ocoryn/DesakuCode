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
                  <img src="/global/img/courses banner/html.png" class="card-img-top rounded" alt="...">
                  <div class="card-body">
                    <h5 class="card-title title-kartu">Basic HTML!</h5>
                    <h6 class="desc-materi">
                      <span>
                        <p>In this class, we will learn how to create a website from scratch using HTML. With HT<span id="dots">... <button onclick="myFunction()" id="myBtn">Read more</button></span><span id="more">ML, we can create the structure and framework of a website consisting of several elements. HTML also functions as a content viewer on our website. <button onclick="myFunction()" id="myBtn">Read less</button></p>
                      </span>
                    </span>
                    <span class="badge text-bg-success">100%</span>
                     <s> Rp 15.000 IDR</s>
                    </h6>
                    <p class="price">FREE</p>
                    <div class="d-grid gap-2 mt-3">
                      <a href="/courses/basic/html" class="btn btn-dark" type="button">Details</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-gexio">
                  <img src="/global/img/courses banner/css.png" class="card-img-top rounded" alt="...">
                  <div class="card-body">
                    <h5 class="card-title title-kartu">Basic CSS!</h5>
                    <h6 class="desc-materi">
                    <span>
                        <p>In this class we will learn how to style every element on a website using CSS<span id="dots2">... <button onclick="myFunction2()" id="myBtn2">Read more</button></span><span id="more2">, such as giving color to elements, positioning elements, providing background images, making the display responsive, and so on. With CSS, our website will become more beautiful, attractive, and the content in it will be easier for users to understand. <button onclick="myFunction2()" id="myBtn2">Read less</button></p>
                      </span>
                    <span class="badge text-bg-success">100%</span>
                     <s> Rp 15.000 IDR</s>
                    </h6>
                    <p class="price">FREE</p>
                    <div class="d-grid gap-2 mt-3">
                      <a href="/courses/basic/css" class="btn btn-dark" type="button">Details</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-gexio">
                  <img src="/global/img/courses banner/js.png" class="card-img-top rounded" alt="...">
                  <div class="card-body">
                    <h5 class="card-title title-kartu">Basic JS!</h5>
                    <h6 class="desc-materi">
                    <span>
                        <p>In this class we will learn how to make a website more interactive by adding <span id="dots3">... <button onclick="myFunction3()" id="myBtn3">Read more</button></span><span id="more3">some programs written using JavaScript. With JavaScript, we can create a website to process data, display data, make elements on the website more communicative, and so on, so that a website can 'interact' with users. <button onclick="myFunction3()" id="myBtn3">Read less</button></p>
                      </span>
                    <span class="badge text-bg-success">100%</span>
                     <s> Rp 15.000 IDR</s>
                    </h6>
                    <p class="price">FREE</p>
                    <div class="d-grid gap-2 mt-3">
                      <a href="/courses/basic/js" class="btn btn-dark" type="button">Details</a>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </section>
</body>

<style>
  #more {
    display: none;
}

.card-gexio {
  transition: all .2s ease-in-out;
}

.card-gexio:hover {
    transform: scale(1.1) !important;
}

#myBtn {
  opacity: 60%;
    outline: none !important;
    box-shadow: none !important;
    border: 0 !important;
    font-size: 15px;
}

  #more2 {
    display: none;
}

#myBtn2 {
  opacity: 60%;
    outline: none !important;
    box-shadow: none !important;
    border: 0 !important;
    font-size: 15px;
}
  #more3 {
    display: none;
}

#myBtn3 {
  opacity: 60%;
    outline: none !important;
    box-shadow: none !important;
    border: 0 !important;
    font-size: 15px;
}
</style>

<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>

<script>
  function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
</script>

<script>

function myFunction2() {
var dots = document.getElementById("dots2");
var moreText = document.getElementById("more2");
var btnText = document.getElementById("myBtn2");

if (dots.style.display === "none") {
  dots.style.display = "inline";
  btnText.innerHTML = "Read more";
  moreText.style.display = "none";
} else {
  dots.style.display = "none";
  btnText.innerHTML = "Read less";
  moreText.style.display = "inline";
}}
</script>
<script>

function myFunction3() {
var dots = document.getElementById("dots3");
var moreText = document.getElementById("more3");
var btnText = document.getElementById("myBtn3");

if (dots.style.display === "none") {
  dots.style.display = "inline";
  btnText.innerHTML = "Read more";
  moreText.style.display = "none";
} else {
  dots.style.display = "none";
  btnText.innerHTML = "Read less";
  moreText.style.display = "inline";
}}
</script>
</html>

<?php 
}else{
     header("Location: /auth/login.php");
     exit();
}
 ?>