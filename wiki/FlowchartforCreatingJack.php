<!DOCTYPE HTML>
<html>
	<head>
		<?php include "../inc/head.php"; ?>
	</head>
	<body>
		<?php include "../inc/nav.php"; ?>
			
			<div class="container" id="article">
				
				<h1 id="article-title">Control Flow Chart</h1>
				<div class="author">Melissa Dagley</div>
				
				<hr>

				<p>To gain a better understanding of how the Love Jack could have been constructed I created a simplified schematic of how the sculpture could be broken down into pieces.</p>

				<p>This helped me to visualize how many tubes, caps, etc. there needed to be in order to form the jack. This also helped me see how the pieces all fit together.</p>

				<p>It looked to me like there was one long center pole, with four shorter poles attached perpendicularly every 90 degrees. Knowing this helped to simplify the assembly stage of the control flow chart.</p>

				<img src="https://mdagleycautd.files.wordpress.com/2016/03/lovejack_schematic.png?w=940">

				<p>For my control flow chart I assume that the user has a schematic, more detailed than the one I have drawn, and that there is a method in place to interpret the schematic and determine how many tubes and caps, and what sizes they need to be. This is a very specific program that only assembles jacks.</p>

				<p>The user starts by uploading their schematic, and then the program analyzes the schematic before starting the creation process. Once the program knows how many tubes and caps and what sizes, it can begin. The first step is to create all of the tubes and caps. In a purely digital world, these objects could be stored in arrays. One array for short tubes, one for long tubes, and one for caps.</p>

				<p>After all of the pieces are made we come to the assembly function. First the program will attach all of the tubes together. We will start with the long center tube, and find the midpoint. We attach one short tube perpendicular to the midpoint of the center tube, and then rotate the center tube 90 degrees. The program then checks to see if there are more tubes to attach. If there are we repeat the process, if not, we move on to the next step of the assembly process.</p>

				<p>After all of the pieces are made we come to the assembly function. First the program will attach all of the tubes together. We will start with the long center tube, and find the midpoint. We attach one short tube perpendicular to the midpoint of the center tube, and then rotate the center tube 90 degrees. The program then checks to see if there are more tubes to attach. If there are we repeat the process, if not, we move on to the next step of the assembly process.</p>

				<img src="https://mdagleycautd.files.wordpress.com/2016/03/lovejack_controlflowchart21.png?w=940">

			</div>

		<?php include "../inc/footer.php"; ?>
	</body>
</html>