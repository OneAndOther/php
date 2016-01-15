<?php
   setCookie('isLogin', '0');
   setCookie('name', '');
   $url = "./postForm.php";
   header("Location: ". $url);
?>
