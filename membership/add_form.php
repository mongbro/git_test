<html>
<head><title>회원가입</title></head>
<body>
	<center><br><font size=5><b> 회원가입 </b></font><hr>
	▶▶ [<a href="./login.php"> 로그인 </a> ]◀◀<p>`
	<form name="user_form" action="add_db.php" method="post" onSubmit="return chk_input()">
	<table border=1 width=700 align=center cellspacing=0 cellpadding="3">
<tr>
	<td width="696" height="30" colspan="2" bgcolor="blue">
		&nbsp;<font color="white"><b> ■ 회원가입</b> [*표는 반드시 기입할 사항입니다.] </font>
	</td>
</tr>
<tr>
	<td width="20%" height="30" bgcolor="#FFFF99">
		<p align="right"> *아이디 </p>
	</td>
	<td width="80%">
		<input type="text" name="id" id="id" size="12" maxlength="12" onblur="if(id.value!='') chk_id();">
		<input type="button" name="Button" value=" > 중복검사 < " onClick="chk_id();">
		<font size="2"> (영문과 숫자 12자리까지) </font>
	
		<script>
			function chk_id(){
				if(user_form.id.value==''){
					alert('● [아이디]를 입력해야 검사할 수 있습니다...');
					user_form.id.focus();
				}
				else{
					window.open('id_chk.php?id='+user_form.id.value, 'IDwin', 'width=400, height=200');
				}
			}
		</script>
	</td>
</tr>

<tr>
	<td width="20%" height="30" bgcolor="#FFFF99">
		<p align="right"> *이름 </p>
	</td>
	<td width="80%">
		<input type="text" name="fname" id="fname" size="12" maxlength="10">
		<font size="2"> (5글자까지 가능) </font>
	</td>
</tr>

<tr>
	<td width="20%" height="30" bgcolor="#FFFF99">
		<p align="right"> *비밀번호 </p>
	</td>
	<td width="80%">
		<input type="password" name="password" id="password" size="13" maxlength="13">
		<font size="2"> (영문과 숫자 혼합 10자리까지) </font>
	</td>
</tr>

<tr>
	<td width="20%" height="30" bgcolor="#FFFF99">
		<p align="right"> *비밀번호 확인 </p>
	</td>
		<td width="80%">
		<input type="password" name="password_re" id="password_re" size="13" maxlength="13" onblur="chk_password()">
		<font size="2"> (비밀번호와 똑같이 입력하세요.) </font>
	</td>

	<script>
		function chk_password(){
			if(user_form.password.value!=user_form.password_re.value){
				alert("● [비밀번호 입력 오류] \r\b -> [비밀번호]를 다시 입력하세요.");
				user_form.password.value="";
				user_form.password_re.value="";
				user_form.password.focus();
				return false;
			}
		}
		function chk_input(){
			if(user_form.id.value==""){
				alert("● [아이디]를 입력하세요.");
				user_form.id.focus();
				return false;
			}
			else if(user_form.fname.value==""){
				alert("● [이름]를 입력하세요.");
				user_form.fname.focus();
				return false;
			}
			else if(user_form.password.value==""){
				alert("● [비밀번호]를 입력하세요.");
				user_form.password.focus();
				return false;
			}
			else if(user_form.password_re.value==""){
				alert("● [비밀번호 확인]를 입력하세요.");
				user_form.password_re.focus();
				return false;
			}
			else{
				return true;
			}
		}
	</script>

</tr>
<tr>
	<td width="20%" height="30" bgcolor="#FFFF99">
		<p align="right"> *직책 </p>
	</td>
	<td width="80%">
		<form>
			<select name="position">
				<option value="student" id="student">학생</option>
				<option value="teacher" id="teacher">교사</option>
				<option value="admin" id="admin">관리자</option>
			</select>
		</form>
	</td>
</tr>

<tr>
	<td width="20%" height="30" bgcolor="#FFFF99">
		<p align="right"> 성별 </p>
	</td>
	<td>
		<input type="radio" name="fsex" value="M" checked> 남
		<input type="radio" name="fsex" value="W"> 여
	</td>
</tr>

<tr>
	<td width="20%" height="30" bgcolor="#FFFF99">
		<p align="right"> 이메일 </p>
	</td>
	<td width="80%">
		<input type="text" name="femail" size="30" maxlength="30">
		<font size="2"> (예 : master@spacezone.kr) </font>
	</td>
</tr>
<tr>
	<td width="20%" height="30" bgcolor="#FFFF99">
		<p align="right"> 학교 </p>
	</td>
	<td width="80%">
		<input type="text" name="school" size="15" maxlength="30">
	</td>
</tr>
<tr>
	<td width="20%" height="30" bgcolor="#FFFF99">
		<p align="right"> 학년 </p>
	</td>
	<td width="80%">
		<input type="text" name="grade" size="15" maxlength="30">
	</td>
</tr>
<tr>
	<td width="20%" height="30" bgcolor="#FFFF99">
		<p align="right"> 반 </p>
	</td>
	<td width="80%">
		<input type="text" name="class" size="15" maxlength="30">
	</td>
</tr>

<tr>
	<td width="696" height="50" colspan="2"><p align="center">
		<input type="submit" name"smt" value=" ◀◀ 가입하기  "> &nbsp;&nbsp;&nbsp;
		<input type="reset" name="rst" value=" 다시작성  ▶▶ ">
	</td>
</tr>
</table>
</form>
</body>
</html>