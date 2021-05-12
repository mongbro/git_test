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
        <center>
			<font size=4><br><b> 로그인하세요. </b></font><hr>
			<br> ▶▶ [<a href="add_form.php"> 회원가입 </a>] ◀◀
		</center><br>
		<form name="login_form" action="login_result.php" method="post" onsubmit="return chk_logform();">
			<table width="350" border="0" align="center" cellpadding="5" cellspacing="0">
				<tr bgcolor=#3300CC>
					<td colspan="2">
						<font color#FFFFFF><b> ■ 로그인FORM <b></font>
					</td>
				</tr>
				<tr bgcolor=#FFFFCC>
					<td width="35%" align="right"> 아이디 </td>
					<td>
						<input type="text" name="id" size="19", placeholder="id">
					</td>
				</tr>
				<tr bgcolor=#FFFFCC>
					<td align="right"> 비밀번호 </td>
					<td>
						<input type="password" name="password" id="password" size="20" placeholder="password">
					</td>
				</tr>
				<tr bgcolor=#CCCCFF>
					<td colspan="2" align="center">
						<input type="submit" name"Submit" value="▲ 로그인 ">&nbsp;&nbsp;
						<input type="reset" name="Reset" value=" 취  소 ">&nbsp;&nbsp;
						<a href='../page/main.php'><input type="button" name="back" value=" 뒤  로 ▼"></a>
					</td>
				</tr>
			</table>
		</form>
  </body>
</html>