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
		<section class="produtos" id="bloco0">
			<?php
				$titleProduto1 =  get_post_meta( $post->ID,'title-produto1', true );
				$textProduto1 =  get_post_meta( $post->ID,'text-produto1', true );
				$titleProduto2 =  get_post_meta( $post->ID,'title-produto2', true );
				$textProduto2 =  get_post_meta( $post->ID,'text-produto2', true );
				$titleProduto3 =  get_post_meta( $post->ID,'title-produto3', true );
				$textProduto3 =  get_post_meta( $post->ID,'text-produto3', true );
				$titleProduto4 =  get_post_meta( $post->ID,'title-produto4', true );
				$textProduto4 =  get_post_meta( $post->ID,'text-produto4', true );
			?>
			<div class="container">
				<img class="titulo-sobre" src="<?php echo get_template_directory_uri(); ?>/assets/images/produtos.png"/>
				<p class="subtitulo"><?php echo get_post_meta( $post->ID,'text-produto', true );?></p>
				<article class="card">
					<a href="javascript:void(0);" class="box" onclick='openTela1()'>
						<?php 
							$galeria = get_post_meta( $post->ID,'icn-produto1', true );					
							$galeria = explode(",", $galeria);
							foreach ( $galeria as $foto ) { ?>					
								<img src="<?php echo odin_get_image_url( $foto, 120, 120, true,true);?>" alt="<?php echo get_the_title($foto); ?>">
							<?php }
						?>
						<h4><?php echo $titleProduto1?></h4>
					</a>
					<a href="javascript:void(0);" class="box" onclick='openTela2()'>
						<?php 
							$galeria = get_post_meta( $post->ID,'icn-produto2', true );					
							$galeria = explode(",", $galeria);
							foreach ( $galeria as $foto ) { ?>					
								<img src="<?php echo odin_get_image_url( $foto, 120, 120, true,true);?>" alt="<?php echo get_the_title($foto); ?>">
							<?php }
						?>
						<h4><?php echo $titleProduto2?></h4>
					</a>
					<a href="javascript:void(0);" class="box" onclick='openTela3()'>
						<?php 
							$galeria = get_post_meta( $post->ID,'icn-produto3', true );					
							$galeria = explode(",", $galeria);
							foreach ( $galeria as $foto ) { ?>					
								<img src="<?php echo odin_get_image_url( $foto, 120, 120, true,true);?>" alt="<?php echo get_the_title($foto); ?>">
							<?php }
						?>
						<h4><?php echo $titleProduto3?></h4>
					</a>
					<a href="javascript:void(0);" class="box" onclick='openTela4()'>
						<?php 
							$galeria = get_post_meta( $post->ID,'icn-produto4', true );					
							$galeria = explode(",", $galeria);
							foreach ( $galeria as $foto ) { ?>					
								<img src="<?php echo odin_get_image_url( $foto, 120, 120, true,true);?>" alt="<?php echo get_the_title($foto); ?>">
							<?php }
						?>
						<h4><?php echo $titleProduto4?></h4>
					</a>
				</article>
			</div>
		</section>
		<section class="openProdutos" id="bloco1">
			<div class="fechar-modal"><a href="javascript:void(0);" id="fechar-modal" onclick='fecharModal()'>X</a></div>
			<div class="container align">
				<div class="icones">
					<?php 
						$galeria = get_post_meta( $post->ID,'icn-produto1', true );					
						$galeria = explode(",", $galeria);
						foreach ( $galeria as $foto ) { ?>					
							<img src="<?php echo odin_get_image_url( $foto, 120, 120, true,true);?>" alt="<?php echo get_the_title($foto); ?>">
						<?php }
					?>
					<h4><?php echo $titleProduto1?></h4>
				</div>
				<div class="texto"><p><?php echo $textProduto1?></p></div>
				<div class="swiper-container swiper-produto1">
					<div class="swiper-wrapper">
						<?php 
							$galeria = get_post_meta( $post->ID,'img-produto1', true );					
							$galeria = explode(",", $galeria);
							foreach ( $galeria as $foto ) { ?>		
								<div class="swiper-slide">
									<img src="<?php echo odin_get_image_url( $foto, 600, 685, true,true);?>" alt="<?php echo get_the_title($foto); ?>">
								</div>
							<?php }
						?>		
					</div>
				</div>
			</div>
		</section>
		<section class="openProdutos" id="bloco2">
			<div class="fechar-modal"><a href="javascript:void(0);" id="fechar-modal" onclick='fecharModal()'>X</a></div>
			<div class="container align">
				<div class="icones">
					<?php 
						$galeria = get_post_meta( $post->ID,'icn-produto2', true );					
						$galeria = explode(",", $galeria);
						foreach ( $galeria as $foto ) { ?>					
							<img src="<?php echo odin_get_image_url( $foto, 120, 120, true,true);?>" alt="<?php echo get_the_title($foto); ?>">
						<?php }
					?>
					<h4><?php echo $titleProduto2?></h4>
				</div>
				<div class="texto"><p><?php echo $textProduto2?></p></div>
				<div class="swiper-container swiper-produto1">
					<div class="swiper-wrapper">
						<?php 
							$galeria = get_post_meta( $post->ID,'img-produto2', true );					
							$galeria = explode(",", $galeria);
							foreach ( $galeria as $foto ) { ?>		
								<div class="swiper-slide">
									<img src="<?php echo odin_get_image_url( $foto, 600, 685, true,true);?>" alt="<?php echo get_the_title($foto); ?>">
								</div>
							<?php }
						?>		
					</div>
				</div>
			</div>
		</section>
		<section class="openProdutos" id="bloco3">
			<div class="fechar-modal"><a href="javascript:void(0);" id="fechar-modal" onclick='fecharModal()'>X</a></div>
			<div class="container align">
				<div class="icones">
					<?php 
						$galeria = get_post_meta( $post->ID,'icn-produto3', true );					
						$galeria = explode(",", $galeria);
						foreach ( $galeria as $foto ) { ?>					
							<img src="<?php echo odin_get_image_url( $foto, 120, 120, true,true);?>" alt="<?php echo get_the_title($foto); ?>">
						<?php }
					?>
					<h4><?php echo $titleProduto3?></h4>
				</div>
				<div class="texto"><p><?php echo $textProduto3?></p></div>
				<div class="swiper-container swiper-produto1">
					<div class="swiper-wrapper">
						<?php 
							$galeria = get_post_meta( $post->ID,'img-produto3', true );					
							$galeria = explode(",", $galeria);
							foreach ( $galeria as $foto ) { ?>		
								<div class="swiper-slide">
									<img src="<?php echo odin_get_image_url( $foto, 600, 685, true,true);?>" alt="<?php echo get_the_title($foto); ?>">
								</div>
							<?php }
						?>		
					</div>
				</div>
			</div>
		</section>
		<section class="openProdutos" id="bloco4">
			<div class="fechar-modal"><a href="javascript:void(0);" id="fechar-modal" onclick='fecharModal()'>X</a></div>
			<div class="container align">
				<div class="icones">
					<?php 
						$galeria = get_post_meta( $post->ID,'icn-produto4', true );					
						$galeria = explode(",", $galeria);
						foreach ( $galeria as $foto ) { ?>					
							<img src="<?php echo odin_get_image_url( $foto, 120, 120, true,true);?>" alt="<?php echo get_the_title($foto); ?>">
						<?php }
					?>
					<h4><?php echo $titleProduto4?></h4>
				</div>
				<div class="texto"><p><?php echo $textProduto4?></p></div>
				<div class="swiper-container swiper-produto1">
					<div class="swiper-wrapper">
						<?php 
							$galeria = get_post_meta( $post->ID,'img-produto4', true );					
							$galeria = explode(",", $galeria);
							foreach ( $galeria as $foto ) { ?>		
								<div class="swiper-slide">
									<img src="<?php echo odin_get_image_url( $foto, 600, 685, true,true);?>" alt="<?php echo get_the_title($foto); ?>">
								</div>
							<?php }
						?>		
					</div>
				</div>
			</div>
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
		<section class="frota">
			<div class="swiper-container swiper-frota">
				<div class="swiper-wrapper">
					<?php 
						$galeria = get_post_meta( $post->ID,'imagens-frota', true );					
						$galeria = explode(",", $galeria);
						foreach ( $galeria as $foto ) { ?>		
							<div class="swiper-slide">
								<img src="<?php echo odin_get_image_url( $foto, 1060, 600, true,true);?>" alt="<?php echo get_the_title($foto); ?>">
							</div>
						<?php }
					?>		
				</div>
				<div class="navigation">
					<div class="swiper-button-prev swiper-button-white"></div>
					<div class="swiper-button-next swiper-button-white"></div>	
				</div>
			</div>
			<article class="descritivo">
				<img class="titulo-sobre" src="<?php echo get_template_directory_uri(); ?>/assets/images/frota-title.png"/>
				<p><?php echo get_post_meta( $post->ID,'texto-frota', true );?></p>
			</article>
		</section>
		<section class="clientes">
			<div class="container">
				<img class="titulo-sobre" src="<?php echo get_template_directory_uri(); ?>/assets/images/clientes.png"/>
				<div class="swiper-container clientes-destaque">
                    <div class="swiper-wrapper">
                        <?php 
                            $args = array('post_type' => 'clientes','posts_per_page' => -1);
                            $var = new WP_Query($args);
                            if($var->have_posts()):
                                while($var->have_posts()):
                                    $var->the_post();?>                                   
                                        <div class="swiper-slide">
                                            <div class="box">
                                                <?php echo odin_thumbnail(200, 100, get_the_title(), false, false);?>
                                            </div>
                                        </div>
                                    <?php
                                endwhile;
                            endif;
                        wp_reset_postdata(); ?>
                    </div> 
                </div>
			</div>
		</section>
		<section class="contato">
			<article class="foto">
				<?php 
					$galeria = get_post_meta( $post->ID,'img-cnt', true );					
					$galeria = explode(",", $galeria);
					foreach ( $galeria as $foto ) { ?>		
						<img src="<?php echo odin_get_image_url( $foto, 650, 540, true,true);?>" alt="<?php echo get_the_title($foto); ?>">
					<?php }
				?>	
			</article>
			<article class="descritivo">
				<img class="titulo-sobre" src="<?php echo get_template_directory_uri(); ?>/assets/images/contato-title.png"/>
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
										$email =  get_post_meta( $post->ID,'email1', true );
										$logradouro =  get_post_meta( $post->ID,'logradouro', true );
										$endereco =  get_post_meta( $post->ID,'endereco', true );
										$numero =  get_post_meta( $post->ID,'numero', true );
										$cidade =  get_post_meta( $post->ID,'cidade', true );
										$estado =  get_post_meta( $post->ID,'estado', true );
										$cep =  get_post_meta( $post->ID,'cep', true );
									?>
									<div class="telefones">
										<a class="telefone1 align" href="tel:<?php echo $telefone1 ?>" alt="tel: <?php echo $telefone1 ?>" title="tel: <?php echo $telefone1 ?>" target="_blank">    
											<?php echo $telefone1 ?>
										</a>
																					
										<a class="telefone2 align" href="tel:<?php echo $telefone2 ?>" alt="tel: <?php echo $telefone2 ?>" title="tel: <?php echo $telefone2 ?>" target="_blank">    
											<?php echo $telefone2 ?>
										</a>
										<a class="telefone3 align" href="tel:<?php echo $telefone3 ?>" alt="tel: <?php echo $telefone3 ?>" title="tel: <?php echo $telefone3 ?>" target="_blank">    
											<?php echo $telefone1 ?>
										</a>
									</div>
									<a class="loc" href="https://goo.gl/maps/sEy7D7sWYBPUeCo66" target="_blank">
										<?php echo $logradouro ?> <?php echo $endereco ?>, n° <?php echo $numero ?>, <br> <?php echo $cidade ?>/<?php echo $estado ?> - CEP: <?php echo $cep ?>                       
                                	</a> 
									<a class="email" href="mailto:<?php echo $email ?>" target="_blank">
										<?php echo $email ?>
									</a>
								<?php
							endwhile;
						endif;
					wp_reset_postdata(); 
				?>				
			</article>
			<article class="mapa">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.979166232152!2d-46.32336698503549!3d-22.840260285045694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ceadc561123131%3A0x49dcedb84f4340fb!2sCardoso%20Materiais%20para%20Constru%C3%A7%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1664892376157!5m2!1spt-BR!2sbr" width="600" height="522" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</article>
		</section>
	</main>
<?php
get_footer();