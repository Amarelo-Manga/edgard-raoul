<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">

	<?php if ( have_posts() ) : ?>
		<header class="page-header">
		</header><!-- .page-header -->
	<?php endif; ?>

	<div  class="container">
		<main id="main" class="row" role="main">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="media">
	  <img class="mr-3" src="<?php the_post_thumbnail()?>">
	  <div class="media-body">
		<h2 class="mt-0"><?php the_title( ); ?></h2>
		<?php the_content(); ?>
	  </div>
	</div>
			</div>
		

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
