<?php
/**
 * Template Name: Art Objects List
*/
get_header(); ?>

<style>
	.art-object{
		color: #333;
		display: block;
		border-bottom: 1px solid #efefef;
    	padding: 15px;
	}
	.art-object:last-child{
		border:none;
	}
	.art-object img, .art-object .details{
		display: inline-block;
	}
	.art-object img{
	    margin-right: 20px;
    	border-radius: 5px;
    	box-shadow: 1px 1px 1px #cac9c9;
	}
	.art-object:hover{
		text-decoration: none;
	}
</style>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<p>
			The STEAM Wiki gallery is maintianed by its userbase. If you want to start a discussion about a piece that doesn't appear in the list, feel free to add it.
		</p>
		<a class="btn btn-primary" href="/wordpress/index.php/new-object/"><span class="glyphicon glyphicon-plus"></span> Add New Piece</a>
		<br><br><br>
		<?php
		$loop = new WP_Query( array( 
	        'post_type' => 'art_object',
	        'posts_per_page' => 15 ) );

		while ( $loop->have_posts() ) : $loop->the_post();
		?>
			<a class="art-object" href="<?php echo get_post_permalink() ?>">
				<?php 
					$img_id = get_post_meta(get_the_ID(), 'image', 1); 
					$img_src = wp_get_attachment_image_src($img_id);
					echo "<img src='" .$img_src[0]."' />";
				?>
				<div class="details">
					<h3><?php 
							echo get_post_meta(get_the_ID(), 'piece_name', 1);
							if(get_post_meta(get_the_ID(), 'year', 1)){
								echo " (" . get_post_meta(get_the_ID(), 'year', 1) . ")";
							}
						?>
					</h3>
					<?php echo get_post_meta(get_the_ID(), 'artist', 1); ?>
					<br>
					<?php echo get_post_meta(get_the_ID(), 'medium', 1); ?>
				</div> 
			</a>
		<?php
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
