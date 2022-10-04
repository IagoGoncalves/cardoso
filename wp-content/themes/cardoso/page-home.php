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
					<?php 
						$args = array('post_type' => 'timeline','posts_per_page' => -1, 'orderby' => 'title', 'order' => 'asc');
						$var = new WP_Query($args);    
						if($var->have_posts()):
							while($var->have_posts()):
								$var->the_post();?>  
									<article>
										<div class="inner">
											<span class="date"><?php the_title()?></span>
											<div class="texto"><?php the_content()?></div>
										</div>
									</article>
								<?php
							endwhile;
						endif;
					wp_reset_postdata(); ?>
				</div>
			</div>
		</section>
		<section class="produtos">
			<div class="container">
				<img class="titulo-sobre" src="<?php echo get_template_directory_uri(); ?>/assets/images/produtos.png"/>
				<p class="subtitulo"><?php echo get_post_meta( $post->ID,'text-produto', true );?></p>
				<article class="card">
					<?php
						$args = array('post_type' => 'produto','posts_per_page' => 4);
							$var = new WP_Query($args);
							if($var->have_posts()):
								while($var->have_posts()):
									$var->the_post();?>																	
										<div class="swiper-slide">
											<a href="javascript:void(0);" class="box" onclick='openTela()'>
												<?php echo odin_thumbnail(120, 120, true, true);?>
												<h4><?php the_title()?></h4>
											</a>
										</div>	
									<?php
								endwhile;
							endif;
						wp_reset_postdata(); 
					?>
				</article>
			</div>
			<article class="blocos" id="bloco1">
				<div class="fechar-modal"><a href="javascript:void(0);" id="fechar-modal" onclick='fecharModal()'>X</a></div>
				<div class="container align">
					<?php
						$args = array('post_type' => 'produto','posts_per_page' => 1);
							$var = new WP_Query($args);
							if($var->have_posts()):
								while($var->have_posts()):
									$var->the_post();?>																	
										<div class="icones">
											<?php echo odin_thumbnail(120, 120, true, true);?>
											<h4><?php the_title()?></h4>
										</div>
										<?php the_content()?>
										<div class="swiper-container swiper-produto">
											<div class="swiper-wrapper">
												<?php 
													$galeria = get_post_meta( $post->ID,'imagens-produto', true );					
													$galeria = explode(",", $galeria);
													foreach ( $galeria as $foto ) { ?>		
														<div class="swiper-slide">
															<img src="<?php echo odin_get_image_url( $foto, 600, 685, true,true);?>" alt="<?php echo get_the_title($foto); ?>">
														</div>
													<?php }
												?>		
											</div>
										</div>
									<?php
								endwhile;
							endif;
						wp_reset_postdata(); 
					?>
				</div>
			</article>
		</section>
		<section class="servico">
			<div class="container">
				<article class="card">
					<div class="box box1">
						<div class="descritivo">
							<img class="titulo-sobre" src="<?php echo get_template_directory_uri(); ?>/assets/images/extracao-title.png"/>
							<p><?php echo get_post_meta( $post->ID,'texto-servico1', true );?></p>
						</div>
						<div class="swiper-container swiper-produto">
							<div class="swiper-wrapper">
								<?php 
									$galeria = get_post_meta( $post->ID,'img-servico1', true );					
									$galeria = explode(",", $galeria);
									foreach ( $galeria as $foto ) { ?>		
										<div class="swiper-slide">
											<img src="<?php echo odin_get_image_url( $foto, 800, 540, true,true);?>" alt="<?php echo get_the_title($foto); ?>">
										</div>
									<?php }
								?>		
							</div>
						</div>
					</div>
					<div class="box box2">
						<div class="swiper-container swiper-produto">
							<div class="swiper-wrapper">
								<?php 
									$galeria = get_post_meta( $post->ID,'img-servico2', true );					
									$galeria = explode(",", $galeria);
									foreach ( $galeria as $foto ) { ?>		
										<div class="swiper-slide">
											<img src="<?php echo odin_get_image_url( $foto, 800, 540, true,true);?>" alt="<?php echo get_the_title($foto); ?>">
										</div>
									<?php }
								?>		
							</div>
						</div>
						<div class="descritivo">
							<img class="titulo-sobre" src="<?php echo get_template_directory_uri(); ?>/assets/images/blocos-title.png"/>
							<p><?php echo get_post_meta( $post->ID,'texto-servico2', true );?></p>
						</div>
					</div>
				</article>
			</div>
		</section>
	</main>
<?php
get_footer();