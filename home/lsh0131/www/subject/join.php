<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title> 회원가입 </title>
	<style>
		th{text-align:right; padding:5px;};
		td{padding:5px;}
	</style>
		<script type="text/javascript">
			function check(obj, title){
				if(obj.value==""){
					alert(title + "을(를) 입력해주세요");
					obj.focus();
					return false;
				}else{
					return true;
				}
			}
			function check_input(){	//필수항목 입력 확인
				if(!check(document.member_form.mb_id, "아이디")){
					return false;
				}
				if(!check(document.member_form.mb_name, "이름")){
					return false;
				}
				if(!check(document.member_form.mb_password, "비밀번호 확인")){
					return false;
				}
				if(!check(document.member_form.mb_password_check, "비밀번호 확인")){
					return false;
				}
				if(document.member_form.mb_password.value != document.member_form.mb_password_check.value){
					alert("비밀번호가 일치하지 않습니다. 다시입력해주세요");
					document.member_form.mb_password.focus();
					value="";
					return false;
				}
			}
			
		</script>
	</head>

	<body>
	<h2>회원가입</h2>
		<form name="member_form" method="post" action="mem_print.php" enctype="multipart/form-data" onsubmit="return check_input()">
			<table border="1" width="640" cellspacing="1" cellpadding="4">
			<tr>
			  <th>* 아이디</th>
			  <td><input type="text" size="15" maxlength="12" name="mb_id"></td>
			</tr>
			<tr>
			  <th>* 이름</th>
			  <td><input type="text" size="15" maxlength="12" name="mb_name"></td>
			</tr>
			<tr>
			  <th>* 비밀번호</th>
			  <td><input type="password" size="15" maxlength="12" name="mb_password"></td>
			</tr>
			<tr>
			  <th>* 비밀번호확인</th>
			  <td><input type="password" size="15" maxlength="12" name="mb_password_check" ></td>
			</tr>
			<tr>
			  <th>이메일</th>
			  <td><input type="text" size="30" maxlength="30" name="mb_email" ></td>
			</tr>
			<tr>
			  <th>성별</th>
			  <td>
				<input type="radio" name="mb_gender" value="M" checked>남
				<input type="radio" name="mb_gender" value="F">여
			  </td>
			</tr>
			<tr>
			  <th>휴대전화</th>
			  <td>
				<input type="text" size="11" name="mb_phone" maxlength="11">('-'를 제외하고 입력하세요)
			  </td>
			</tr>
			<tr>
			  <th>주소</th>
			  <td><input type="text" size="50" name="mb_address"></td>
			</tr>
			<tr>
			  <th>취미</th>
			  <td>
				<select name="mb_hobby">
				  <option>선택</option>
				  <option value="영화감상">영화감상</option>
				  <option value="독서">독서</option>
				  <option value="쇼핑">쇼핑</option>
				  <option value="운동">운동</option>
				</select>
			  </td>
			</tr>
			<tr>
			  <th>자기소개</th>
			  <td><textarea name="mb_introduce" row="5" cols="60"></textarea></td>
			</tr>
			<tr>
			  <th>파일첨부</th>
			  <td><input type="file" name="upload_file"></td>
			</tr>
			</table>
			<br>
			<table border="0" width="640">
			<tr>
			  <td>
				<input type="submit" value="확인">
				<input type="reset" value="다시작성">
			  </td>
			</tr>
			</table>
		</form>
	</body>
</html>