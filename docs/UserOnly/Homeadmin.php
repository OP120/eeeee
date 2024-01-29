<?php
   session_start();
   require_once 'config/db.php';
   if(!isset($_SESSION['userid'])) {
    header('location: Login.php');
   }else {
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./dropdown.css">

  </head>
<body>
    <div class="container-fluid p-0 ">
        <div class="navbar navbar-expand-lg navbar-light">
          
              <a class="navbar-brand " href="">
                <img src="https://sv1.img.in.th/UEjBfu.png" alt="" width="70" height="70" class="overflow-hidden ms-3 ">
              </a>
              <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse ms-3 ps-3 " id="navbarNav">
                <ul class="navbar-nav fs-4 mx-auto fw-semibold ps-3">
                  <li class="nav-item ms-3 ">
                    <a class="nav-link text-light" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item ms-3 ">
                    <div class="dropdown">
                      <a class="nav-link dropdown-toggle text-light" href="#" id="dropdownMenuButton" type="button"  data-mdb-toggle="dropdown"aria-expanded="false">Store</a>
                      <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                      <li><a class="dropdown-item fw-bold " href="">Random</a></li>
                      <li><a class="dropdown-item fw-bold" href="">Steam</a></li>
                      <li><a class="dropdown-item fw-bold" href="">Fortnite</a></li>
                      <li><a class="dropdown-item fw-bold" href="">Xbox</a></li>
                      <li><a class="dropdown-item fw-bold" href="">Origin</a></li>
                      <li><a class="dropdown-item fw-bold" href="">CS:GO</a></li>
                      <li><a class="dropdown-item fw-bold" href="">Platform</a></li>
                    </ul>
                  </div>
                  </li>
                  <li class="nav-item ms-3">
                    <a class="nav-link text-light" href="#">Topup</a>
                  </li>
                  <li class="nav-item ms-3">
                    <a class="nav-link text-light" href="#">Content</a>
                  </li>
                  <li class="nav-item ms-3">
                    <a class="nav-link text-light" href="#">Topup code</a>
                  </li>
                </ul>
                
               
                <ul class="navbar-nav fs-5 sm-auto text-center me-3">
                  <li class="nav-item m-2 mx-auto">
                    <a class="nav-link text-light" href="Register.php">สมัครสมาชิก</a>
                  </li>
                  <li class="nav-item btn btn-outline-dark fs-5 mx-auto">
                    <a class="nav-link text-light" href="Login.php">เข้าสู่ระบบ</a>
                  </li>
                </ul>
              </div>
            
          </div>
    </div>
     <div class="container-fluid position-absolute">
      <div class="row">
      <div class="col-9 col-xl-12 bg-darker page-title-overlap">

      </div>
      </div>
    </div> 
    <div class="container p-2">
      <div class="row">
        <div class="col-12 col-xl-12 page-title-overlap pt-0 pt-sm-3 overflow-hidden ">
          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://etgeekera.files.wordpress.com/2013/06/xbox-one-logo-banner.png?w=788" class="d-flexs w-100 h-100 align-items-center" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://www.vortez.net/contentteller.php?ct=news&action=file&id=18653" class="d-flexs w-100 h-100 align-items-center " alt="...">
              </div>
              <!--<div class="carousel-item">
                <img src="https://www.allconnect.com/wp-content/uploads/2020/02/netflix-review-hero-image-0224.png" class="d-block w-100 h-100" alt="...">
              </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container p-4 mb-lg-5">
      <div class="row ">
        <div class="card mt-3 rounded-5">
          <div class="card-body ms-0">

            <div class=" col-xl-12 col-12 mt-3 text-center mb-5 fs-2">สินค้าแนะนำ</div>
            <div class="row mt-3 mx-3 ">
           <div class=" col-xl-3 col-12 text-center fs-1 overflow-hidden rounded-2 mt-3">
            <a href="Steam Standard.html"><img src="https://images.g2a.com/1024x768/1x1x0/random-1-key-steam-key-global-i10000001534005/b8f17813249d4c619aed6c52" alt="" width="250" height="300" class="rounded-3 img-fluid"></a>
            <div class="mt-4">
              <a href="Steam Standard.html" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Random 1 Key Steam Standard</p></a>
            </div>
            <div class="fs-6 d-flex text-dark text-body-secondary">
              <i class="bi bi-box-fill"></i>
              <p class="ms-2 fw-normal">สินค้าคงเหลือ 99999+</p>
            </div>
            <div class="fs-4 text-info fw-semibold rounded-2" style="background-color: rgb(217, 253, 250);">ราคาสินค้า 100 Point</div>
            </div>
            
           <div class=" rounded-2 col-xl-3  col-12  text-center fs-1 mt-3">
            <a href="Steam Hot.html"><img src="https://images.g2a.com/1024x768/1x1x0/random-hot-deal-1-key-pc-steam-key-global-i10000337843001/7ff7aaeb58474a9a860ff6cf" alt="" width="250" height="300" class="rounded-3 img-fluid"></a>
            <div class="mt-4">
              <a href="Steam Hot.html" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Random 1 Key Steam Hot Deal</p></a>
            </div>
            <div class="fs-6 d-flex text-dark text-body-secondary">
              <i class="bi bi-box-fill"></i>
              <p class="ms-2 fw-normal">สินค้าคงเหลือ 99999+</p>
            </div>
            <div class="fs-4 text-info fw-semibold rounded-2" style="background-color: rgb(217, 253, 250);">ราคาสินค้า 100 Point</div>
           </div>
           <div class=" rounded-2 col-xl-3  col-12  text-center fs-1 mt-3">
            <a href="Steam Gand.html"><img src="https://images.g2a.com/1024x768/1x1x0/grand-random-1-key-steam-key-global-i10000338585002/ff70318a9fc4486a9df58c15" alt="" width="250" height="300" class="rounded-3 img-fluid"></a>
            <div class="mt-4">
              <a href="Steam Gand.html" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Random 1 Key Steam Grand</p></a>
            </div>
            <div class="fs-6 d-flex text-dark text-body-secondary">
              <i class="bi bi-box-fill"></i>
              <p class="ms-2 fw-normal">สินค้าคงเหลือ 99999+</p>
            </div>
            <div class="fs-4 text-info fw-semibold rounded-2" style="background-color: rgb(217, 253, 250);">ราคาสินค้า 100 Point</div>
           </div>
           <div class=" rounded-2 col-xl-3  col-12  text-center fs-1 mt-3">
            <a href="Steam Collectible.html"><img src="https://images.g2a.com/1024x768/1x1x0/random-steam-collectible-1-key-steam-key-global-i10000336673001/01b851fa35954ddcae462f7c" alt="" width="250" height="300" class="rounded-3 img-fluid"></a>
            <div class="mt-4">
              <a href="Steam Collectible.html" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Random 1 Steam Collectible Card</p></a>
            </div>
            <div class="fs-6 d-flex text-dark text-body-secondary">
              <i class="bi bi-box-fill"></i>
              <p class="ms-2 fw-normal ">สินค้าคงเหลือ 99999+</p>
            </div>
            <div class="fs-4 text-info fw-semibold rounded-2" style="background-color: rgb(217, 253, 250);">ราคาสินค้า 300 Point</div>
           </div>
           
           <div class=" rounded-2 col-xl-3  col-12  text-center fs-1 mt-3">
            <a href="Random.VR.html"><img src="https://images.g2a.com/1024x768/1x1x0/random-vr-1-key-steam-key-global-i10000337466002/075b771216584d43a46008b1" alt="" width="250" height="300" class="rounded-3 img-fluid"></a>
            <div class="mt-4">
              <a href="Random.VR.html" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Random 1 Virtual Reality Key</p></a>
            </div>
            <div class="fs-6 d-flex text-dark text-body-secondary">
              <i class="bi bi-box-fill"></i>
              <p class="ms-2 fw-normal">สินค้าคงเหลือ 99999+</p>
            </div>
            <div class="fs-4 text-info fw-semibold rounded-2" style="background-color: rgb(217, 253, 250);">ราคาสินค้า 350 Point</div>
           </div>
           <div class=" rounded-2 col-xl-3  col-12  text-center fs-1 mt-3">
            <a href="Fortnite.html"><img src="https://images.g2a.com/1024x768/1x1x0/random-fortnite-skin-item-pc-epic-games-key-global-i10000302888001/f4d34583e6b94f40ae79193c" alt="" width="250" height="300" class="rounded-3 img-fluid"></a>
            <div class="mt-4">
              <a href="Fortnite.html" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Random 1 IT-SK Fortnite</p></a>
            </div>
            <div class="fs-6 d-flex text-dark text-body-secondary">
              <i class="bi bi-box-fill"></i>
              <p class="ms-2 fw-normal">สินค้าคงเหลือ 99999+</p>
            </div>
            <div class="fs-4 text-info fw-semibold rounded-2" style="background-color: rgb(217, 253, 250);">ราคาสินค้า 300 Point</div>
           </div>
           <div class=" rounded-2 col-xl-3  col-12  text-center fs-1 mt-3">
            <a href="CSGO.html"><img src="https://images.g2a.com/1024x768/1x1x0/counter-strike-global-offensive-random-mil-spec-skin-by-droplandnet-key-global-i10000033467001/5d13424c46177c20f16711c2" alt="" width="250" height="300" class="rounded-3 img-fluid"></a>
            <div class="mt-4">
              <a href="CSGO.html" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Random 1 CS:GO Mil-Spec Skin </p></a>
            </div>
            <div class="fs-6 d-flex text-dark text-body-secondary">
              <i class="bi bi-box-fill"></i>
              <p class="ms-2 fw-normal">สินค้าคงเหลือ 99999+</p>
            </div>
            <div class="fs-4 text-info fw-semibold rounded-2" style="background-color: rgb(217, 253, 250);">ราคาสินค้า 200 Point</div>
           </div>
           <div class="  rounded-2 col-xl-3  col-12  text-center fs-1 mt-3">
            <a href="Ultimate Random.html"><img src="https://images.g2a.com/1024x768/1x1x0/ultimate-random-pc-microkey-key-global-i10000305567001/9564230eb4fc457fb4a1e3b4" alt="" width="250" height="300" class="rounded-3 img-fluid"></a>
            <div class="mt-4">
              <a href="Ultimate Random.html" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Ultimate Random - Microkey Key</p></a>
            </div>
            <div class="fs-6 d-flex text-dark text-body-secondary">
              <i class="bi bi-box-fill"></i>
              <p class="ms-2 fw-normal">สินค้าคงเหลือ 99999+</p>
            </div>
            <div class="fs-4 text-info fw-semibold rounded-2" style="background-color: rgb(217, 253, 250);">ราคาสินค้า 500 Point</div>
           </div>
           </div>
          </div>
          
      </div>
        </div>
        
    </div>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
<?php }?>