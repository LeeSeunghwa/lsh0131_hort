
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="Generator" content="EditPlus®">
		<meta name="Author" content="">
		<meta name="Keywords" content="">
		<meta name="Description" content="">
		<title>로그인</title>
		<style>
			table{border:1px solid #000000;}
			td{margin:2px; padding:5px;}
		</style>
		<script>
			function login(){
				var frm=document.login
		</script>
	</head>
	<body>
		<form name="member_login" method="post" action="menu.php">
			<table>
				<tbody>
					<tr>
						<th><label for="login_id">아이디</label></th>
						<td colspan="2"><input type="text" name="login_id" id="login_id"></td>
					</tr>
					<tr>
						<th><label for="login_pass">비밀번호</label></th>
						<td colspan="2"><input type="password" name="login_pass" id="login_pass"></td>
					</tr>
					<tr>
						<th></th>
						<td> <input type="submit" value="로그인">
						<td> <input type="button" value="회원가입" onClick="location.href='join.php'">
					</tr>
				</tbody>
			</table>
		</form>
	</body>
</html>
