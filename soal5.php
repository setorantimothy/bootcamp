<!DOCTYPE html>
<html>
<head>
	<title>Soal 5</title>

<script src="js/bootstrap.js"></script>
</head>
<body>
<nav class="nav">
		<a href="soal1.html" class="nav-link">Soal 1</a>
		<a href="soal2.html" class="nav-link">Soal 2</a>
		<a href="soal3.html" class="nav-link">Soal 3</a>
		<a href="soal4.html" class="nav-link">Soal 4</a>
		<a href="soal5.php" class="nav-link">Soal 5</a>
		<a href="soal6.php" class="nav-link">Soal 6</a>
		<a href="soal7.php" class="nav-link">Soal 7</a>
	</nav><table style="width:100%;" class="table">
<?php
	
	for ($i=1;$i<=6;$i++){
		$f1="DW";
		$f2="";
		$f3="";
		$f4="";
		$f5="";
		$f6="DW";
		$f7="";
		$f8="";
		$f9="";
		$f10="";
		$f11="";
		$f12="DW";
			if($i==1){
				$f2="DW";
			}else if($i==2){
				$f3="DW";
			}
			else if($i==3){
				$f4="DW";
				$f9="DW";
			}
			else if($i==4){
				$f4="DW";
				$f8="DW";
				$f9="DW";
				$f10="DW";
			}
			else if($i==5){
				$f3="DW";
				$f7="DW";
				$f11="DW";
			}
			else if($i==6){
				$f2="DW";
			}

	?>
	<tr>
		<td><?=$f1;?></td>
		<td><?=$f2;?></td>
		<td><?=$f3;?></td>
		<td><?=$f4;?></td>
		<td><?=$f5;?></td>
		<td><?=$f6;?></td>
		<td><?=$f7;?></td>
		<td><?=$f8;?></td>
		<td><?=$f9;?></td>
		<td><?=$f10;?></td>
		<td><?=$f11;?></td>
		<td><?=$f12;?></td>
		
	</tr>
	<?php
}
?>
</table>
</body>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</html>