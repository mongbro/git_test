<?php
	include "../lib/connect_db.php";

	$sql = "create table user_tbl (
			id varchar(12) not null,
			name varchar(12) not null,
			passwd varchar(12) not null,
			sex char(1),
			email varchar(30),
			date datetime,
			ip_addr varchar(30),
			position varchar(10) not null,
			school varchar(30),
			grade int(10),
			class int(10),
			primary key(id)	)
			default charset=utf8";
	$result = mysqli_query($connect, $sql);
	mysqli_close($connect);
	
	echo "<script>
		location.replace('login_form.php');
		</script>"
?>