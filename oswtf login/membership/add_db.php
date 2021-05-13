<?php
	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$password = $_POST['password'];
	$password_re = $_POST['password_re'];
	$fsex = $_POST['fsex'];
	$femail = $_POST['femail'];
	$userip = $_SERVER['REMOTE_ADDR'];
	$fposition = $_POST['position'];
	$fschool = $_POST['school'];
	$fgrade = $_POST['grade'];
	$fclass = $_POST['class'];
	
	include "../lib/connect_db.php";

	if($id=="" || $fname=="" || $password=="" || $password!=$password_re){
		echo"<script>
				alert(' * 필수 입력사항은 반드시 입력해야 합니다.');
				history.back();
				</script>";
		die;
	}

	mysqli_query($connect, "set session character_set_connection=utf8;");
	mysqli_query($connect, "set session character_set_results=utf8;");
	mysqli_query($connect, "set session character_set_client=utf8;");

	$sql="insert into user_tbl (id, name, passwd, sex, email, date, ip_addr, position, school, grade, class) ";
	$sql.="value ('$id', '$fname', '$password', '$fsex', '$femail', now(), '$userip', '$fposition', '$fschool', '$fgrade', '$fclass')";
	$res=mysqli_query($connect, $sql);

	echo "<center><br><font size=5> ♥ 회원등록 성공 ♥ </font><p><hr>";
	echo "<br> 회원등록을 축하합니다~ </font></center>";

	if($res > 0){
		echo "<script>
				alert('[등록 성공]\\r\\n회원으로 등록되었습니다.');
				location.replace('login.php');
				</script>";
	}
	else{
		echo "<script>
				alert('[등록 실패]\\r\\n회원으로 등록을 실패했습니다.');
				history.back();
				</script>";
	}
	mysqli_close($connect);
?>