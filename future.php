<!done in May, 2022
Trevor Bohl!>
<html class = "futureGoals">
	<head>
		<link rel = "stylesheet" href = "base.css">
		<script src = "snail_script.js"></script>
	</head>
	<body>
		<div class = "gList">
			<h2>Some future goals:</h2>
			<ul>
				<li>Above all I'm looking to mature my practical skills; I'd love to work with a professional team to gain real world experience, and some of that wisdom unique to pragmatic veterans</li>
				<li>After that, I'd like to retire to teach, and maybe get some more degrees just for the sake of it.</li>
				<li>Maybe one day, I may even dare to purchase land (presumptuous, I know)</li>
			</ul>
			<b><a class = "main" href="index.php" style = "color:black;">Back To Main</a></b>
		</div>
		<?php if(isset($_COOKIE['snail_name'])){?>
		<div class = "snail_stuff">
			<h4><?=$_COOKIE['snail_name'];?><br></h4>
			<img class = "snail" src = "https://th.bing.com/th/id/OIP.69rLt0LJPP5lQUzMd4LoWwHaFZ?pid=ImgDet&rs=1"><br/><br/><br/><br>
			<button class="spin" value = "spin" onclick="spin()">spin!</button>
		</div>
		<?php } ?>
	</body>
</html> 
