<?php
/**
 * Template Name: Discussions List
*/
get_header(); ?>

<style>
	.discussion{
		color: #333;
		display: block;
		border-bottom: 1px solid #bbb;
    	padding: 15px;
	}
	.discussion:last-child{
		border:none;
	}
	.discussion img, .discussion .details{
		display: inline-block;
	}
	.discussion img{
	    margin-right: 20px;
    	border-radius: 5px;
    	box-shadow: 1px 1px 1px #585858;
	}
</style>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<p>
			The STEAM Wiki hosts discussions over various art objects. All of our discussions are user submitted. Find something that strikes your fancy below, or start your own conversation.
		</p>
		<a class="btn btn-primary" href="/wordpress/index.php/new-discussion/"><span class="glyphicon glyphicon-plus"></span> Start New Discussion</a>
		<br><br><br>
		<?php
		$loop = new WP_Query( array( 
	        'post_type' => 'discussion',
	        'posts_per_page' => 15 ) );

		while ( $loop->have_posts() ) : $loop->the_post();
		?>
			<a class="discussion" href="<?php echo get_post_permalink() ?>">
				<div class="details">
					<h3><?php 
							echo the_title();
							if(get_post_meta(get_the_ID(), 'year', 1)){
								echo " (" . get_post_meta(get_the_ID(), 'year', 1) . ")";
							}
						?>
					</h3>
					<?php $cat = get_the_category(); echo $cat[0]->name; ?>
					<br>
					<?php echo get_the_author(); ?>
					<br>
					<?php echo get_the_date(); ?>
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
