<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package portfolio
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found">

		<div class="page-content">
			<div class="wrap">
			<div class="img-404">
				<img src="<?php echo asset("img/404.svg"); ?> " alt="404-svg">
			</div>
			</div>
		</div><!-- .page-content -->
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
