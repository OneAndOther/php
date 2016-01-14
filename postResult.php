<?php
   $name = $_POST['name'];
   $year = $_POST['year'];
   $mon = $_POST['mon'];
   $day = $_POST['day'];
   $age = 2016 - $year + 1;
?>
<h1> Wow! </h1>
I know you, <?=$name?>!!<br>
Your birthday is <?=$year?>-<?=$mon?>-<?=$day?><br>
Your age : <?=$age?> years old.
