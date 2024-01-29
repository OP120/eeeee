<?php

   session_start();
   unset($_SESSION['User_login']);
   unset($_SESSION['admin_login']);
   header('location: ..\Guest\Home.php');

?>