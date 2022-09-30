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
		<section class="sobre">
			<div class="container">
				<article class="descritivo">
					<img class="titulo-sobre" src="<?php echo get_template_directory_uri(); ?>/assets/images/sobre-a-empresa.png"/>
					<div class="section">
						<div class="partial support">
							<?php the_content()?>
						</div>
						<a class="txt-more" href="javascript:void(0);"></a>
					</div>
				</article>
				<article class="foto">
					<?php echo odin_thumbnail(646, 488, true, true);?>
				</article>
			</div>
		</section>
		<section class="linha-tempo">
			<div class="container">
				<div id="timeline">
					<article>
						<div class="inner">
							<span class="date">1974</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis rutrum nunc, eget dictum massa. Nam faucibus felis nec augue adipiscing, eget commodo libero mattis.</p>
						</div>
					</article>
					<article>
						<div class="inner">
						<span class="date">1974</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis rutrum nunc, eget dictum massa. Nam faucibus felis nec augue adipiscing, eget commodo libero mattis.</p>
						</div>
					</article>
					<article>
						<div class="inner">
						<span class="date">1974</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis rutrum nunc, eget dictum massa. Nam faucibus felis nec augue adipiscing, eget commodo libero mattis.</p>
						</div>
					</article>
					<article>
						<div class="inner">
						<span class="date">1974</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis rutrum nunc, eget dictum massa. Nam faucibus felis nec augue adipiscing, eget commodo libero mattis.</p>
						</div>
					</article>
					<article>
						<div class="inner">
						<span class="date">1974</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis rutrum nunc, eget dictum massa. Nam faucibus felis nec augue adipiscing, eget commodo libero mattis.</p>
						</div>
					</article>
				</div>
			</div>
		</section>
		
				<!-- <section class="timeline">
			
			<?php
				$ano1 =  get_post_meta( $post->ID,'ano1', true );
				$textoAno1 =  get_post_meta( $post->ID,'texto-ano1', true );
				$ano2 =  get_post_meta( $post->ID,'ano2', true );
				$textoAno2 =  get_post_meta( $post->ID,'texto-ano2', true );
				$ano3 =  get_post_meta( $post->ID,'ano3', true );
				$textoAno3 =  get_post_meta( $post->ID,'texto-ano3', true );
				$ano4 =  get_post_meta( $post->ID,'ano4', true );
				$textoAno4 =  get_post_meta( $post->ID,'texto-ano4', true );
				$ano5 =  get_post_meta( $post->ID,'ano5', true );
				$textoAno5 =  get_post_meta( $post->ID,'texto-ano5', true );
				$ano6 =  get_post_meta( $post->ID,'ano6', true );
				$textoAno6 =  get_post_meta( $post->ID,'texto-ano6', true );
				$ano7 =  get_post_meta( $post->ID,'ano7', true );
				$textoAno7 =  get_post_meta( $post->ID,'texto-ano7', true );
			
			?>
			<div class="container">
				<article class="card card1 cleft">
					<div class="box left">
						<p><?php echo $textoAno1?></p>
					</div>
					<h2><?php echo $ano1?></h2>

				</article>
				<article class="card card2 cright">
				<h2><?php echo $ano2?></h2>

					<div class="box right">
						<p><?php echo $textoAno2?></p>
					</div>
				</article>
				<article class="card card3 cleft">
					<div class="box left">
						<p><?php echo $textoAno3?></p>
					</div>
				<h2><?php echo $ano3?></h2>

				</article>
				<article class="card card4 cright">
				<h2><?php echo $ano4?></h2>

					<div class="box right">
						<p><?php echo $textoAno4?></p>
					</div>
				</article>
				<article class="card card cleft5">
					<div class="box left">
						<p><?php echo $textoAno5?></p>
					</div>
					<h2><?php echo $ano5?></h2>

				</article>
				<article class="card card6 cright">
				<h2><?php echo $ano6?></h2>

					<div class="box right">
						<p><?php echo $textoAno6?></p>
					</div>
				</article>
				<article class="card card7 cleft">
					<div class="box left">
						<p><?php echo $textoAno7?></p>
					</div>
					<h2><?php echo $ano7?></h2>

				</article>
			</div>
		</section> -->
	</main><!-- #main -->
<?php
get_footer();
