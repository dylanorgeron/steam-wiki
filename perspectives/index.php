<?php ?>
<!DOCTYPE HTML>
<html>
	<head>
		<?php include "../inc/head.php"; ?>
		<script type="text/javascript">
			//load projects
			var projects = []
			var data = $.ajax({
				dataType: "json",
				url: "../projects.json",
				success: function(){
					$.each(data.responseJSON,function(){
						projects.push(this)
					})
					$(document).ready(function(){

						$.each(projects, function(i,v){
							url = v.title.replace(/\s/g, '');
							$("#"+v.category).append("<div class='col-sm-4'><a href='../wiki/"+url+".php' class='square'><div class='tag-title'>"+v.title+"</div><div class='author'>"+v.author+"</div><div class='social'><span class='st_facebook_large' displayText='Facebook'></span><span class='st_twitter_large' displayText='Tweet'></span><span class='st_pinterest_large' displayText='Pinterest'></span></div></a></div>")
						})
					})
				}
			})

		</script>
	</head>
	<body>
		<?php include "../inc/nav.php"; ?>


		<div id="perspectives" class="container">

			<h1 id="main-title">Perspectives of Love Jack</h1>
			
			<h1>Science</h1>
			<div id="Science" class="row">
			</div>

			<h1>Technology</h1>
			<div id="Technology" class="row">
			</div>

			<h1>Engineering</h1>
			<div id="Engineering" class="row">
			</div>

			<h1>Art</h1>
			<div id="Art" class="row">
			</div>

			<h1>Math</h1>
			<div id="Math" class="row">
			</div>

			
		</div>

		<?php include "../inc/footer.php"; ?>
	</body>
</html>