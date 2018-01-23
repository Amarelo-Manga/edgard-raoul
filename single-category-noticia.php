<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); 
 

global $post;
$post_name = $post->post_name;

?>


<div class="container-fluid <?php echo $post_name ?> " style="background-image= url("<?php echo get_the_post_thumbnail_url() ?>")">
	<div  class="content-area">
		<main id="main" class="" role="main">
			<div class="container"><h1><?php the_title();?></h1></div>
			<p><?php the_content(); ?></p>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->



<?php get_footer();
