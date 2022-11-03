<!done in May, 2022
Trevor Bohl!>
<html class = "thusFar">
	<head>
		<link rel="stylesheet" href="base.css"> 
		<script src = "snail_script.js"></script>
	</head>
	<div class = "pList">
		<body>
			<h2>My accomplishments thus far:</h2>
			<ul>	
				<li>most of my work has been strictly academic, I've been nice and snug in my ivory tower</li>
				<li>at the behest of academia, I've written a working red-black tree in C, made the original skeleton of this website, and
				done various intermittent little projects</li>
				<li>I've also engaged in several little personal side projects, currently I'm working on a from scratch NES emulator, and I've done my fair share of leetcode problems for fun/preperatory reasons (although that's of course only debatably different from academics).</li>
				<li>Over the course of my ventures, I've acquired experience in several programming languages, and using several tools: C, makefile, Python, PHP, Java, Javascript, NodeJS, Docker, HTML, and CSS are all disciplines I'd consider myself at least acquainted with.</li>
			</ul>
			<p><b>Cheers!</b></p>
			<a class = "main" href="index.php">Back To Main</a>
		</body>
	</div>
	<?php if(isset($_COOKIE['snail_name'])){?>
	<div class = "snail_stuff">
		<h4><?=$_COOKIE['snail_name'];?><br></h4>
		<img class = "snail" src = "https://th.bing.com/th/id/OIP.69rLt0LJPP5lQUzMd4LoWwHaFZ?pid=ImgDet&rs=1"><br/><br/><br/><br>
		<button class="spin" value = "spin" onclick="spin()">spin!</button>
	</div>
	<?php } ?>
</html>
