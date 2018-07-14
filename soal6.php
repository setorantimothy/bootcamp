<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<nav class="nav">
		<a href="soal1.html" class="nav-link">Soal 1</a>
		<a href="soal2.html" class="nav-link">Soal 2</a>
		<a href="soal3.html" class="nav-link">Soal 3</a>
		<a href="soal4.html" class="nav-link">Soal 4</a>
		<a href="soal5.php" class="nav-link">Soal 5</a>
		<a href="soal6.php" class="nav-link">Soal 6</a>
		<a href="soal7.php" class="nav-link">Soal 7</a>
	</nav>
<script src="js/bootstrap.js"></script>

<?php
$con = mysqli_connect('localhost','root','','bootcamp');

$sql = "SELECT tbposts.*,tbuser.username from tbposts inner join tbuser on tbuser.id = tbposts.createdBy";
$query = mysqli_query($con,$sql);
while ($re = mysqli_fetch_array($query)) {
	$title = $re['title'];
	$content = $re['content'];
	$username = $re['username'];
	$id = $re['id'];
	
	echo "-posts.title :".$title."<br>-posts.users.username: dibuat oleh ".$username."<br>Comment : ";
	$sql2 = "select *from tbcomments where postId='$id'";
	$q2 = mysqli_query($con,$sql2)or die("error comen");
	while ($re2 = mysqli_fetch_array($q2)){
		$comment = $re2['comment'];
		echo "<br>-".$comment;
	}
}


?>