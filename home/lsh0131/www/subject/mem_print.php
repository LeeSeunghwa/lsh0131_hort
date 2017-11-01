<?
	//error_reporting(E_ALL);
	//ini_set("display_errors", 1);

	$mb_id=$_POST[mb_id];
	$mb_name=$_POST[mb_name];
	$mb_password = $_POST[mb_password];
	$mb_password_check = $_POST[mb_password_check];
	$mb_gender=$_POST[mb_gender];
	$mb_phone=$_POST[mb_phone];
	$mb_email=$_POST[mb_email];
	$mb_hobby=$_POST[mb_hobby];
	$mb_introduce=$_POST[mb_introduce];
	$mb_file=$_POST[mb_file];

	// 설정
	$uploads_dir = '../upload';
	$allowed_ext = array('jpg','jpeg','png','gif');
	 
	// 변수 정리
	$error = $_FILES['mb_file']['error'];
	$name = $_FILES['mb_file']['name'];
	$ext = array_pop(explode('.', $name));

	// 파일 이동
	move_uploaded_file( $_FILES['mb_file']['tmp_name'], "$uploads_dir/$name");

	$mb_file=$uploadfile;

	include_once("./connect.php");
	
	// 아이디 중복확인 후 저장
	$query = mysql_query("SELECT * FROM member WHERE mb_id='$mb_id'");
	$count=mysql_num_rows($query);
	if($count==1){
		echo "이미 존재하는 아이디 입니다.";
		echo "아래의 내용은 저장되지 않습니다.";
	}else{
		$sql = "insert into member
				values('$mb_id', '$mb_name', '$mb_password', '$mb_password_check', '$mb_gender', '$mb_phone', '$mb_email', '$mb_hobby',  '$mb_introduce', '$mb_file')";
		if(!mysql_query($sql,$con)){
			die('Error:'.mysql_error());
		}
		echo "1 record added";
	}
	mysql_close($con);
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="Generator" content="EditPlus®">
		<meta name="Author" content="">
		<meta name="Keywords" content="">
		<meta name="Description" content="">
		<title>회원가입 확인</title>
	</head>
	<body>
		<br>
		아이디 : <?=$mb_id?><br>
		이름 : <?=$mb_name?><br>		
		비밀번호 : <?=$mb_password?><br>
		비밀번호 확인 : <?=$mb_password_check?><br>
		성별 : <?=$mb_gender?><br>
		전화번호 : <?=$mb_phone?><br>
		메일 : <?=$mb_email?><br>
		취미 : <?=$mb_hobby?><br>
		자기소개 : <?=$mb_introduce?><br>
		파일 : <?=$mb_file?>

		<br><br><br>
		<strong><a href="/subject/login.php">로그인하기</a></strong>
	</body>
</html>