<!DOCTYPE HTML>
<html>
	<head>
		<?php include "../inc/head.php"; ?>
	</head>
	<body>
		<?php include "../inc/nav.php"; ?>
			
			<div class="container" id="article">
				
				<h1 id="article-title">Jack and Spatial Data Structures</h1>
				<hr>

				<h2 class="sub-title"></h2>
				<p>Spatial data, also known as geospatial data, is information about a physical object that can be represented by numerical values in a geographic coordinate system.Generally speaking, spatial data represents the location, size and shape of an object on planet Earth such as a building, lake, mountain or township.</p>

				<p>Spatial data structures are structures that manipulate spatial data, that is, data that has geometric coordinates. Spatial data comes up in many areas of computer science, like Geographic Information Systems (GIS), robotics, computer graphics, virtual reality, as well as in other disciplines like finite element analysis, solid modeling, computer-aided design and manufacturing, biology, statistics, VLSI design, to mention just a few.</p>

				<p>Spatial Data structures helps to efficiently store and retrieve the spatial data on querying.</p>

				<h4>Examples</h4>

				<ol>
					<li>KD Trees</li>
					<li>B+ Trees</li>
					<li>Quad Trees</li>
				</ol>

				<br>

				<h4>KD Trees</h4>

				<p>In computer science, a <b>k-d tree</b> (short for <em>k-dimensional tree</em>) is a space-partitioning data structure for organizing points in a k-dimensional space. k-d trees are a useful data structure for several applications, such as searches involving a multidimensional search key (e.g. range searches and nearest neighbor searches). k-d trees are a special case of binary space partitioning trees.</p>

				<p>The k-d tree is a binary tree in which every node is a k-dimensional point. Every non-leaf node can be thought of as implicitly generating a splitting hyperplane that divides the space into two parts, known as half-spaces. Points to the left of this hyperplane are represented by the left subtree of that node and points right of the hyperplane are represented by the right subtree. The hyperplane direction is chosen in the following way: every node in the tree is associated with one of the k-dimensions, with the hyperplane perpendicular to that dimension’s axis.</p>

				<br>

				<h4>K means</h4>

				<img src="https://kranthidhanala.files.wordpress.com/2016/03/kmeans.png?w=1000">

				<h4>Jack makes a special case</h4>

				<img src="https://kranthidhanala.files.wordpress.com/2016/03/img_1911.jpg?w=1000">


			</div>

		<?php include "../inc/footer.php"; ?>
	</body>
</html>