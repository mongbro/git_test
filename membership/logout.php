<?php 
  include '../lib/session.php';
?>
<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>


      <?php  
        if ( $jb_login ){
            session_destroy();
    ?>
        <center>
			<font size=4><br><b> 로그아웃 되었습니다. </b></font><hr>
			<br> ▶▶ [<a href="../page/main.php"> 메인페이지 </a>] ◀◀
		</center><br>
    <?php
        }
    ?>
  </body>
</html>