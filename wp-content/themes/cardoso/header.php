<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a id="skippy" class="sr-only sr-only-focusable" href="#content">
		<div class="container">
			<span class="skiplink-text"><?php _e( 'Skip to content', 'odin' ); ?></span>
		</div>
	</a>

	<header id="header" role="banner">
		<?php
			$args = array('post_type' => 'dados','posts_per_page' => 1);
				$var = new WP_Query($args);
				if($var->have_posts()):
					while($var->have_posts()):
						$var->the_post(); ?>
							<?php 
								$telefone1 =  get_post_meta( $post->ID,'telefone1', true );
								$telefone2 =  get_post_meta( $post->ID,'telefone2', true );
								$telefone3 =  get_post_meta( $post->ID,'telefone3', true );
								$whatsapp =  get_post_meta( $post->ID,'whatsapp', true );
								$logradouro =  get_post_meta( $post->ID,'logradouro', true );
								$endereco =  get_post_meta( $post->ID,'endereco', true );
								$numero =  get_post_meta( $post->ID,'numero', true );
								$cidade =  get_post_meta( $post->ID,'cidade', true );
								$estado =  get_post_meta( $post->ID,'estado', true );
								$cep =  get_post_meta( $post->ID,'cep', true );
								$facebook =  get_post_meta( $post->ID,'facebook', true );
								$instagram =  get_post_meta( $post->ID,'instagram', true );
							?>
						<?php
					endwhile;
				endif;
			wp_reset_postdata(); 
		?>  
		<div id="menu-desktop" class="menu-desktop"> <!-- Menu Principal--> 
			<div class="container align">
				<div class="logo">
					<a href="<?php echo esc_url( home_url( 'home' ) ); ?>" alt="Cardoso - Materiais para construção" title="Cardoso - Materiais para construção"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Cardoso - Materiais para construção"/></a>
				</div>
				<nav id="menu" class="align">	
					<ul class="lista-menu">			
						<li><a href="#home" class="scroll" title="Inicio">Início</a></li>
						<li><a href="#sobre" class="scroll" title="Sobre a empresa">Sobre a empresa</a></li>
						<li><a href="#produtos" class="scroll" title="Segmentos">Segmentos</a></li>					
						<li><a href="#frota" class="scroll" title="Frotas">Frotas</a></li>
						<li><a href="#contato" class="scroll" title="Contato">Contato</a></li>
					</ul>
					<a class="botao-whats align" href="https://api.whatsapp.com/send?phone=55<?php echo $whatsapp ?>&text=Olá, vim pelo site." alt="<?php echo $whatsapp ?>" title="<?php echo $whatsapp ?>1" target="_blank">
						<div class="align"><span class="sunset-icon sunset-loading botao-carregar">Whatsapp</span></div>
					</a>
				</nav>
			</div>
		</div>
		<div id="menu-desktop2" class="menu-desktop2"> <!-- Menu Fixo--> 
			<div class="container align">
				<div class="logo">
					<a href="<?php echo esc_url( home_url( 'home' ) ); ?>" alt="Cardoso - Materiais para construção" title="Cardoso - Materiais para construção"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Cardoso - Materiais para construção"/></a>
				</div>
				<nav id="menu" class="align">	
					<ul class="lista-menu">			
						<li><a href="#home" class="scroll" title="Inicio">Início</a></li>
						<li><a href="#sobre" class="scroll" title="Sobre a empresa">Sobre a empresa</a></li>
						<li><a href="#produtos" class="scroll" title="Segmentos">Segmentos</a></li>					
						<li><a href="#frota" class="scroll" title="Frotas">Frotas</a></li>
						<li><a href="#contato" class="scroll" title="Contato">Contato</a></li>
					</ul>
					<a class="botao-whats align" href="https://api.whatsapp.com/send?phone=55<?php echo $whatsapp ?>&text=Olá, vim pelo site." alt="<?php echo $whatsapp ?>" title="<?php echo $whatsapp ?>1" target="_blank">
						<div class="align"><span class="sunset-icon sunset-loading botao-carregar">Whatsapp</span></div>
					</a>
				</nav>
			</div>
		</div>
		<div id="menu-tablet" class="menu-tablet">
			<div class="barra">
				<a class="logo" href="<?php echo esc_url( home_url( 'home' ) ); ?>" alt="Feira de Extrema" title="Feira de Extrema"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Feira de Extrema"/></a>
			
				<div class="menu-trigger1" id="menu-trigger1">
					<input type="checkbox" id="check">
					<label id="icone" class="icone" for="check"></label>
					<span></span>
				</div>
				
				<div class="conteudo" id="menu-hidde1">
					<div class="box-menu Explorar">						
						<div id="main-navigation2" class="navbar navbar-default main-navigation2">
							<nav id="menu">	
								<ul>			
									<li><a href="#home" class="scroll" title="Início">Início</a></li>
									<li><a href="#sobre" class="scroll" title="Sobre a empresa">Sobre a empresa</a></li>
									<li><a href="#produtos" class="scroll" title="Segmentos">Segmentos</a></li>					
									<li><a href="#frota" class="scroll" title="Frotas">Frotas</a></li>
									<li><a href="#contato" class="scroll" title="Contato">Contato</a></li>
								</ul>
							</nav>
						</div>							
					</div>
				</div>
			</div>
		</div>
		<div id="menu-mobile" class="menu-mobile">
			<div class="barra">
				<div class="menu-trigger2" id="menu-trigger2">
					<input type="checkbox" id="check2">
					<label id="icone2" class="icone2" for="check2"></label>
					<span></span>
				</div>
				<div class="logo">
					<a class="logo" href="<?php echo esc_url( home_url( 'home' ) ); ?>" alt="Cardoso - Materiais para construção" title="Cardoso - Materiais para construção"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Cardoso - Materiais para construção"/></a>
				</div>
				
				<div class="conteudo" id="menu-hidde2">
					<div class="box-menu Explorar">						
						<div id="main-navigation2" class="navbar navbar-default main-navigation2">
							<nav id="menu">	
								<ul>			
									<li><a href="#home" class="scroll" title="Início">Início</a></li>
									<li><a href="#sobre" class="scroll" title="Sobre a empresa">Sobre a empresa</a></li>
									<li><a href="#produtos" class="scroll" title="Segmentos">Segmentos</a></li>					
									<li><a href="#frota" class="scroll" title="Frotas">Frotas</a></li>
									<li><a href="#contato" class="scroll" title="Contato">Contato</a></li>
								</ul>
							</nav>
						</div>							
					</div>
				</div>
			</div>
		</div>
	</header>