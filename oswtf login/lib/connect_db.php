<?php
	$connect = mysqli_connect("localhost", "root", "abcd1234") or die("mysql���� ���� ����");
	$db = mysqli_select_db($connect, 'oswtf');
	mysqli_select_db($connect, 'oswtf') or die("DB ���� ����");
?>