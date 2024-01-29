<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <img src="https://th.bing.com/th/id/R.5b5e599eb3aa17a660d4291edad100f0?rik=O9SyBAF8On0o2g&pid=ImgRaw&r=0" class="position-fixed " alt="...">
        <div class="pt-5">
          <div class="container pt-5 fw-semibold">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 m-auto">
                    <div class="card p-3">
                        <div class="card-body ">
                            <div class="d-flex justify-content-center"><h1>Login</h1></div>
                            <form action="signin_db.php" method="post">
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
                                <input type="text" name="User" id="" class="form-control my-3 py-3 fw-semibold"placeholder="User">
                                <input type="password" name="Password" id=""class="form-control my-3 py-3 fw-semibold" placeholder="Password">
                                <div class="mb-3 form-check">
                            <input type="checkbox" name='remember' class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                                <div class="g-recaptcha" data-sitekey="6Ld0M14pAAAAALAgQTGJG-J0D-du5VLJpjfakg9p"></div>
                                <button type="submit" name="submits" id="" class="form-control my-3 py-3 p-3 btn btn-primary fw-semibold">เข้าสู่ระบบ</button>
                            </form>
                            <a href="Register.php" class="text-decoration-none fw-semibold">If you already Dot'n have an account Click Me.</a>
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