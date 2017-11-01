<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-eqiuv="Content-Type" content="text/html"/>
	</head>
	<body>
	<div >
		<?php 
			$c = 1;
			for($a=2; $a<10; $a++){
		?>
		<span style="float:left; border:1px solid #000000; margin:10px; padding:5px">
			<strong style="text-align:center; border-bottom:1px solid"  ><? echo "$a 단" ?> </strong>	
			<table>
				<tbody>
					<?
						for($b=1; $b<10; $b++){ 
							$c=$a*$b; 
					?>
					<tr> 
						<td><? echo "$a x $b = $c"; ?> </td>
					</tr>
					<?
						} 
					?>
				</tbody>
			</table>
		</span>
		<?
			}
		?>
	</div>
	</body>
</html>