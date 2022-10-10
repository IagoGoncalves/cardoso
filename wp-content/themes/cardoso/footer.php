<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

	<footer id="footer" role="contentinfo">
		<?php
			$args = array('post_type' => 'dados','posts_per_page' => 1);
				$var = new WP_Query($args);
				if($var->have_posts()):
					while($var->have_posts()):
						$var->the_post(); 
							$facebook =  get_post_meta( $post->ID,'facebook', true );
							$instagram =  get_post_meta( $post->ID,'instagram', true );
					endwhile;
				endif;
			wp_reset_postdata(); 
		?> 
        <article class="primeira-parte container align">
			<div class="logo">
                <a href="<?php echo esc_url( home_url( 'home' ) ); ?>" alt="Cardoso" title="Cardoso"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"/></a>
            </div>
			<article class="icons align">
				<a href="<?php echo $instagram ?>" alt="Instagram" title="Instagram" target="_blank">
					<svg class="insta" width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_52_228)">
							<path d="M26 4.3335C31.8868 4.3335 32.6213 4.35516 34.931 4.4635C37.2385 4.57183 38.8093 4.93366 40.1916 5.471C41.6216 6.02133 42.8263 6.76666 44.031 7.96916C45.1327 9.05227 45.9852 10.3624 46.5291 11.8085C47.0643 13.1887 47.4283 14.7617 47.5366 17.0692C47.6385 19.3788 47.6666 20.1133 47.6666 26.0002C47.6666 31.887 47.645 32.6215 47.5366 34.9312C47.4283 37.2387 47.0643 38.8095 46.5291 40.1918C45.9868 41.6387 45.1341 42.9492 44.031 44.0312C42.9476 45.1325 41.6375 45.985 40.1916 46.5293C38.8115 47.0645 37.2385 47.4285 34.931 47.5368C32.6213 47.6387 31.8868 47.6668 26 47.6668C20.1131 47.6668 19.3786 47.6452 17.069 47.5368C14.7615 47.4285 13.1906 47.0645 11.8083 46.5293C10.3617 45.9865 9.05129 45.1339 7.96898 44.0312C6.86703 42.9482 6.0145 41.638 5.47081 40.1918C4.93348 38.8117 4.57165 37.2387 4.46331 34.9312C4.36148 32.6215 4.33331 31.887 4.33331 26.0002C4.33331 20.1133 4.35498 19.3788 4.46331 17.0692C4.57165 14.7595 4.93348 13.1908 5.47081 11.8085C6.01299 10.3616 6.86572 9.05102 7.96898 7.96916C9.0516 6.86683 10.3619 6.01424 11.8083 5.471C13.1906 4.93366 14.7593 4.57183 17.069 4.4635C19.3786 4.36166 20.1131 4.3335 26 4.3335ZM26 15.1668C23.1268 15.1668 20.3713 16.3082 18.3397 18.3398C16.308 20.3715 15.1666 23.127 15.1666 26.0002C15.1666 28.8733 16.308 31.6288 18.3397 33.6605C20.3713 35.6921 23.1268 36.8335 26 36.8335C28.8732 36.8335 31.6287 35.6921 33.6603 33.6605C35.6919 31.6288 36.8333 28.8733 36.8333 26.0002C36.8333 23.127 35.6919 20.3715 33.6603 18.3398C31.6287 16.3082 28.8732 15.1668 26 15.1668ZM40.0833 14.6252C40.0833 13.9069 39.798 13.218 39.2901 12.7101C38.7822 12.2022 38.0933 11.9168 37.375 11.9168C36.6567 11.9168 35.9678 12.2022 35.4599 12.7101C34.952 13.218 34.6666 13.9069 34.6666 14.6252C34.6666 15.3435 34.952 16.0323 35.4599 16.5402C35.9678 17.0482 36.6567 17.3335 37.375 17.3335C38.0933 17.3335 38.7822 17.0482 39.2901 16.5402C39.798 16.0323 40.0833 15.3435 40.0833 14.6252ZM26 19.5002C27.7239 19.5002 29.3772 20.185 30.5962 21.404C31.8152 22.623 32.5 24.2763 32.5 26.0002C32.5 27.7241 31.8152 29.3774 30.5962 30.5964C29.3772 31.8153 27.7239 32.5002 26 32.5002C24.2761 32.5002 22.6228 31.8153 21.4038 30.5964C20.1848 29.3774 19.5 27.7241 19.5 26.0002C19.5 24.2763 20.1848 22.623 21.4038 21.404C22.6228 20.185 24.2761 19.5002 26 19.5002Z" fill="white"/>
						</g>
						<defs>
							<clipPath id="clip0_52_228">
								<rect width="52" height="52" fill="white"/>
							</clipPath>
						</defs>
					</svg>
				</a>
				<a href="<?php echo $facebook ?>" alt="Facebook" title="Facebook" target="_blank">
					<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M27.371 39.5V24.407H32.4258L33.182 18.5397H27.371V14.7957C27.371 13.097 27.8433 11.9378 30.2787 11.9378H33.3857V6.69017C31.8816 6.53058 30.3699 6.45319 28.8573 6.45833C24.3788 6.45833 21.313 9.19267 21.313 14.215V18.5397H16.2473V24.407H21.313V39.5H2.66667C2.09203 39.5 1.54093 39.2717 1.1346 38.8654C0.728273 38.4591 0.5 37.908 0.5 37.3333V2.66667C0.5 2.09203 0.728273 1.54093 1.1346 1.1346C1.54093 0.728273 2.09203 0.5 2.66667 0.5H37.3333C37.908 0.5 38.4591 0.728273 38.8654 1.1346C39.2717 1.54093 39.5 2.09203 39.5 2.66667V37.3333C39.5 37.908 39.2717 38.4591 38.8654 38.8654C38.4591 39.2717 37.908 39.5 37.3333 39.5H27.371Z" fill="white"/>
					</svg>
				</a>
			</article>
			<ul class="lista-menu">			
				<li><a href="#home" class="scroll" title="Inicio">Início</a></li>
				<li><a href="#sobre" class="scroll" title="Sobre a empresa">Sobre a empresa</a></li>
				<li><a href="#produtos" class="scroll" title="Segmentos">Segmentos</a></li>					
				<li><a href="#frota" class="scroll" title="Frotas">Frotas</a></li>
				<li><a href="#contato" class="scroll" title="Contato">Contato</a></li>
			</ul>
        </article>
        <article class="copyright">
            <div class="container">
				<p>Copyright 2022© Todos os direitos reservados.</p>
				<a href="https://ideapublicidade.com.br/" target="_black"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/idea.png"/></a>
			</div>
        </article> 
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
