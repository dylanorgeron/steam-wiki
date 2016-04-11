<!DOCTYPE HTML>
<html>
	<head>
		<?php include "../inc/head.php"; ?>
	</head>
	<body>
		<?php include "../inc/nav.php"; ?>
			
			<div class="container" id="article">
				
				<h1 id="article-title">Sonification of Jack</h1>
				<div class="author">Piyush Kumar</div>
				
				<hr>

				<h2 class="sub-title">Introduction</h2>
				<p>Sonification is the process of taking a dataset and mapping it with a corresponding scale of sound . Inorder to sonify Love Jack Sculptor I have used a process called image sonification </p>

				<br>

				<span><b>Steps are as follows:</b></span>

				<ol>
					<li>Choose a image</li>
					<li>Extract component of RGB from the pixel clicked on screen . ( every pixel has a specific color with particular RGB)</li>
					<li>Map the values of each pixel to numerical value into a array.</li>
					<li>Map the values Stored in the array to that of a Sound.</li>
					<li>Play the sound.</li>
				</ol>

				<br>

				<p>Just like three components of  of color in any image, a song in general has three components: bass, hi-hat, and snare. Hence, I mapped the sounds to color component as follows:</p>

				<table class="table table-hover">
					<tr>
						<td>Bass</td>
						<td><span class="glyphicon glyphicon-arrow-right"></td>
						<td>Red</td>
					</tr>
					<tr>
						<td>Snare</td>
						<td><span class="glyphicon glyphicon-arrow-right"></td>
						<td>Green</td>
					</tr>
					<tr>
						<td>Hi-hat</td>
						<td><span class="glyphicon glyphicon-arrow-right"></td>
						<td>Blue</td>
					</tr>
				</table>

				<br>
				
				<a href="https://www.dropbox.com/sh/qra4twsmh4q0cdp/AABf9CQV1EDuUWKHAd18zEi8a?dl=0">The code can be downloaded here.</a>

			</div>

		<?php include "../inc/footer.php"; ?>
	</body>
</html>