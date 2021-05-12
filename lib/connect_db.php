<?php
	$dbpasswd = "";
	$connect = mysqli_connect("localhost", "root") or die("mysql���� ���� ����");
	$db = mysqli_select_db($connect, 'oswtf');
	mysqli_select_db($connect, 'oswtf') or die("DB ���� ����");
?>