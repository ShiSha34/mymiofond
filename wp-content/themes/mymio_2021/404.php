<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mymio_2021
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="error-404 not-found">
			<div class="maxwidth-theme">
                <div class="items row">
                    <span>404</span>
                    <span>Кажется,такой страницы не существует</span>
                    <span>Вернуться на <a href="<?php echo get_home_url(); ?>">Главную ></a></span>
                 </div>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
