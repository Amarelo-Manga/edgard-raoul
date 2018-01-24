<?php get_header(); ?>
<!--Bloco sobre Edgar Raoul-->
<div id="about" class="container">
	<div class="row">
		<div id="about_rauol" class="col-lg-4 col-md-6 col-sm-12 animated fadeInUp"><img src="<?php echo get_template_directory_uri()?>/assets/img/edgard-raoul-mobile.jpg" width="100%" alt="Edgar Raoul" ></div>
		<div id="txt_about_raoul" class="col-lg-8 col-md-6 col-sm-12  animated fadeInUp"> 
			<?php
				$lang = pll_current_language('slug');
				if($lang == 'pt'){
					$postId = 'page_id=11';
				}else{
					$postId = 'page_id=485';
				}
			?>

		<?php $the_query = new WP_Query( $postId ); ?>
			<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
				<?php the_content(); ?>
			<?php endwhile;?>
		
		</div>
	</div>
</div>
<!--Bloco DE Descrição-->
<div id="bg_content" class="container-fluid">
	<div class="row">
		<div id="txt_descri" class="col-lg-8 col-md-12 col-sm-12 ">
			<div class="align_text_descri col-xl-8 col-lg-11 col-md-12 col-sm-12 animated fadeInUp">

			<?php
				$lang = pll_current_language('slug');
				if($lang == 'pt'){
					$postId = 'page_id=14';
				}else{
					$postId = 'page_id=488';
				}
			?>
		<?php $the_query = new WP_Query( $postId ); ?>
			<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
				<?php the_content(); ?>
			<?php endwhile;?>
		</div>
			<blockquote class="frase" cite="https://br.linkedin.com/in/edgard-raoul-gomes-neto-a0004279">
				<div class="align_text_descri col-xl-8 col-lg-11 col-md-12 col-sm-12"> 
			<?php
				$lang = pll_current_language('slug');
				if($lang == 'pt'){
					$postId = 'page_id=16';
				}else{
					$postId = 'page_id=491';
				}
			?>
			<?php $the_query = new WP_Query( $postId ); ?>
				<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
					<?php the_content(); ?>
				<?php endwhile;?>

			</div>
			</blockquote>
		</div>
		<div id="img_padding" class="col-lg-4 col-md-12 col-sm-12"> </div>
	</div>
</div>
<!-- Onde Começou  -->
<div id="comecou" class="container-fluid">
	<div class="row">
		<div id="img_comecoou" class="col-lx-7 col-lg-6 col-md-12 col-sm-12"></div>
		<div id="tudo_comecou" class="col-lx-5 col-lg-6 col-md-12 col-sm-12">
			<div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 animated fadeInUp">

			<?php
				$lang = pll_current_language('slug');
				if($lang == 'pt'){
					$postId = 'page_id=26';
				}else{
					$postId = 'page_id=493';
				}
			?>
				 <?php $the_query = new WP_Query( $postId ); ?>
					<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
						<?php the_title( '<h2 class="titulo-negrito">', '</h2>' ); ?>
						<?php the_content(); ?>
					<?php endwhile;?>
			</div>
		</div>
	</div>
	<div id="cont_tudo_comecou" class="row">
		<div class="col-12 animated fadeInUp">
			<div class="container alinhamento"> <p style="width: 100%;">
			<?php
				$lang = pll_current_language('slug');
				if($lang == 'pt'){
					$postId = 'page_id=28';
				}else{
					$postId = 'page_id=495';
				}
			?>	
			<?php $the_query = new WP_Query( $postId ); ?>
				<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
					<?php the_content(); ?>
				<?php endwhile;?>
			</p></div>
		</div>
	</div>
</div>
<!-- Galeria e noticias  -->
<div id="galeria_noticia" class="container">
	<div class="row">
		<div id="galeria" class="col-lg-6 col-md-12  col-sm-12 animated fadeInUp">
			<?php
				if ( is_active_sidebar( 'gallery-home' ) ) {
			?>
					<div class="widget-column footer-widget-1">
						<?php dynamic_sidebar( 'gallery-home' ); ?>
					</div>
			<?php } ?>
				
		<!--h2 class="fonte-titulos mt-5"><a name="video">Vídeo</a></h2>
		<p>Confira o vídeo sobre a situação em que o brasileiro convivel</p>
		<div class="embed-responsive embed-responsive-16by9">
	 <iframe class="embed-responsive-item" width="60%" height="auto" src="https://www.youtube.com/embed/wv7-kg4jXto?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe-->
		</div>
		
		<div id="noticias"  class="col-lg-6 col-md-12 col-sm-12 animated fadeInUp">
			<?php
				$lang = pll_current_language('slug');
				if($lang == 'pt'){
					$postId = 'page_id=470';
				}else{
					$postId = 'page_id=506';
				}
			?>	
			
			<?php $the_query = new WP_Query( $postId ); ?>
			<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
				<?php the_title( '<h2 class="fonte-titulos"><a name="video">', '</a></h2>' ); ?>
			<?php the_content(); ?>
				<?php endwhile;?>
		<div class="embed-responsive embed-responsive-16by9">
	 <iframe class="embed-responsive-item" width="60%" height="auto" src="https://www.youtube.com/embed/wv7-kg4jXto?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>	
		</div>
			<!--h2 class="fonte-titulos">NA MÍDIA</h2>
			<p>Leia e assista máterias falando mais sobre Edgard Raoul.</p>
		<!?php $query = new WP_Query( array( 'cat' => 6 ) ); ?-->
		<!--?php while ($query  -> have_posts()) : $query  -> the_post();  ?-->
<!--article class="news"> <!?php the_post_thumbnail('thumbnail', array('class' => 'img_news')); ?-->
		<!--div class="txt">
		<p class="mt-4"><!?php the_content(); ?></p>
		</div-->  
		 <!--a href="<!?php the_permalink(); ?>" class="readmore">Ler Matéria</a> </article-->
		<!--?php endwhile;?-->
	</div>
</div>
		</div>
<!-- Schedule e pagamentos  -->
<div id="schedule_pay" class="container-fluid">
	<div class="container">
		<div class="row">
			<div id="palestra" class="col-lg-6 col-md-12 col-sm-12">
				<?php
				if ( is_active_sidebar( 'palestra' ) ) { ?>
						<div class="widget-column footer-widget-1">
								<?php dynamic_sidebar( 'palestra' ); ?>
						</div>
				<?php } ?>
			</div>
			<div id="pay" class="col-lg-6 col-md-12 col-sm-12">
				<?php
				$lang = pll_current_language('slug');
				if($lang == 'pt'){
					$postId = 'page_id=465';
				}else{
					$postId = 'page_id=500';
				}
			?>	
				 <?php $the_query = new WP_Query( $postId ); ?>
					<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
							<?php the_title( '<h2 class="titulo-negrito text-white" ><a name="ajude">', '</a></h2>' ); ?>
							<?php the_content(); ?>
					<?php endwhile;?>

		<div class="container">
		<form>
		<?php
				$lang = pll_current_language('slug');
				if($lang == 'pt'){
					echo do_shortcode('[contact-form-7 id="49" title="Doação"]');
				}else{
					echo do_shortcode('[contact-form-7 id="560" title="Donation"]');
				}
			?>		
	
		</form>
		
	</div>
			</div> <!-- fim div -->
		</div>
	</div>
</div>

<?php get_footer(); ?>