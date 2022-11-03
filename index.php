<!done in May, 2022
Trevor Bohl!>
<html class = "index">
	<head>
		<link rel = "stylesheet" href = "base.css">
		<script src = "snail_script.js"></script>
	</head>
	<body>
		<h1 class = "title">Trevor Bohl's Portfolio Compendium</h1>
		<?php if(isset($_COOKIE['snail_name'])){?>
		<h2>Welcome, owner of <?= $_COOKIE['snail_name']?>.</h2>
		<div class = "snail_stuff">
			<h4><?=$_COOKIE['snail_name'];?><br></h4>
			<img class = "snail" src = "https://th.bing.com/th/id/OIP.69rLt0LJPP5lQUzMd4LoWwHaFZ?pid=ImgDet&rs=1"><br/><br/><br/><br>
			<button class="spin" value = "spin" onclick="spin()">spin!</button>
		</div>
		<?php } ?>
		<h2>Index:</h2>
		<div class = "index">
			<h3><a href="snail_zone.php">Snail Zone</a></h3>
			<h3><a href="thus_far.php">My Portfolio</a></h3>
			<h3><a href="future.php">Goals</a></h3>
		</div>
		<h5>Apologies for the ugliness, I possess very little graphic design talent, and I just think silly pictures look cool.</h5>
	</body>
</html>
