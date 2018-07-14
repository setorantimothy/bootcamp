<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
	</nav>
	<br>
	<h2></h2>
		<div class="col-md-12">
			<div class="form-inline">
				<div class="col-md-6">
				<div class="card-header bg-info text-white">Soal Ke 5 </div>
					<?php
					include 'soal5.php';
					?>
				</div>

				<div class="col-md-6">
				<div class="card">
				<?php
					$con = mysqli_connect('localhost','root','','bootcamp');

					$sql = "SELECT tbposts.*,tbuser.username from tbposts inner join tbuser on tbuser.id = tbposts.createdBy";
					$query = mysqli_query($con,$sql);
					while ($re = mysqli_fetch_array($query)) {
						$title = $re['title'];
						$content = $re['content'];
						$username = $re['username'];
						$id = $re['id'];
						
						$sql2 = "select *from tbcomments where postId='$id'";
						$q2 = mysqli_query($con,$sql2)or die("error comen");
						
					}


					?>
				<div class="card-header bg-primary text-white"><?=$title;?> </div>
				<div class="card-body">
				<?=$content;?><br><br>
				<footer class="blockquote-footer"><i>Dibuat oleh <?=$username;?></i></footer>
					
						</div>
					</div><br>
					<div class="card bg-light">
						<div class="card-header">Comments : </div>
							<div class="card-body">
								<?php
							$sql2 = "select *from tbcomments where postId='$id'";
							$q2 = mysqli_query($con,$sql2)or die("error comen");
							$n = mysqli_num_rows($q2);
							for($i=0;$i<=$n;$i++){
							$re2 = mysqli_fetch_array($q2);
							$comment = $re2['comment'];
								if($i%2==0){
									echo "<span class='text-left'>".$comment."</span>";
								}else{
									echo "<p class='text-right'>".$comment."</p>";
									
								}	
							}

							
						?>
							</div>
					</div>
				</div>
			</div>
		</div>

</body>
<script src="js/bootstrap.js"></script>
</html>