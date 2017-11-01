
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="Generator" content="EditPlus®">
		<meta name="Author" content="">
		<meta name="Keywords" content="">
		<meta name="Description" content="">
		<title>회원리스트</title>
		<style>
			td{padding:10px;}
		</style>
	</head>
	<body>
		<h1> 회원리스트 </h1>
		<table border="1">
			<thead>
				<tr>
					<th> 아이디 </th>
					<th> 이름 </th>
					<th> 전화번호 </th>
					<th> 메일 </th>
				</tr>
			</thead>
			<tbody>
			<?
			include_once("./connect.php");
			$query="select * from member";
			$result=mysql_query($query);

			for($i=0; $row=mysql_fetch_array($result); $i++){
			?>
			<tr>
				<td><?= $row['mb_id']?></td>
				<td><?= $row['mb_name']?></td>
				<td><?= $row['mb_phone']?></td>
				<td><?= $row['mb_email']?></td>
			</tr>
			<? } ?>
			</tbody>
		</table>
	</body>
</html>
