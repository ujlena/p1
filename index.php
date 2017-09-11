<!doctype html>
<html>
<head>
	<title>Project 1</title>
	<meta charset='utf-8'>
	<link href="css/main.css" rel="stylesheet">
</head>
<body>
	<h2>Youjin Kim</h2>
	<img src="images/profilepicture.jpg" alt="profile picture">
	<h2>About Me</h2>
	<p>
	<?php 
	echo 'Hello World! You are visiting ';
	echo $_SERVER['SERVER_NAME']; 
	?>
	</p>
	<p>
		I've worked for a company which developed an IDE for military training simulation using C# on .Net framework and Unity3D program. Unity3D is for one of the features represents 3D image simulation for the IDE. This is my last semester towards to 'web technology certificate' in Harvard Extension School. I have been taking two fundamental courses first semester, then one of each classes DGMD-E20 and E25 following two semesters. After dealing with front-end side even with adapting CMSs skills through last couple of classes, I felt some limitation of my knowledge and want to expand it to back-end. I thought it would be great to learn and be clear what's going on on server-side and get a big picture to visualize in my head not only the front-end side. It is pretty challenging class for me even thought it has been only two weeks since I have no experience in using command lines via Terminal or using Git/Github. But I am very excited in learning all this material in-depth through this class. 
	</p>
	
	<blockquote>
	<?php

	$input = array("The past can hurt. But the way I see it, you can either run from it or learn from it. - Lion King", 
		"You are braver than you believe, stronger than you seem, and smarter than you think. - Winnie the Pooh", 
		"Every adventure requires a first step - Alice in Wonderland", 
		"You know what the issue is with this world? Everyone wants a magical solution to their problem, and everyone refuses to believe in magic. - Alice in Wonderland");
	$rand_keys = array_rand($input, 2);
	echo $input[$rand_keys[0]]. "\n";
	echo $input[$rand_keys[1]]. "\n";

	?>
	</blockquote>

</body>
</html>