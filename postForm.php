<?php
   session_start();
   header("Content-Type: text/html; charset=UTF-8");

   include('db.php');
   $link = mysql_connect($db['host'], $db['user'], $db['pw']);
   if (!$link) {
       die('Could not connect: ' . mysql_error());
   }
   echo 'Connected successfully';
   mysql_close($link);


?>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<?php
   $isLogin = $_SESSION['isLogin'];
   if($isLogin != 1) {
?>

<h2>Sign In</h2>
<form method="post" action="postResult.php" class="navbar-form navbar-left">
  <div class="form-group">

    <input type="text" class="form-control" id="name" name="name"  placeholder="ID">
    <input type="password" class="form-control" id="pw" name="pw" placeholder="PASSWORD">

  </div>
  <button type="submit" class="btn btn-default">로그인</button>
</form>
<?php
} else {
$name = $_SESSION['name'];
?>
<?=$name?>님, 이미 로그인이 되어있습니다.<br>
로그아웃 하시려면 아래 버튼을 누르세요.<br>
<a href="postLogout.php" class="btn btn-default" >로그아웃</a>
<?php
}
?>
