<?php
   header("Content-Type: text/html; charset=UTF-8");

   $name = $_POST['name'];
   $password = $_POST['pw'];
?>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


<?php
   if( ($name=="yewon" && $password=="1031") || ($name=="ddd" && $password=="1031") ) {
     setCookie('isLogin', '1');
     setCookie('name', $name);?>
      <h2>로그인 성공</h2>
      ID : <?=$name?><br>
      PASSWORD : <?=$password?><br>
      <a href="./postForm.php">로그인 페이지로 돌아가기</a>
<?php
   }else{
     setCookie('isLogin', '0');
     setCookie('name', '');
?>
      아이디 또는 패스워드가 일치하지 않습니다.<br>
      다시 시도해보세요.<br>
      <a href="./postForm.php">로그인 페이지로 돌아가기</a>
<?php
   }
?>
