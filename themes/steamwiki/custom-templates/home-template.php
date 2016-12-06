<?php
/**
 * Template Name: Home Page
*/
get_header(); ?>

<style>
	h1.entry-title{display: none;}
	
	#about{
		border-left: 4px solid #93d6a5;
		padding-left: 20px;
		margin-bottom: 50px;
		font-style: italic;
	}

	#reasons h3{
		color: #8a8a8a;
	    font-size: 30px;
	    margin-bottom: 15px;
	    font-weight: normal;
	}

	#recent-discussions{
	    margin-bottom: 60px;
	}
	.discussion-tile{
		text-align: center;
	}
	.discussion-tile{  
		display: block;
    	padding: 15px;
    	color: #333;
	}
	.discussion-tile:hover{
		text-decoration: none;
	}
	.discussion-tile:last-child{
		border:none;
	}
	.text-muted{
		color: #969696;
	}
	.discussion-tile .title{
		font-size: 20px;
	}
	
	.art-tile{
		text-align: center;
	}

</style>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div id="about">
			<p>The STEAM Wiki is a project aiming to bridge the gap between the fine arts and STEM fields by encouraging individuals in STEM fields to share their interpretations of various pieces of art. The goal is to help individuals realize the connections between STEM and the arts that they may not have initially been aware of.</p>
		</div>
		
		<div id="reasons">
			<div class="row">
				<div class="col-sm-4">
					<h3>Grow</h3>
					<p>
						Our collection is currated by our userbase. If there is a piece you want to talk about that isn't in our collection, we encourage you to add it. Or, feel free to add a piece you want to see other talking about. 
					</p>
				</div>
				<div class="col-sm-4">
					<h3>Contribute</h3>
					<p>
						Your voice can start the next big discussion.Do you see a pattern or data structure in a certain piece of art? We want to see what connections you can draw between technology and the fine arts.
					</p>
				</div>
				<div class="col-sm-4">
					<h3>Respond</h3>
					<p>
						Just as important as the initall discussion of a piece, is the discussion between users that follows. Let the author know what you think of their perspective. Discussion helps build a solid community around the STEAM concept. 
					</p>
				</div>
			</div>
		</div>



		<hr>

		<div id="recent-discussions">
			<h4>Recent Discussions</h4>
			<div class="row">
			<?php 
				$args = array(
					'posts_per_page'   => 3,
					'offset'           => 0,
					'category_name'    => '',
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
				<a class="discussion-tile col-sm-4" href="<?php the_permalink(); ?>">
					<div class="title">
						<?php the_title(); ?>
					</div>
					<div class="author">
						<?php echo get_author_name(); ?>
					</div>
					<div class="date">
						<?php echo get_the_date(); ?>
					</div>
				</a>
			<?php endforeach; ?>
			</div>
		</div>

		<hr>

		<div id="gallery-preview">
			<h4>Recent Pieces</h4>
			<br>
			<div class="row">
			<?php 
				$args = array(
					'posts_per_page'   => 4,
					'offset'           => 0,
					'category_name'    => '',
					'orderby'          => 'date',
					'order'            => 'DESC',
					'include'          => '',
					'exclude'          => '',
					'meta_key'         => '',
					'meta_value'       => '',
					'post_type'        => 'art_object',
					'post_mime_type'   => '',
					'post_parent'      => '',
					'author'	   => '',
					'author_name'	   => '',
					'post_status'      => 'publish',
					'suppress_filters' => true );
				$posts = get_posts($args);
				foreach ( $posts as $post ) : setup_postdata( $post ); 
			?>
			<a class="art-tile col-xs-3" href="<?php echo get_post_permalink() ?>">
				<?php 
					$img_id = get_post_meta(get_the_ID(), 'image', 1); 
					$img_src = wp_get_attachment_image_src($img_id);
					echo "<img src='" .$img_src[0]."' />";
				?>
				<div class="details">
					<div>
					<?php 
						echo get_post_meta(get_the_ID(), 'piece_name', 1);
						if(get_post_meta(get_the_ID(), 'year', 1)){
							echo " (" . get_post_meta(get_the_ID(), 'year', 1) . ")";
						}
					?>
					</div>
				</div> 
			</a>
			<?php endforeach; ?>
			</div>
		</div>


	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
