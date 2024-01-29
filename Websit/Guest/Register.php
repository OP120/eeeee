<?php
 session_start();
 require_once '../config/db.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<img src="https://th.bing.com/th/id/R.5b5e599eb3aa17a660d4291edad100f0?rik=O9SyBAF8On0o2g&pid=ImgRaw&r=0" class="img-fluid position-fixed " alt="...">
    <form action="signup_db.php" method="post">
    <div class=" pt-5 fw-semibold">
        <div class="container pt-5 ">
          <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto ">
                <div class="card p-2 shadow-lg mb-5 bg-body bgrounded-5">
                    <div class="card-body ">
                        <div class="d-flex justify-content-center fw-semibold"><h1>Register</h1></div>
                        <?php if (isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                ?>
            </div>
        <?php } ?>
        <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>
            </div>
        <?php } ?>
        <?php if (isset($_SESSION['waring'])) { ?>
            <div class="alert alert-waring" role="alert">
                <?php
                    echo $_SESSION['waring'];
                    unset($_SESSION['waring']);
                ?>
            </div>
        <?php } ?>
                       <form action="signup_db.php" method="post">
                        <input type="text" name="User" class="form-control my-3 py-3 fw-semibold" placeholder="User">
                        <input type="e-mail" name="Email" class="form-control my-3 py-3 fw-semibold" placeholder="E-mail">
                        <input type="password" name="Password" class="form-control my-3 py-3 fw-semibold" placeholder="Password">
                        <input type="password" name="Password_c" class="form-control my-3 py-3 fw-semibold" placeholder="Password Confirm">
                        <div class="g-recaptcha" data-sitekey="6Ld0M14pAAAAALAgQTGJG-J0D-du5VLJpjfakg9p"></div>
                        <button type="submit" name="submit" class="form-control my-3 py-3 p-3 btn btn-primary fw-semibold">สมัครสมาชิก</button>
                        <br>
                        <a href="Login.php" class="text-decoration-none fw-semibold">If you already have an account Click Me.</a>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    















    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>