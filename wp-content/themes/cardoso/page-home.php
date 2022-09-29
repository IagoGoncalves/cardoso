<?php
/**
 * Template Name: Home
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>
	<main id="home" class="home" tabindex="-1" role="main">
		<section class="banner">
			<div class="swiper-container banner-home">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="banner1 padrao-banner">
							<div class="foto-banner" data-swiper-parallax="0">
								<div class="foto">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpg"/>
								</div>
							</div>
							<div class="descricoes">
								<h2 data-swiper-parallax="2300">Material para construção do piso ao telhado</h2>
							</div>		
						</div>	
					</div>	
					<div class="swiper-slide">
						<div class="banner2 padrao-banner">
							<div class="foto-banner" data-swiper-parallax="0">
								<div class="foto">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner2.jpg"/>
								</div>
							</div>
							<div class="descricoes">
								<h2 data-swiper-parallax="2300">Produzimos e transportamos <br><b>areia de qualidade</b><br> para sua obra!</h2>
							</div>		
						</div>	
					</div>	
					<div class="swiper-slide">
						<div class="banner3 padrao-banner">
							<div class="foto-banner" data-swiper-parallax="0">
								<div class="foto">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner3.jpg"/>
								</div>
							</div>
							<div class="descricoes">
								<h2 data-swiper-parallax="2300">Blocos e artefatos de cimento</h2>
							</div>		
						</div>	
					</div>	
				</div>
				<div class="navegation align">
					<div class="swiper-button-prev swiper-button-white"></div>
					<div class="swiper-pagination swiper-pagination-white"></div>
					<div class="swiper-button-next swiper-button-white"></div>	
				</div>
			</div>			
		</section>
		<section class="flag">
			<div class="container align">
				<?php
					$textIcn1 =  get_post_meta( $post->ID,'text-icn-1', true );
					$textIcn2 =  get_post_meta( $post->ID,'text-icn-2', true );
				?>
				<div class="box1">
					<div class="card align">
						<?php 
							$galeria = get_post_meta( $post->ID,'icone1', true );					
							$galeria = explode(",", $galeria);
							foreach ( $galeria as $foto ) { ?>					
								<img src="<?php echo odin_get_image_url( $foto, 62, 60, true,true);?>" alt="<?php echo get_the_title($foto); ?>">
							<?php }
						?>
						<h2><?php echo $textIcn1?></h2>
					</div>
				</div>
				<div class="box2">
					<div class="card align">
						<?php 
							$galeria = get_post_meta( $post->ID,'icone2', true );					
							$galeria = explode(",", $galeria);
							foreach ( $galeria as $foto ) { ?>					
								<img src="<?php echo odin_get_image_url( $foto, 62, 60, true,true);?>" alt="<?php echo get_the_title($foto); ?>">
							<?php }
						?>
						<h2><?php echo $textIcn2?></h2>
					</div>
				</div>
			</div>
		</section>
	</main><!-- #main -->
<?php
get_footer();
