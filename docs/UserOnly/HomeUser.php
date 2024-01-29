<?php

session_start();
   require_once '../config/db.php';
  
   if(!isset($_SESSION['User_login'])) {
    $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
    header('location: Login.php');
   }else {
    $sqlvrk = $conn->query("SELECT COUNT(idkey) as total_count FROM vrk");
    $vrk = $sqlvrk->fetch(PDO::FETCH_ASSOC);
    $sqlstsd = $conn->query("SELECT COUNT(idkey) as total_count FROM stsd");
    $stsd = $sqlstsd->fetch(PDO::FETCH_ASSOC);
    $sqlstcc = $conn->query("SELECT COUNT(idkey) as total_count FROM stcc");
    $stcc = $sqlstcc->fetch(PDO::FETCH_ASSOC);
    $sqlrdnetflix = $conn->query("SELECT COUNT(idkey) as total_count FROM rdnetflix");
    $rdnetflix = $sqlrdnetflix->fetch(PDO::FETCH_ASSOC);
    $sqlrdmrk = $conn->query("SELECT COUNT(idkey) as total_count FROM rdmrk");
    $rdmrk = $sqlrdmrk->fetch(PDO::FETCH_ASSOC);
    $sqlrdfn = $conn->query("SELECT COUNT(idkey) as total_count FROM rdfn");
    $rdfn = $sqlrdfn->fetch(PDO::FETCH_ASSOC);
    $sqlrdcsgo = $conn->query("SELECT COUNT(idkey) as total_count FROM rdcsgo");
    $rdcsgo = $sqlrdcsgo->fetch(PDO::FETCH_ASSOC);
    $sqlsthot = $conn->query("SELECT COUNT(idkey) as total_count FROM sthot");
    $sthot = $sqlsthot->fetch(PDO::FETCH_ASSOC);
    $sqlP = $conn->query("SELECT Poins FROM users WHERE id");
    $Poins = $sqlP->fetch(PDO::FETCH_ASSOC);
    $sqlU = $conn->query("SELECT User FROM users WHERE id");
    $User = $sqlU->fetch(PDO::FETCH_ASSOC);

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
    <link rel="stylesheet" href="../Guest/dropdown.css">

    <style>
      .user.ms-1 {
    margin-left: 7rem!important;
     }
     .user.me-5 {
    margin-right: 5rem!important;
    }
      .dropdown-menu{
        --bs-dropdown-link-active-bg: none;
        --bs-dropdown-link-active-color: none;

      }
      .me-3 {
    margin-left: 10rem!important;
      }
      .mt-1 {
    margin-top: 2.25rem!important;
}

      @import url('https')
    </style>
  </head>
<body>
    <div class="container-fluid p-0 ">
    <?php 

if (isset($_SESSION['user_login'])) {
    $user_id = $_SESSION['user_login'];
    $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
        <div class="navbar navbar-expand-lg navbar-light">
          
              <a class="navbar-brand " href="">
                <img src="https://sv1.img.in.th/UEjBfu.png" alt="" width="70" height="70" class="overflow-hidden ms-3 ">
              </a>
              <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="ms-5"></div>
              <div class="ms-5"></div> 
              <div class="ms-5"></div>  
              <div class="ms-5"></div>  
              <div class="ms-5"></div>
              <div class="ms-5"></div>   
               
              <div class="collapse navbar-collapse ms-3 ps-0 " id="navbarNav">
                <ul class="navbar-nav fs-4 mx-auto fw-semibold ps-0">
                  <li class="nav-item ms-3 ">
                    <a class="nav-link text-light ms-4" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item ms-5 ">
                    <div class="dropdown">
                      <a class="nav-link dropdown-toggle text-light"  href="#" id="dropdownMenuButton" type="button"  data-mdb-toggle="dropdown"aria-expanded="false">Store</a>
                      <ul class="dropdown-menu dropdown-hover" aria-labelledby="dropdownMenuButton">
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
                  <li class="nav-item ms-5">
                    <a class="nav-link text-light" href="#">Topup</a>
                  </li>
                  <li class="nav-item ms-5">
                    <a class="nav-link text-light" href="#">Content</a>
                  </li>
                  <li class="nav-item ms-5">
                    <a class="nav-link text-light" href="#">Topup code</a>
                  </li>
                </ul>
              </div>
              <div class="user dropdown mx-auto fs-5 ms-1 mt-3 me-5">
                <i class="bi bi-person-circle fs-1"></i>
                  <a class=" text-dark fs-3 font-monospace text-decoration-none" data-bs-toggle="dropdown"> Poins: <?php echo $Poins['Poins'];?>
                   <ul class="dropdown-menu dropdown-hover">   
                    <li><a class="dropdown-item fw-bold fs-5" href="">ยินดีต้อนรับ <?php echo $User['User']?></a></li>
                    <li><a class="dropdown-item fw-bold fs-5" href="">ยอดคงเหลือ <?php echo $Poins['Poins']?> Poins</a></li>
                    <li><a class="dropdown-item fw-bold fs-5" href="">รายละเอียดข้อมูล</a></li>
                    <li><a class="dropdown-item fw-bold fs-5" href="">กรอกของขวัญ</a></li>
                    <li><a class="dropdown-item fw-bold fs-5" href="">ยอดการเติมเงิน</a></li>
                    <li><a class="dropdown-item fw-bold fs-5" href="">ยอดการซื้อสินค้า</a></li>
                    <li><a class="dropdown-item fw-bold fs-5 text-danger" href="logout.php">ลงชื่อออก</a></li>
                   </ul>
                  </a>
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
                <img src="https://etgeekera.files.wordpress.com/2013/06/xbox-one-logo-banner.png?w=788" class=" img-fluid w-100 h-100 align-items-center" alt="...">
              </div>
              <!--<div class="carousel-item">
                <img src="" class="d-flexs w-100 h-100 align-items-center " alt="...">
              </div>
              <div class="carousel-item">
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
            <a href="Steam Standard.php"><img src="https://images.g2a.com/1024x768/1x1x0/random-1-key-steam-key-global-i10000001534005/b8f17813249d4c619aed6c52" alt="" width="250" height="300" class="rounded-3 img-fluid border border-black"></a>
            <div class="mt-4">
              <a href="Steam Standard.php" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Random 1 Key Steam Standard</p></a>
            </div>
            <div class="fs-6 d-flex text-dark text-body-secondary">
              <i class="bi bi-box-fill"></i>
              <p class="ms-2 fw-normal">สินค้าคงเหลือ <?php echo $stsd['total_count']?></p>
            </div>
            <div class="btn btn-info text-dark w-100 mb-5">ราคาสินค้า 100 Point</div>
            </div>
            
           <div class=" rounded-2 col-xl-3  col-12  text-center fs-1 mt-3">
            <a href="Steam Hot.php"><img src="https://images.g2a.com/1024x768/1x1x0/random-hot-deal-1-key-pc-steam-key-global-i10000337843001/7ff7aaeb58474a9a860ff6cf" alt="" width="250" height="300" class="rounded-3 img-fluid border border-black"></a>
            <div class="mt-4">
              <a href="Steam Hot.php" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Random 1 Key Steam Hot Deal</p></a>
            </div>
            <div class="fs-6 d-flex text-dark text-body-secondary">
              <i class="bi bi-box-fill"></i>
              <p class="ms-2 fw-normal">สินค้าคงเหลือ <?php echo $sthot['total_count']?></p>
            </div>
            <div class="btn btn-info text-dark w-100 mb-5">ราคาสินค้า 100 Point</div>
           </div>
           <div class=" rounded-2 col-xl-3  col-12  text-center fs-1 mt-3">
            <a href=" account Netflix.html"><img src="data:image/png;base64,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" alt="" width="250" height="334" class="rounded-3"></a>
            <div class="mt-4">
              <a href="Steam Gand.php" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Random 1 Account Netflix</p></a>
            </div>
            <div class="fs-6 d-flex text-dark text-body-secondary">
              <i class="bi bi-box-fill"></i>
              <p class="ms-2 fw-normal">สินค้าคงเหลือ <?php echo $rdnetflix['total_count']?></p>
            </div>
            <div class="btn btn-info text-dark w-100 mb-5">ราคาสินค้า 100 Point</div>
           </div>
           <div class=" rounded-2 col-xl-3  col-12  text-center fs-1 mt-3">
            <a href="Steam Collectible.php"><img src="https://images.g2a.com/1024x768/1x1x0/random-steam-collectible-1-key-steam-key-global-i10000336673001/01b851fa35954ddcae462f7c" alt="" width="250" height="300" class="rounded-3 img-fluid border border-black"></a>
            <div class="mt-4">
              <a href="Steam Collectible.php" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Random 1 Steam Collectible Card</p></a>
            </div>
            <div class="fs-6 d-flex text-dark text-body-secondary">
              <i class="bi bi-box-fill"></i>
              <p class="ms-2 fw-normal ">สินค้าคงเหลือ <?php echo $stcc['total_count']?></p>
            </div>
            <div class="btn btn-info text-dark w-100 mb-5">ราคาสินค้า 200 Point</div>
           </div>
           
           <div class=" rounded-2 col-xl-3  col-12  text-center fs-1 mt-3">
            <a href="Random.VR.php"><img src="https://images.g2a.com/1024x768/1x1x0/random-vr-1-key-steam-key-global-i10000337466002/075b771216584d43a46008b1" alt="" width="250" height="300" class="rounded-3 img-fluid border border-black"></a>
            <div class="mt-4">
              <a href="Random.VR.php" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Random 1 Virtual Reality Key</p></a>
            </div>
            <div class="fs-6 d-flex text-dark text-body-secondary">
              <i class="bi bi-box-fill"></i>
              <p class="ms-2 fw-normal">สินค้าคงเหลือ <?php echo $vrk['total_count']?></p>
            </div>
            <div class="btn btn-info text-dark w-100 mb-5">ราคาสินค้า 300 Point</div>
           </div>
           <div class=" rounded-2 col-xl-3  col-12  text-center fs-1 mt-3">
            <a href="Fortnite.php"><img src="https://images.g2a.com/1024x768/1x1x0/random-fortnite-skin-item-pc-epic-games-key-global-i10000302888001/f4d34583e6b94f40ae79193c" alt="" width="250" height="300" class="rounded-3 img-fluid border border-black"></a>
            <div class="mt-4">
              <a href="Fortnite.php" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Random 1 IT-SK Fortnite</p></a>
            </div>
            <div class="fs-6 d-flex text-dark text-body-secondary">
              <i class="bi bi-box-fill"></i>
              <p class="ms-2 fw-normal">สินค้าคงเหลือ <?php echo $rdfn['total_count']?></p>
            </div>
            <div class="btn btn-info text-dark w-100 mb-5">ราคาสินค้า 300 Point</div>
           </div>
           <div class=" rounded-2 col-xl-3  col-12  text-center fs-1 mt-3">
            <a href="CSGO.php"><img src="https://images.g2a.com/1024x768/1x1x0/counter-strike-global-offensive-random-mil-spec-skin-by-droplandnet-key-global-i10000033467001/5d13424c46177c20f16711c2" alt="" width="250" height="300" class="rounded-3 img-fluid border border-black"></a>
            <div class="mt-4">
              <a href="CSGO.php" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Random 1 CS:GO Mil-Spec Skin </p></a>
            </div>
            <div class="fs-6 d-flex text-dark text-body-secondary">
              <i class="bi bi-box-fill"></i>
              <p class="ms-2 fw-normal">สินค้าคงเหลือ <?php echo $rdcsgo['total_count']?></p>
            </div>
            <div class="btn btn-info text-dark w-100 mb-5">ราคาสินค้า 500 Point</div>
           </div>
           <div class="  rounded-2 col-xl-3  col-12  text-center fs-1 mt-3">
            <a href="Ultimate Random.php"><img src="https://images.g2a.com/1024x768/1x1x0/ultimate-random-pc-microkey-key-global-i10000305567001/9564230eb4fc457fb4a1e3b4" alt="" width="250" height="300" class="rounded-3 img-fluid border border-black"></a>
            <div class="mt-4">
              <a href="Ultimate Random.php" class="text-dark text-decoration-none fs-2 fw-bolder"><p class="lh-sm">Ultimate Random - Microkey Key</p></a>
            </div>
            <div class="fs-6 d-flex text-dark text-body-secondary">
              <i class="bi bi-box-fill"></i>
              <p class="ms-2 fw-normal">สินค้าคงเหลือ <?php echo $rdmrk['total_count']?></p>
            </div>
            <div class="btn btn-info text-dark w-100 mb-5">ราคาสินค้า 500 Point</div>
           </div>
           </div>
           <br>
          </div>
          
      </div>
        </div>
        
    </div>







  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
<?php }?>