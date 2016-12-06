<?php
/**
 * Template Name: New Discussion
*/

if(!is_user_logged_in()){
	header("Location: /wordpress/wp-login.php?redirect_to=/wordpress/index.php/new-discussion/");
}

$postTitleError = '';
 

if ( isset( $_POST['submitted'] ) ) {
 	require_once(ABSPATH . 'wp-config.php'); 
   	require_once(ABSPATH . 'wp-includes/wp-db.php'); 
   	require_once(ABSPATH . 'wp-admin/includes/taxonomy.php'); 
 	
 	#make sure a title was entered
    if ( trim( $_POST['postTitle'] ) === '' ) {
        $postTitleError = 'Please enter a title.';
        $hasError = true;
    }

    #get post information from $_POST
    $title 			= sanitize_text_field($_POST["postTitle"]);

    #build post array
	$post_information = array(
	    'post_title' => wp_strip_all_tags( $_POST['postTitle'] ),
	    'post_content' => sanitize_post($_POST['post-content']),
	    'post_type' => 'discussion',
	    'post_status' => 'publish'
	);
	
	#create post
	$post_id = wp_insert_post( $post_information );
	wp_set_post_categories($post_id, $_POST['cat']);

	#redirect to new object page
	$link = get_permalink($post_id);
	header( "Location: $link" );

}
get_header(); ?>

<style>
	h1.entry-title{display: none;}
	.mce-path-item.mce-last{
		display: none;
	}
</style>
<script>
	jQuery("document").ready(function(){
		var art_object = <?php echo $_GET['art-object']; ?>;
		if(art_object){
			jQuery("#cat").val(art_object)
		}
	})
</script>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<h1>New Discussion</h1>
		<br>
		<form action="" id="primaryPostForm" method="POST">
		    
		    <!--Title-->
		    <fieldset>
		        <label for="postTitle"><?php _e('Title:', 'framework') ?></label>
		        <input type="text" name="postTitle" id="postTitle" class="required" />
		    </fieldset>


			<fieldset>
				<label for="">Which object are you discussing?</label>
				<br><br>
				<?php $args = array(
					'show_option_all'    => '',
					'show_option_none'   => 'Select an Object',
					'option_none_value'  => '-1',
					'orderby'            => 'ID',
					'order'              => 'ASC',
					'show_count'         => 0,
					'hide_empty'         => 0,
					'child_of'           => 0,
					'exclude'            => '1',
					'include'            => '',
					'echo'               => 1,
					'selected'           => 0,
					'hierarchical'       => 0,
					'name'               => 'cat',
					'id'                 => '',
					'class'              => 'postform',
					'depth'              => 0,
					'tab_index'          => 0,
					'taxonomy'           => 'category',
					'hide_if_empty'      => false,
					'value_field'	     => 'term_id',
					);
					wp_dropdown_categories( $args ); 
				?>
			</fieldset>

			<br><br>

			<?php wp_editor( $content, 'post-content', $settings = array('name'=>'post-content') ); ?> 

		    <!--Submit-->
		    <fieldset>
		        <input type="hidden" name="submitted" id="submitted" value="true" />
		        <button type="submit"><?php _e('Add Post', 'framework') ?></button>
		    </fieldset>

		</form>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
