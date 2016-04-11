<!DOCTYPE HTML>
<html>
	<head>
		<?php include "../inc/head.php"; ?>
	</head>
	<body>
		<?php include "../inc/nav.php"; ?>
			
			<div class="container" id="article">
				
				<h1 id="article-title">Recreating “JACK” using three js</h1>
				<div class="author">Kranthi Dhanala</div>
				
				<hr>

				<h2 class="sub-title"></h2>
				<p><b>WebGL</b> (Web Graphics Library) is a JavaScript API for rendering interactive 3D and 2D graphics within any compatible web browser without the use of plug-ins.</p>

				<br><br>

				<img src="https://kranthidhanala.files.wordpress.com/2016/03/threejs1.jpg?w=1000">

				<br><br>
				<br><br>

				<p>Simple Code using three js:</p>

				<div id="code">
					var camera, scene, renderer;
<br>					var geometry, material, mesh;
<br>
<br>					init();
<br>					animate();
<br>
<br>					function init() {
<br>
<br>					camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 1, 500);
<br>					camera.position.set(0, 0, 100);
<br>					camera.lookAt(new THREE.Vector3(0, 0, 0));
<br>					//camera.rotation.y = 90 * Math.PI / 180;
<br>
<br>					material = new THREE.LineBasicMaterial({
<br>					color: 0xff0000,
<br>					linewidth : 10,
<br>					linecap: ’round’
<br>					});
<br>
<br>					scene = new THREE.Scene();
<br>
<br>					geometry = new THREE.Geometry();
<br>					//geometry.vertices.push(new THREE.Vector3(-10, 0, 0));
<br>					geometry.vertices.push(new THREE.Vector3(0, 0, 0));
<br>					geometry.vertices.push(new THREE.Vector3(20, 20, -20));
<br>
<br>					mesh = new THREE.Line(geometry, material);
<br>
<br>					var geometry2 = new THREE.Geometry();
<br>					geometry2.vertices.push(new THREE.Vector3(0, 20, 0));
<br>					geometry2.vertices.push(new THREE.Vector3(20, 0, -20));
<br>					line2 = new THREE.Line(geometry2, material);
<br>
<br>					var geometry3 = new THREE.Geometry();
<br>					geometry3.vertices.push(new THREE.Vector3(10, 10, -25));
<br>					geometry3.vertices.push(new THREE.Vector3(10, 10, 15));
<br>					line3 = new THREE.Line(geometry3, material);
<br>
<br>					scene.add(mesh);
<br>					scene.add(line2)
<br>					scene.add(line3)
<br>
<br>					renderer = new THREE.WebGLRenderer();
<br>					renderer.setSize(window.innerWidth, window.innerHeight);
<br>
<br>					document.body.appendChild(renderer.domElement);
<br>					//renderer.render(scene, camera);
<br>
<br>					}
<br>
<br>					function animate() {
<br>
<br>					requestAnimationFrame(animate);
<br>
<br>					camera.rotation.order = ‘YXZ’;
<br>
<br>					//camera.rotation.x += 0.01;
<br>					//camera.rotation.y += 0.02;
<br>
<br>					mesh.rotation.x += 0.01;
<br>					mesh.rotation.y += 0.02;
<br>
<br>					line2.rotation.x += 0.01;
<br>					line2.rotation.y += 0.02;
<br>
<br>					line3.rotation.x += 0.01;
<br>					line3.rotation.y += 0.02;
<br>
<br>					renderer.render(scene, camera);
<br>
<br>					}
				</div id="code">


			</div>

		<?php include "../inc/footer.php"; ?>
	</body>
</html>