<!doctype html>
<html>
<head>
	<title>Project 1</title>
	<meta charset='utf-8'>
	<link href="css/main.css" rel="stylesheet">
</head>
<body>
	<h1>Youjin Kim</h1>
	<img src="images/profilepicture.jpg" alt="profile picture">
	<h2>About Me</h2>
	<p>
	<?php 
	echo 'Hello World! You are visiting ';
	echo $_SERVER['SERVER_NAME']; 
	?>
	</p>
	<p>
		I've worked for a company which developed an Integrated Developmet Environment (IDE) for military training simulation using C# on .Net framework and Unity3D program. Unity3D is for one of the features that represents 3D image simulation for the IDE. This is my last semester towards the 'Web Technology Certificate' at Harvard Extension School. I have taken two fundamental web technology courses first semester, then "Modern and Mobile Front-End Web Design I" and "Introduction to Web Content Management Systems Site Development" during the following two semesters. 
		After I learned and studied about front-end side and Content Management Systems (CMS) through last couple of classes, I felt a lack of my knowledge and want to expand my skills to back-end side. 
		I thought it would be great to learn back-end and get a full picture of the web in my head. It is a pretty challenging class for me even though it has been only two weeks since I have no experience in using command line via Terminal or using Git/Github. However, I am very excited in learning all this material in-depth through this class. 
	</p>
	
	<blockquote>
	<?php

	$input = array("The past can hurt. But the way I see it, you can either run from it or learn from it. - Lion King", 
		"You are braver than you believe, stronger than you seem, and smarter than you think. - Winnie the Pooh", 
		"Every adventure requires a first step - Alice in Wonderland", 
		"You know what the issue is with this world? Everyone wants a magical solution to their problem, and everyone refuses to believe in magic. - Alice in Wonderland");

	$rand_key = array_rand($input, 1);
	echo $input[$rand_key]. "\n";

	?>
	</blockquote>

</body>
</html>