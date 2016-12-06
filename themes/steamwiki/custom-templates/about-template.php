<?php
/**
 * Template Name: About
*/
get_header(); ?>

<style>

</style>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<h3>About the STEAM Wiki</h3>
		<br>
		<p>
			The STEAM Wiki began as an idea in a classroom. In the Spring of 2016, Paul Fishwick led a course that explored 
			the connections between artwork in the Davidow Collection and various disciplines in STEM. The course inspired 
			students to analyze art in new ways and explore their field of study in a way that may not have occured to them
			before. The STEAM Wiki is an extension of that goal, encouraging users to apply their experiences and expertise 
			to various pieces of art. By doing so, we hope to help people realize the relationships between STEM and the 
			fine arts that people may not have been aware of.
		</p>	

		<p>
			The STEAM Wiki also acts as extension to another project that has been running as a collaboration between the 
			Art Science Lab and the Creative Autonoma Lab at UT Dallas. Using a system of Bluetooth Low Energy devices (BLE),
			They have connected physical objects with the digital world. Each BLE beacon sends out a short range signal at 
			regular intervals. The signals can be read and interpreted by an app created by several students working in the 
			labs. The app will then redirect users to a page listing in depth details about the artwork, as well as provide 
			them with a list of active discussions other users are having about the piece. 
		</p>

		<p>
			This is a culmination of several projects and contributions from various students, alumni, and professors.
			It is intended to be a project that can be handed off to one of the labs, so that it may be maintained and improved
			on by future students.
		</p>
	

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
