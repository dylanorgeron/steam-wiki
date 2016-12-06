<?php
/**
 * Template Name: New Object
*/

if(!is_user_logged_in()){
	header("Location: /wordpress/wp-login.php?redirect_to=/wordpress/index.php/new-object/");
}

$postTitleError = '';
 
if ( isset( $_POST['submitted'] ) ) {
 	require_once(ABSPATH . 'wp-config.php'); 
   	require_once(ABSPATH . 'wp-includes/wp-db.php'); 
   	require_once(ABSPATH . 'wp-admin/includes/taxonomy.php'); 
 	require_once( ABSPATH . 'wp-admin/includes/image.php' );
	require_once( ABSPATH . 'wp-admin/includes/file.php' );
	require_once( ABSPATH . 'wp-admin/includes/media.php' );

 	#make sure a title was entered
    if ( trim( $_POST['postPieceName'] ) === '' ) {
        $postTitleError = 'Please enter a title.';
        $hasError = true;
    }
    
    #get post information from $_POST
    $piece_name		= sanitize_text_field($_POST["postPieceName"]);
    $artist 		= sanitize_text_field($_POST["postArtist"]);
    $year 			= sanitize_text_field($_POST["postYear"]);
    $medium 		= sanitize_text_field($_POST["postMedium"]);
    $question 		= sanitize_text_field($_POST["postQuestion"]);
    $artist_notes 	= sanitize_text_field($_POST["postNotes"]);

    $title = "$artist - $piece_name";

    #build post array
	$post_information = array(
		'post_title' => $title,
	    'post_type' => 'art_object',
	    'post_status' => 'publish'
	);
	
	#get cat id for this title
	#if the id isnt 0, this piece already exists and we wont make a post
	$cat_ID = get_cat_ID($title);  
	if($cat_ID == 0){
		wp_create_category($title);

		#create post
		$post_id = wp_insert_post( $post_information );
		
		#upload file
		$attachment_id = media_handle_upload('postImage', $post_id);

		#update custom fields
		update_field('piece_name', $piece_name, $post_id);
		update_field('artist', $artist, $post_id);
		update_field('year', $year, $post_id);
		update_field('medium', $medium, $post_id);
		update_field('question', $question, $post_id);
		update_field('artist_notes', $artist_notes, $post_id);
		update_field('image', $attachment_id, $post_id);
		
		#redirect to new object page
		$link = get_permalink($post_id);
		header( "Location: $link" );
	}

}
get_header(); ?>

<style>
	h1.entry-title{display: none;}
</style>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<h1>New Art Object</h1>
		<br>
		<form action="" id="primaryPostForm" method="POST" enctype="multipart/form-data">
		    
		    <!--Title-->
		    <fieldset>
		        <label for="postPieceName"><?php _e('Artwork Title:', 'framework') ?></label>
		        <input type="text" name="postPieceName" id="postPieceName" class="required" />
		    </fieldset>
			
			<!--Artist-->
		    <fieldset>
		        <label for="postArtist"><?php _e('Artist:', 'framework') ?></label>
		        <input type="text" name="postArtist" id="postArtist" class="" />
		    </fieldset>

			<!--Year-->
		    <fieldset>
		        <label for="postYear"><?php _e('Year:', 'framework') ?></label>
		        <input type="text" name="postYear" id="postYear" class="" />
		    </fieldset>

			<!--Medium-->
		    <fieldset>
		        <label for="postMedium"><?php _e('Medium:', 'framework') ?></label>
		        <input type="text" name="postMedium" id="postMedium" class="" />
		    </fieldset>

			<!--Question-->
		    <fieldset>
		        <label for="postQuestion"><?php _e('Question:', 'framework') ?></label>
		        <input type="text" name="postQuestion" id="postQuestion" class="" />
		    </fieldset>

			<!--Notes-->
		    <fieldset>
		        <label for="postNotes"><?php _e('Notes:', 'framework') ?></label>
		        <textarea rows=4 name="postNotes" id="postNotes" class="" /></textarea>
		    </fieldset>

			<!--Image-->
		    <fieldset>
		        <label for="postImage"><?php _e('Image:', 'framework') ?></label>
		        <input type="file" name="postImage" id="postImage" class="" />
		    </fieldset>

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
