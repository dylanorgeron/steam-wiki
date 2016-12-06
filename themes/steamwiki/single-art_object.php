<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<style>
	#art-img{
		max-height: 700px;
		float: right;
	}
	#title{
		font-size: 1.3em;
		font-weight: bold;
	}
	#year{
	}
	#question{
	    margin-top: 20px;
	}
	#artist-notes{
	    margin-top: 20px;
    	border-top: 1px solid #cecece;
    	padding-top: 20px;
	}
	#discussions{
		margin-top: 50px;
	}
	.discussion-link{
		display: block;
		border-bottom: 1px solid #bbb;
    	padding: 15px;
    	color: #333;
	}
	.discussion-link:hover{
		text-decoration: none;
	}
	.discussion-link:last-child{
		border:none;
	}
	.text-muted{
		color: #969696;
	}
	.discussion-link .title{
		font-size: 20px;
	}
</style>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		?>
			<?php $title = get_the_title(); ?>
			<div class="row">
				<div class="col-sm-6">
					<div id="info">
						<div id="title">
							<?php echo get_post_meta(get_the_ID(), 'piece_name', 1) ?>
							<span id="year">
								<?php if(get_post_meta(get_the_ID(), 'year', 1)){echo " (".get_post_meta(get_the_ID(), 'year', 1).")";} ?>
							</span>
						</div>
						<div id="artist">
							<?php echo get_post_meta(get_the_ID(), 'artist', 1); ?>
						</div>
						<div id="medium">
							<?php echo get_post_meta(get_the_ID(), 'medium', 1); ?>
						</div>

						<div id="question">
							<?php echo get_post_meta(get_the_ID(), 'question', 1); ?>
						</div>
						<div id="artist-notes">
							<?php echo get_post_meta(get_the_ID(), 'artist_notes', 1); ?>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div id="artwork">
						<?php 
							$img_id = get_post_meta(get_the_ID(), 'image', 1); 
							$img_src = wp_get_attachment_image_src($img_id, 'large');
							echo "<img id='art-img' src='" .$img_src[0]."' />";
						 ?>
					</div>
				</div>
			</div>
			<div id="discussions">
			<h3>See What People Are Saying </h3>
			<br>
			<?php 
				$cat_id = get_cat_ID(get_the_title());
				$args = array(
					'posts_per_page'   => 3,
					'offset'           => 0,
					'category_name'    => get_the_title(),
					'orderby'          => 'date',
					'order'            => 'DESC',
					'include'          => '',
					'exclude'          => '',
					'meta_key'         => '',
					'meta_value'       => '',
					'post_type'        => 'discussion',
					'post_mime_type'   => '',
					'post_parent'      => '',
					'author'	   => '',
					'author_name'	   => '',
					'post_status'      => 'publish',
					'suppress_filters' => true );
				$posts = get_posts($args);
				foreach ( $posts as $post ) : setup_postdata( $post ); 
			?>
				<a class="discussion-link" href="<?php the_permalink(); ?>">
					<div class="title">
						<?php the_title(); ?>
					</div>
					<div class="author">
						<?php echo "<span class='text-muted'>by </span>"; the_author(); ?>
					</div>
					<div class="date">
						<?php echo get_the_date(); ?>
					</div>
				</a>
			<?php endforeach; ?>
			<?php 
				$cat_id = get_category_by_slug(sanitize_title_for_query($title)); 
				$cat_id = $cat_id->term_id;
			?>
			<br>
			<a href="<?php echo add_query_arg('art-object', $cat_id, '/wordpress/index.php/new-discussion/'); ?>">Start Your Own Discussion</a>
			</div>
		<?php
		// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
