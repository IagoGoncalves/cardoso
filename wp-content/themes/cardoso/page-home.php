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
		<?php for ($i=0; $i < 50; $i++) { 
			echo '<h1 style="margin: 0;">Iago, o ser mais lindo!!!!</h1><br>';
		}?>
	</main><!-- #main -->
<?php
get_footer();
