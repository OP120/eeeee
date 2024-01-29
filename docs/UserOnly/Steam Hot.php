<?php

session_start();
require_once '../config/db.php';

if (!isset($_SESSION['User_login'])) {
  $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
  header('location: Login.php');
} else {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../Guest/dropdown.css">

    <style>
      .user.ms-1 {
        margin-left: 7rem !important;
      }

      .user.me-5 {
        margin-right: 5rem !important;
      }

      .dropdown-menu {
        --bs-dropdown-link-active-bg: none;
        --bs-dropdown-link-active-color: none;

      }

      .me-3 {
        margin-left: 10rem !important;
      }

      .mt-1 {
        margin-top: 2.25rem !important;
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

        <a class="navbar-brand " href="HomeUser.php">
          <img src="https://sv1.img.in.th/UEjBfu.png" alt="" width="70" height="70" class="overflow-hidden ms-3 ">
        </a>
        <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
              <a class="nav-link text-light ms-4" aria-current="page" href="HomeUser.php">Home</a>
            </li>
            <li class="nav-item ms-5 ">
              <div class="dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="dropdownMenuButton" type="button"
                  data-mdb-toggle="dropdown" aria-expanded="false">Store</a>
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
          <a class=" text-dark fs-3 font-monospace text-decoration-none" data-bs-toggle="dropdown">
            <?php echo $User['User'] ?> เครดิต:
            <?php echo $Poins['Poins']; ?>
            <ul class="dropdown-menu dropdown-hover">
              <li><a class="dropdown-item fw-bold fs-5" href="">ยินดีต้อนรับ
                  <?php echo $User['User'] ?>
                </a></li>
              <li><a class="dropdown-item fw-bold fs-5" href="">ยอดคงเหลือ
                  <?php echo $Poins['Poins'] ?> เครดิต
                </a></li>
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
    <div class="container mt-5 p-5">
      <div class="row">
        <div class="col-sm-3 col-xl-3 p-0 ">
          <div class="card p-0">
            <div class="card-body ms-0">
              <img
                src="https://images.g2a.com/1024x768/1x1x0/random-hot-deal-1-key-pc-steam-key-global-i10000337843001/7ff7aaeb58474a9a860ff6cf"
                alt="" width="300" height="300" class="rounded-3 img-fluid mb-4"
                style="background-color: black; box-shadow: 0px 0px 0px 1px;">
              <p class="text-secondary font-weight-normal">สุ่มแพ็ค 1 คีย์ Steam ในราคาถูก ลุ้นรับคีย์ราคาแพง
                สุ่มปุ๊ปบิดปับ มีคีย์จาก Stram มากกว่า 1000 Game</p>
              <hr>
              <h2 class="text-center h4 font-weight-normal">แพ็ค Steam Standard X 1 </h2>
              <h2 class="text-center font-weight-normal">ราคา 100 เครดิต</h2>
              <div class="fs-5 d-flex text-dark text-body-secondary justify-content-start">
                <i class="bi bi-box-fill ms-2"></i>
                <p class="ms-2 font-weight-normal ">สินค้าคงเหลือ
                  <?php echo $sthot['total_count'] ?> ชิ้น
              </div>
              <form action="">
                <div class="d-grid mx-2" id="buy">
                  <button type="button" class="btn btn-info d-flex fs-5 text-center" data-bs-toggle="modal"
                    data-bs-target="#buyModal">
                    <i class="bi bi-cart mx-0 ms-5 mt-4"></i>
                    <p class="mx-3 ms-3 mt-4">สั่งชื้อสินค้า</p>
                  </button>
                </div>
              </form>
              <div class="modal fade" id="buyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog text-center ">
                  <div class="modal-content bg-white">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Steam Standard
                      </h5>
                      <div class="w-25 h-50 bg-black bg-opacity-25 rounded-3 justify-content-center">
                      <h5 class="modal-title me-2" id="exampleModalLabel">
                        เหลือ
                        <?php echo $stsd['total_count'] ?> ชิ้น
                      </h5>
                      </div>
                    </div>
                    <div class="modal-body mx-auto">
                      <img
                        src="https://images.g2a.com/1024x768/1x1x0/random-1-key-steam-key-global-i10000001534005/b8f17813249d4c619aed6c52"
                        width="150" height="150" class="rounded-3 img-fluid"
                        style="background-color: black; box-shadow: 0px 0px 0px 1px;">
                    </div>
                    <div class="modal-body">
                      <h5 class="text-center">📲 คีย์นี้ใส่ได้ทั้งมือถือและคอม</h5>
                      <h5 class="text-center">🆙 คียร์ถาวร</h5>
                      <h5 class="text-center">✅ ราคาถูกเข้าถึงง่าย สุ่มได้คีย์ดีๆแน่นอน</h5>
                      <h5 class="text-center">🆘 บริการช่วยเหลือฟรี หากมีปัญหาการใช้งาน ให้ถามที่ห้อง #public-support และที่ #support-th</h5>
                      <br>
                      <br>
                      <h5 class="text-center">❗ทางเรามีสิทธิ์ที่จะ Discontinued เพราะสินค้าที่เราวางจำหน่ายมีจำกัดและไม่รับ Refund
                        สินค้าทุกชนิด รวมถึงไม่อนุญาตให้ Resell ต่างๆ
                        หากมีคำถามเพิ่มเติมเกี่ยวกับเรื่องนี้ หรือการขอเงินคืน (Refund) โปรดอ่านที่ห้อง #rules-th
                        ในดิสคอร์ดเซิฟเวอร์ของเราก่อนสั่งซื้อสินค้าบนเว็บไซต์เรา</h5>
                    </div>
                    <div class="modal-footer d-flex flex-column align-items-center">
                      <h5 class="mx-auto">ราคา: 100 เครดิต</h5>
                      <br>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">สั่งซื้อสินค้า</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal-header">
              <hr>
              <ul class="list-unstyled">
                <li class="d-flex justify-content-between"><span>ประเภทเกม:</span><span> Game For Steam</span></li>
                <hr>
                <li class="d-flex justify-content-between"><span>ภาษา:</span><span>English</span></li>
                <hr>
                <li class="d-flex justify-content-between"><span>ลักษณะประเภทสินค้า:</span><span>Gift Card/Code</span>
                </li> <!-- <h3>Stram Key มากกว่า 1000+ Game</h3> -->
                <hr>
                <li class="d-flex justify-content-between"><span>สินค้ามีทั้งหมด</span><span>1000+ Game</span></li>
              </ul>
              <hr>
            </div>
          </div>
        </div>
        <div class="col-sm-9 col-xl-9 p-0">
          <div class="card">
            <div class="card-body">
              <div>
                <img src="https://th.bing.com/th/id/R.cc3f827ff232a276d2413d5ff9add3f0?rik=psEDoO9Zf1AA9Q&pid=ImgRaw&r=0"
                  width="900px" height="400px" class=" img-fluid rounded-2 mx-auto d-block mb-2">
                <img src="https://th.bing.com/th/id/R.e18da57ee7d8a24fe7ee76a555f1694d?rik=AeKXTmy2BsfSbw&pid=ImgRaw&r=0"
                  width="444px" height="250px" class="img-fluid rounded-2 mt-1">
                <img src="https://th.bing.com/th/id/R.8b0dd34703282bbe075ed5b88a77db3c?rik=TvaII8D1RYrxgA&pid=ImgRaw&r=0"
                  width="446px" height="250px" class="img-fluid rounded-2 mt-1 ">
                <img src="https://th.bing.com/th/id/R.4491a7d01e9725ca938404264d033feb?rik=BwWTRR5eu5ggUA&pid=ImgRaw&r=0"
                  width="444px" height="250px" class="img-fluid rounded-2 mt-1 ">
                <img
                  src="https://th.bing.com/th/id/R.6ef5bd2f0296161b965b6406ad480093?rik=IHsAU95L7m%2bNHg&pid=ImgRaw&r=0"
                  width="446px" height="250px" class="img-fluid rounded-2 mt-1 ">
              </div>
              <hr>
              <div class="d-flex justify-content-center">
                <h3>รายระเอียดสินค้า</h3>
              </div>
              <ul class="list-unstyled">
                <li class="d-flex">
                  <h4>ARK: Survival Evolved</h4>
                  <div>
                </li>
                <li class="d-flex">
                  <h4>Black Desert</h4>
                </li>
                <li class="d-flex">
                  <h4>Human: Fall Flat</h4>
                </li>
                <li class="d-flex">
                  <h4>Left 4 Dead 2</h4>
                </li>
                <li class="d-flex">
                  <h4>Storyteller</h4>
                </li>
                <li class="d-flex">
                  <h4>Dead by Daylight - Resident Evil: PROJECT W Chapter</h4>
                </li>
                <li class="d-flex">
                  <h4>Counter-Strike: Source</h4>
                </li>
                <li class="d-flex">
                  <h4>The Coma: Recut</h4>
                </li>
                <li class="d-flex">
                  <h4>Sign of Silence</h4>
                </li>
                <li class="d-flex">
                  <h4>Eternal Dread 3</h4>
                </li>
                <li class="d-flex">
                  <h4>Arena Renovation</h4>
                </li>
                <li class="d-flex">
                  <h4>Incredibox</h4>
                </li>
                <li class="d-flex">
                  <h4>IXION - Original Soundtrack</h4>
                </li>
                <li class="d-flex">
                  <h4>Insurgency: Sandstorm - Praetorian Set Bundle</h4>
                </li>
                <li class="d-flex">
                  <h4>Subnautica Original Soundtrack</h4>
                </li>
                <li class="d-flex">
                  <h4>Counter-Strike Complete</h4>
                </li>
                <li class="d-flex">
                  <h4>She Sees Red - Interactive Movie</h4>
                </li>
                <li class="d-flex">
                  <h4>Escape FishStop 3D</h4>
                </li>
                <li class="d-flex">
                  <h4>Gunvolt Chronicles: Luminous Avenger iX </h4>
                </li>
                <li class="d-flex">
                  <h4>Lagoon Lounge : The Poisonous Fountain</h4>
                </li>
                <li class="d-flex">
                  <h4>The Coma: Recut - Deluxe Edition</h4>
                </li>
                <li class="d-flex">
                  <h4>More Key 1000+ Game...</h4>
                </li>
                <hr>
                <h4>โดยหลักจากที่กดปุ่มสั่งซื้อสินค้าเสร็จ คุณจะได้รับคีย์เป็นเลขจำนวน XXXXX-XXXXX-XXXXX (15 Key)</h4>
                <br>
                <br>
                <div>
                  <h3 class="text-center">How to Redeem Key?</h3>
                  <h3>Please follow these instructions to activate a new retail purchase on Steam:</h3>
                  <h3>1.Launch the Steam client software and log into your Steam account.</h3>
                  <h3>2.Click the. Games. menu option at the top of the Steam client.</h3>
                  <h3>3.Choose. Activate a Product on Steam...</h3>
                  <h3>4.Follow the onscreen instructions to complete the process.</h3>
                  <br>
                  <div class="ratio ratio-16x9">
                    <iframe width="900" height="500" src="https://www.youtube.com/embed/wsBkwmGo1Z4" title="YouTube Video"
                      allowfullscreen></iframe>
                  </div>
                  <p>©credit By.KeenGamer - More Than Just a Game Site</p>
                </div>
              </ul>
              <!-- https://www.google.com/search?q=how+to+use+key+steam&rlz=1C1CHZN_enTH1049TH1049&sxsrf=APwXEdfVQ9KRKa51pDO8ON4HvAk0PAvofA:1680094370094&source=lnms&tbm=vid&sa=X&ved=2ahUKEwjz7_igl4H-AhW0SWwGHWYpCCYQ_AUoAXoECAEQAw&biw=1920&bih=937&dpr=1#fpstate=ive&vld=cid:07a1a0a1,vid:wsBkwmGo1Z4 -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
      integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
      crossorigin="anonymous"></script>
  </body>

  </html>
<?php } ?>