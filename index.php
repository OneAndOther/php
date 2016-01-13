<style>
  /* css는 c 스타일의 주석을 사용 */
  b { color: red;
      font-weight: normal;
      background-color: #cccccci;
    }

  #hellobox {
      width: 500px;
      height: 300px;
      border: 1px solid #ff0000;
      margin: 10px;
      position: absolute;
      top: 20px;
      right: 20px;
    }

  .nicename {
      font-weight: bold;
      font-size: 20px;
      text-decoration: underline;
      cursor: pointer;
    }
</style>

<div id="hellobox">
   Good morning, Lady?
</div>

<?php

for( $i = 0; $i < 1000; $i ++){
  echo $i . ", <b>Hello</b>, <span class='nicename'>Hana Choi</span>!!<br >";
}

?>
