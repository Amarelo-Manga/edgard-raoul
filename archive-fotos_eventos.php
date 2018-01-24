<?php get_header(); ?>

<section class="wrap">
	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
				
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header><!-- .page-header -->
	<?php endif; ?>

	<main  class="row " role="main"style="margin-right: 0;">
	<?php
		$args = array(
					'posts_per_page'	=> -1,
					'post_type'	=> 'fotos_eventos',
				);
		$posts = get_posts($args);
		if( $posts ){ 
		 	foreach( $posts as $post ){ 
		?>
		
					
	<div class="col-lg-6 col-md-6 col-sm-12 fotos-eventos box <?php global $post; echo $post->post_name; ?> " style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>')"> 
		<div class="efeito">
			<?php
				$lang = pll_current_language('slug');
				if($lang == 'pt'){
					 $btn = 'ver mais';
				}else{
					 $btn  = 'read more';
				}
			?>	
			<h2 class="texto-central text-white text-center"><?php the_title() ?></h2>
				<a href="<?php the_permalink(); ?>" class="readmore posicionando-btn margem-btn"><?php echo $btn ?></a>



		</div>
				
			</div>
		
				
	<?php 
			}//End Foreach Posts
		}//End if posts
	?>
</main><!-- #main -->
</section>

<?php get_footer(); ?>