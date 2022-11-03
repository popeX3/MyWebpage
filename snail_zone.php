<!done in May, 2022
Trevor Bohl!>
<?php
	if(isset($_POST["name_input"])){
		setcookie('snail_name',$_POST["name_input"]);
		header("Refresh:0");
	}
?>

<html class = "snail_zone">
	<head>
		<link rel = "stylesheet" href = "base.css">
		<script src = "snail_script.js"></script>
	</head>
	<body>
		<?php if(!isset($_COOKIE['snail_name']) or isset($_POST["rename"])){?>
		<div class = "snailForm">
			<h3>Please name your snail.<br><form action = # method = "post">
				<input type="text" id="name_input" name="name_input"/>
				<input type="submit" value = "Submit Name"/>
			<br></form></h3><br>
			<a class = "main" href="index.php">Back To Main</a>
		</div>
		<?php } else{?>
		<div class = "not_snail_stuff">
			<a class = "main" href="index.php">Back To Main</a>
			<h2><form action = # method = "post">
				<input type = "submit" name = "rename" value = "Rename"/>
			</form></h2>
		</div>
		<div class = "snail_stuff">
			<h4><?=$_COOKIE['snail_name'];?><br></h4>
			<img class = "snail" src = "https://th.bing.com/th/id/OIP.69rLt0LJPP5lQUzMd4LoWwHaFZ?pid=ImgDet&rs=1"><br/><br/><br/><br>
			<button class="spin" value = "spin" onclick="spin()">spin!</button>
		</div>
		<?php } ?><br><br>
	</body>
</html>
