<?php

 session_start();
 require_once '../config/db.php';
 $recaptcha_secret = "6Ld0M14pAAAAALZu_NhYg92TXAG5RdYQmV2MbfKC";
 $recaptcha_response = $_POST['g-recaptcha-response'];
 $recaptcha_url = "https://www.google.com/recaptcha/api/siteverify?secret={$recaptcha_secret}&response={$recaptcha_response}";
 $recaptcha = json_decode(file_get_contents($recaptcha_url));
 
 if (!$recaptcha->success) {
     $_SESSION['error'] = "กรุณากด reCAPTCHA";
     header("location: Register.php");
     exit;
 }

 if (isset($_POST['submit'])){
    $User = $_POST['User'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Password_c = $_POST['Password_c'];
    $urole = 'user';

    if(empty($User and $Email and $Password and $Password_c)) {
        $_SESSION['error'] = 'กรุณากรอกข้อมูลของท่าน';
        header('location: Register.php');
    }

    if (empty($User)) {
        $_SESSION['error'] = 'กรุณากรอกชื่อ';
        header("location: Register.php");
    }else if (strlen($_POST['User']) > 20 || strlen($_POST['User']) < 4) {
        $_SESSION['error'] = 'กรุณากรอกชื่อ 4-20 ตัว';
        header("location: Register.php");
    }else if (empty($Email)){
        $_SESSION['error'] = 'กรุณากรอกอีเมล';
        header("location: Register.php");
    }else if (!filter_var($Email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['error'] = 'รูปแบบอีเมลไม่ถูกต้อง';
        header("location: Register.php");
    }else if (empty($Password)){
        $_SESSION['error'] = 'กรุณากรอกรหัส';
        header("location: Register.php");
    } else if (strlen($_POST['Password']) > 20 || strlen($_POST['Password']) < 4) {
        $_SESSION['error'] = 'กรุณากรอกรหัส 4-20 ตัว';
        header("location: Register.php");
    }else if (empty($Password_c)) {
        $_SESSION['error'] = 'กรุณากรอกรหัส Confirm';
        header("location: Register.php");
    }else if ($Password != $Password_c) {
        $_SESSION['error'] = 'กรอกรหัส Confirm ผิด';
        header("location: Register.php");
    }else {
        try{
            $check_User = $conn->prepare("SELECT User FROM users WHERE User = :User");
            $check_User->bindParam(":User", $User);
            $check_User->execute();
            $row = $check_User->fetch(PDO::FETCH_ASSOC);

            $check_Email = $conn->prepare("SELECT Email FROM users WHERE Email = :Email");
            $check_Email->bindParam(":Email", $Email);
            $check_Email->execute();
            $row = $check_Email->fetch(PDO::FETCH_ASSOC);

            if ($row && isset($row['User']) && $row['User'] == $User) {
                $_SESSION['error'] = "ชื่อถูกใช้ไปแล้ว <a href='Login.php' class='alert-link'>คลิ๊กเพื่อเข้าสู่ระบบ</a>:";
                header("location: Register.php");
            } else if($row && isset($row['Email']) && $row['Email'] == $Email) {
                $_SESSION['error'] = "อีเมลถูกใช้ไปแล้ว";
                header("location: Register.php");
            } else if (!isset($_SESSION['error'])) {
                $passwordHash = password_hash($Password, PASSWORD_DEFAULT);
                $stmt = $conn->prepare("INSERT INTO users(User, Email, Password, urole)
                                        VALUES(:User, :Email, :Password, :urole)");
                $stmt->bindParam(":User", $User);
                $stmt->bindParam(":Email", $Email);
                $stmt->bindParam(":Password", $passwordHash);
                $stmt->bindParam(":urole", $urole);
                $stmt->execute();

                $_SESSION['success'] = "สมัครเสร็จสิ้น!! <a href='Login.php' class='alert-link'>คลิ๊กเพื่อเข้าสู่ระบบ</a>:";
                header("location: Register.php");
            } else {
                $_SESSION['error'] = "มีบ้างอย่างผิดปกติวะ?";
                header("location: Register.php");
            }
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }
 }

?>