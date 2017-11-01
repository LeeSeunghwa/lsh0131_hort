<?
	$mb_id=$_POST[login_id];
	$mb_password = $_POST[login_pass];

	include_once("./connect.php");
	
	if($mb_id != ""){
		$sql="select * from member where mb_id='$mb_id' and mb_password='$mb_password'";
		$result=mysql_query($sql,$con);
		$count=mysql_num_rows($result);

		if($count==1){
			//alert("로그인에 성공했습니다.");
		}else{
			"<script language='javascript'>
			alert('로그인 성공');
			history.go(-1);
			</script>";
		}
	}

?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="Generator" content="EditPlus®">
		<meta name="Author" content="">
		<meta name="Keywords" content="">
		<meta name="Description" content="">
		<title>SEUNG HWA</title>
	</head>
	<body>
		<ul>
			<li> <a href="/subject/multiplication.php"> 171017 구구단(for) </a></li>
			<li> <a href="/subject/multiplication2.php"> 171017 구구단(while)</a></li>
			<li> <a href="/subject/memberList.php">회원리스트</a></li>
		</ul>
	</body>
</html>
