<?php
   session_start();
   $_SESSION['isLogin'] = 0;
   $_SESSION['name'] = '';
   $url = "./postForm.php";
   header("Location: ". $url);
?>
