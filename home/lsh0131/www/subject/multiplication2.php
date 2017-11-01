<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-eqiuv="Content-Type" content="text/html"/>
	</head>
	<body>
			<? 
			$a = 2;
			$c = 1;
			while($a<10){
			?>
			<span  style="float:left; border:1px solid #000000; margin:10px; padding:5px">
			<strong style="text-align:center; border-bottom:1px solid" ><? echo "$a 단" ?>	</strong>
				<table>
					<tbody>
						<?
							$b = 1;
							while($b<10){ 
								$c=$a*$b; 
						?>
						<tr> 
							<td><? echo "$a x $b = $c "; ?> </td>
						</tr>
						<?
								$b++;
							} 
						?>
					</tbody>
				</table>
			</span>
			<?
				$a++;
			}
		?>
	</body>
</html>