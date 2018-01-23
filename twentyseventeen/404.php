<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<section class="container-fluid pagina-nao-encontrada">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6"></div>
		<div class="col-lg-6 col-md-6 col-sm-6 fundo-mobile">
			<h2 class="titulo-negrito text-white  texto-nao-encontrado">Página não encontrada</h2>
			<p class="fonte-texto text-white sub-nao-encontrado">Por favor volte para <br> página inicial</p>
			<button class="btn btn-enviar text-white btn-voltar btn-nao-encontrado"><a href="edgardraoulvoice.com.br" alt="voltar para o início" class="btn-nao-encontrado m-0">Voltar para o início</a></button>
			<a href="edgardraoulvoice.com.br" alt="logo Edgard Raoul volte para home"><img src="<?php echo get_template_directory_uri()?>/assets/img/edgard-raoul.jpg" alt="logo Edgard Raoul" class="img-fluid logo-edgard"></a>
		</div>

	</div>
</section>

<?php get_footer();
