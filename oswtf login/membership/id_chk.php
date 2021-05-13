<?php
	$username = $_GET['id'];
	include "../lib/connect_db.php";
	
    $check = "SELECT count(*) FROM user_tbl where id='$username'";
    $mysqli = $connect;
	$res = mysqli_query($mysqli, $check);
	$rs = mysqli_fetch_array($res);
	$num = $rs[0];
?>

<html>
	<head><title> 아이디 중복검사 </title></head>
	<body>
		<form name="chkid_form">
			<table width="350" border="1" bordercolor="blue" align="center" cellpadding="5">
				<tr bgcolor="#3300CC">
					<td>
						<font color="#FFFFFF"> ■ 아이디 중복검사</font>
					</td>
				</tr>
				
				<tr height="120">
					<td align="center">
						<?php
							if($num>0){
								echo "[ ";
								echo $username;
								echo " ] 는 이미 사용중인 아이디 입니다.<br>";
								echo " 다른 아이디를 선택하세요.<br><br>";
							}
							else{
								echo "[ ";
								echo $username;
								echo " ] 는 사용할 수 있는 아이디 입니다.<br><br>";
							}
						?>

						<input type="button" name="Button" value=" 닫기 " onClick="self.close();">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>