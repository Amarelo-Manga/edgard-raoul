<!DOCTYPE html>
<html lang="pt-br">
<head>
	   <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111244762-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-111244762-1');
	</script>

    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="description" content="Advogado especializado em Direitos Humanos, Edgard Raoul, de 30 anos, resolveu deixar o trabalho e a vida confortável em São Paulo para passar 26 dias vivendo como refugiado de guerra na Europa.">
    <meta name="Keywords" content="Edgard Rauol, Refugiados, brasileiro ajuda refugiado">
    <meta name="robots" content="index, follow">
	<meta name="google-site-verification" content="RUjNgIf6mtIAocdnEClk1EUg_XwhVyqBFqVwNSmbkZw"/>
    <title> <?php wp_title(''); echo ' | ';  bloginfo( 'name' ); ?> </title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="<?php echo get_template_directory_uri()?>/assets/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/fonts/JosefinSlab/stylesheet.css">	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/fonts/ProximaNova/stylesheet.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/animate.css">
</head>

<body>
    <!--Menu e slideshow-->
    <header	id="top" class="container-fluid bg-roxo"> 
        <!--menu-->
        <!-- <div id="main_menu">-->
        <div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-roxo">
                 <a class="navbar-brand" style="z-index: 100;" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri()?>/assets/img/logo_edgard_raoul.png" alt="logo Edgard Raoul" class="logo-mobile" /></a>
                <button class="navbar-toggler bg-roxo" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-white"></span>
                </button>
                <?php 
                    $args = array( 
                        'theme_location' => 'top', 
                        'container_id'   => 'navbarNav',
                        'container_class' => 'collapse navbar-collapse',
                        'menu_class'  => 'navbar-nav '
                    );
                    wp_nav_menu( $args );
                ?>
            </nav>
		
		</div>
        <!--Slideshow-->
        <div class="container-fluid" id="slideshow">
            <?php 
                if(is_home()){
    				 get_template_part('template-parts/header/page', 'banner'); 
                }//end if is home
            ?>
        </div>
    </header>
