<?php

session_start();
require_once '../config/db.php';

if(!isset($_SESSION['User.login'])){
  $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ';
  header('location: ..\Guest\Login.php');
}else{

}

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
        <div class="navbar navbar-expand-lg navbar-light bg-light">
          
              <a class="navbar-brand " href="">
                <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcR_U2oh1uZDh9Cs8HEQgzG86IxShzyM5O6vOYnTFML_Kp8yNVHE" alt="" width="70" height="70" class="overflow-hidden ms-3 ">
              </a>
              <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse ms-3 ps-3 " id="navbarNav">
                <ul class="navbar-nav fs-4 mx-auto fw-semibold ps-3">
                  <li class="nav-item ms-3 ">
                    <a class="nav-link " aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item ms-3 ">
                    <div class="dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" type="button"  data-mdb-toggle="dropdown"aria-expanded="false">Store</a>
                      <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                      <li><a class="dropdown-item fw-bold" href="">Random</a></li>
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
                    <a class="nav-link" href="#">Topup</a>
                  </li>
                  <li class="nav-item ms-3">
                    <a class="nav-link" href="#">Content</a>
                  </li>
                  <li class="nav-item ms-3">
                    <a class="nav-link" href="#">Topup code</a>
                  </li>
                </ul>
                
               
                <ul class="navbar-nav fs-5 sm-auto text-center me-3">
                  <li class="nav-item m-2 mx-auto">
                    <a class="nav-link " href="#">สมัครสมาชิก</a>
                  </li>
                  <li class="nav-item btn btn-outline-primary fs-5 mx-auto">
                    <a class="nav-link" href="#">เข้าสู่ระบบ</a>
                  </li>
                </ul>
              </div>
            
          </div>
    </div>
    <div class="container-fluid bg-accent page-title-overlap position-absolute">

    </div>
    <div class="container">
        <div class="row">
          <div class="card mt-3 shadow-lg">
            <div class="card-body">
  
              <div class=" col-xl-12 col-12 mt-3 text-center fs-2">สินค้าทั้งหมด</div>
              <div class="row mt-3 mx-3">
             <div class=" col-xl-3 col-12 text-center fs-1 overflow-hidden alert alert-secondary rounded-2">
              <a href="Login.html"><img src="https://images.g2a.com/1024x768/1x1x0/random-1-key-steam-key-global-i10000001534005/b8f17813249d4c619aed6c52" alt="" width="250" height="300" class="rounded-3 img-fluid"></a>
              <div class="mt-4">
                <a href="" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Random 1 Key Steam Standard</p></a>
              </div>
              <div class="fs-6 d-flex text-dark text-body-secondary">
                <i class="bi bi-box-fill"></i>
                <p class="ms-2 fw-normal">สินค้าคงเหลือ 99999+</p>
              </div>
              <a href="" class="fs-4 text-info fw-semibold" style="background-color: rgb(217, 253, 250);">ราคาสินค้า 100 Point</a>
              </div>
              
             <div class=" alert alert-secondary rounded-2 col-xl-3  col-12  text-center fs-1">
              <a href="Login.html"><img src="https://images.g2a.com/1024x768/1x1x0/random-hot-deal-1-key-pc-steam-key-global-i10000337843001/7ff7aaeb58474a9a860ff6cf" alt="" width="250" height="300" class="rounded-3 img-fluid"></a>
              <div class="mt-4">
                <a href="" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Random 1 Key Steam Hot Deal</p></a>
              </div>
              <div class="fs-6 d-flex text-dark text-body-secondary">
                <i class="bi bi-box-fill"></i>
                <p class="ms-2 fw-normal">สินค้าคงเหลือ 99999+</p>
              </div>
              <div class="fs-4 text-info fw-semibold" style="background-color: rgb(217, 253, 250);">ราคาสินค้า 100 Point</div>
             </div>
             <div class=" alert alert-secondary rounded-2 col-xl-3  col-12  text-center fs-1">
              <a href="Login.html"><img src="https://images.g2a.com/1024x768/1x1x0/grand-random-1-key-steam-key-global-i10000338585002/ff70318a9fc4486a9df58c15" alt="" width="250" height="300" class="rounded-3 img-fluid"></a>
              <div class="mt-4">
                <a href="" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Random 1 Key Steam Grand</p></a>
              </div>
              <div class="fs-6 d-flex text-dark text-body-secondary">
                <i class="bi bi-box-fill"></i>
                <p class="ms-2 fw-normal">สินค้าคงเหลือ 99999+</p>
              </div>
              <div class="fs-4 text-info fw-semibold" style="background-color: rgb(217, 253, 250);">ราคาสินค้า 100 Point</div>
             </div>
             <div class=" alert alert-secondary rounded-2 col-xl-3  col-12  text-center fs-1">
              <a href="Login.html"><img src="https://images.g2a.com/1024x768/1x1x0/random-steam-collectible-1-key-steam-key-global-i10000336673001/01b851fa35954ddcae462f7c" alt="" width="250" height="300" class="rounded-3 img-fluid"></a>
              <div class="mt-4">
                <a href="" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Random 1 Steam Collectible Card</p></a>
              </div>
              <div class="fs-6 d-flex text-dark text-body-secondary">
                <i class="bi bi-box-fill"></i>
                <p class="ms-2 fw-normal">สินค้าคงเหลือ 99999+</p>
              </div>
              <div class="fs-4 text-info fw-semibold" style="background-color: rgb(217, 253, 250);">ราคาสินค้า 300 Point</div>
             </div>
             
             <div class=" alert alert-secondary rounded-2 col-xl-3  col-12  text-center fs-1">
              <a href="Login.html"><img src="https://images.g2a.com/1024x768/1x1x0/random-vr-1-key-steam-key-global-i10000337466002/075b771216584d43a46008b1" alt="" width="250" height="300" class="rounded-3 img-fluid"></a>
              <div class="mt-4">
                <a href="" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Random 1 VR Key</p></a>
              </div>
              <div class="fs-6 d-flex text-dark text-body-secondary">
                <i class="bi bi-box-fill"></i>
                <p class="ms-2 fw-normal">สินค้าคงเหลือ 99999+</p>
              </div>
              <div class="fs-4 text-info fw-semibold" style="background-color: rgb(217, 253, 250);">ราคาสินค้า 350 Point</div>
             </div>
             <div class=" alert alert-secondary rounded-2 col-xl-3  col-12  text-center fs-1">
              <a href="Login.html"><img src="https://images.g2a.com/1024x768/1x1x0/random-fortnite-skin-item-pc-epic-games-key-global-i10000302888001/f4d34583e6b94f40ae79193c" alt="" width="250" height="300" class="rounded-3 img-fluid"></a>
              <div class="mt-4">
                <a href="" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Random 1 IT-SK Fortnite</p></a>
              </div>
              <div class="fs-6 d-flex text-dark text-body-secondary">
                <i class="bi bi-box-fill"></i>
                <p class="ms-2 fw-normal">สินค้าคงเหลือ 99999+</p>
              </div>
              <div class="fs-4 text-info fw-semibold" style="background-color: rgb(217, 253, 250);">ราคาสินค้า 300 Point</div>
             </div>
             <div class=" alert alert-secondary rounded-2 col-xl-3  col-12  text-center fs-1">
              <a href="Login.html"><img src="https://images.g2a.com/1024x768/1x1x0/counter-strike-global-offensive-random-mil-spec-skin-by-droplandnet-key-global-i10000033467001/5d13424c46177c20f16711c2" alt="" width="250" height="300" class="rounded-3 img-fluid"></a>
              <div class="mt-4">
                <a href="" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Random 1 CS:GO Mil-Spec Skin </p></a>
              </div>
              <div class="fs-6 d-flex text-dark text-body-secondary">
                <i class="bi bi-box-fill"></i>
                <p class="ms-2 fw-normal">สินค้าคงเหลือ 99999+</p>
              </div>
              <div class="fs-4 text-info fw-semibold" style="background-color: rgb(217, 253, 250);">ราคาสินค้า 200 Point</div>
             </div>
             <div class=" alert alert-secondary rounded-2 col-xl-3  col-12  text-center fs-1">
              <a href="Login.html"><img src="https://images.g2a.com/1024x768/1x1x0/ultimate-random-pc-microkey-key-global-i10000305567001/9564230eb4fc457fb4a1e3b4" alt="" width="250" height="300" class="rounded-3 img-fluid"></a>
              <div class="mt-4">
                <a href="" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Ultimate Random - Microkey Key</p></a>
              </div>
              <div class="fs-6 d-flex text-dark text-body-secondary">
                <i class="bi bi-box-fill"></i>
                <p class="ms-2 fw-normal">สินค้าคงเหลือ 99999+</p>
              </div>
              <div class="fs-4 text-info fw-semibold" style="background-color: rgb(217, 253, 250);">ราคาสินค้า 500 Point</div>
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