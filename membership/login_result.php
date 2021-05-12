<?php 
    include '../lib/session.php';
    include '../lib/connect_db.php';
    $username = $_POST['id'];
    $password = $_POST['password'];
    $check = "SELECT * FROM user_tbl where id='$username' and passwd='$password'";
    $mysqli = $connect;
	$res = mysqli_query($mysqli, $check);
	$list = mysqli_num_rows($res);
    $result = $mysqli->query($check);
?>
<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>
    <?php  
        if($list){
            $row = mysqli_fetch_array($res);
            $_SESSION[ 'username' ] = $username;
    ?>
        <center>
			<font size=4><br><b> 로그인되었습니다. </b></font><hr>
			<br> ▶▶ [<a href="../page/main.php"> 메인페이지 </a>] ◀◀
		</center><br>
    <?php
        } else {
          echo '<p>사용자 이름 또는 비밀번호가 틀렸습니다.</p>';
        }
    ?>
  </body>
</html>