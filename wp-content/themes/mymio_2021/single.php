<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mymio_2021
 */

get_header();
?>

	<main id="primary" class="site-main">
        <div class="maxwidth-theme">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			

		endwhile; // End of the loop.
		?>
        </div>
	</main><!-- #main -->

<?php
get_footer();
