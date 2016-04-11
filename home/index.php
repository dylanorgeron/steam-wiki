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
				}
			})
		</script>
		<style type="text/css">
			.container{
				max-width: 800px !important;
			}
		</style>
	</head>
	<body>
		<?php include "../inc/nav.php"; ?>
		<br>
		<br>
		<br>
		<div class="container">
			<div id="letters" class="row">
				<div class="col-xs-2 col-xs-offset-1 letter-block">
					<div class="letter">S</div>
					<div class="triangle"></div>
				</div>
				
				<div class="col-xs-2 letter-block">
					<div class="letter">T</div>
					<div class="triangle"></div>
				</div>
				
				<div class="col-xs-2 letter-block">
					<div class="letter">E</div>
					<div class="triangle"></div>
				</div>
				
				<div class="col-xs-2 letter-block">
					<div class="letter">A</div>
					<div class="triangle"></div>
				</div>

				<div class="col-xs-2 letter-block">
					<div class="letter">M</div>
					<div class="triangle"></div>
				</div>
			</div>
		</div>


			<div id="tag-block">
				<div class="container">
					<div id="close" class="pull-right">&times</div>
					
					<h1 id="tag-header"></h1>
					
					<div id="tag-squares" class="row"></div>
					
					<a id="view-more" href="../perspectives">View more</a>
				</div>
			</div>

		<br>
		<br>
		<br>
		<br>

		<?php include "../inc/footer.php"; ?>
	</body>
</html>

