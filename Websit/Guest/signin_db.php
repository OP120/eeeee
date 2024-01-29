<?php

 session_start();
 require_once '../config/db.php';
 $recaptcha_secret = "6Ld0M14pAAAAALZu_NhYg92TXAG5RdYQmV2MbfKC";
 $recaptcha_response = $_POST['g-recaptcha-response'];
 $recaptcha_url = "https://www.google.com/recaptcha/api/siteverify?secret={$recaptcha_secret}&response={$recaptcha_response}";
 $recaptcha = json_decode(file_get_contents($recaptcha_url));

 if (!$recaptcha->success) {
    $_SESSION['error'] = "กรุณากด reCAPTCHA";
    header("location: Login.php");
    exit;
 }
 if (isset($_POST['submits'])){
    $User = $_POST['User'];
    $Password = $_POST['Password'];

    if(empty($User)) {
        $_SESSION['error'] = 'กรุณากรอกข้อมูลของท่าน';
        header('location: Login.php');
    }else if (strlen($_POST['User']) > 20 || strlen($_POST['User']) < 4) {
        $_SESSION['error'] = 'กรุณากรอกชื่อ 4-20 ตัว';
        header("location: Login.php");
    } else if (empty($Password)){
        $_SESSION['error'] = 'กรุณากรอกรหัส';
        header("location: Login.php");
    } else if (strlen($_POST['Password']) > 20 || strlen($_POST['Password']) < 4) {
        $_SESSION['error'] = 'กรุณากรอกรหัส 4-20 ตัว';
        header("location: Login.php");
    } else{
        try{
            $check_data = $conn->prepare("SELECT * FROM users WHERE User = :User"); 
            $check_data->bindParam(":User", $User);
            $check_data->execute();
            $row = $check_data->fetch(PDO::FETCH_ASSOC);
    
            if ($check_data->rowCount() > 0) {
                if ($User == $row['User']) {
                    if (password_verify($Password, $row['Password'])) {
                        if ($row['urole'] == 'admin') {
                            $_SESSION['admin_login'] = $row['id'];
                            header("location: Homeadmin.php");
    
                        } else {
                            $_SESSION['User_login'] = $row['id'];
                            header("location: ..\UserOnly\HomeUser.php");
                            
                        }
                    } else {
                        $_SESSION['error'] = 'รหัสผ่านไม่ถูกต้อง';
                        header('location: Login.php');
                       
                    }
                } else {
                    $_SESSION['error'] = 'ไม่พบ User นี้ในระบบ';
                    header('location: Login.php');
                    
                }
             } else {
                $_SESSION['error'] = "User หรือ Password ไม่ถูกต้อง";
                header("location: Login.php");
                
            }

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
     
}

?>