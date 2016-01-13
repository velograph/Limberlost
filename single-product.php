<?php
/**
 * The template for displaying all single posts.
 *
 * @package Limberlost
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php if( has_term('guided-expedition', 'product_cat') ) : ?>

			<?php get_template_part( 'content', 'single-expedition' ); ?>

		<?php else: ?>

			Title:<?php the_title(); ?>
			<?php the_content(); ?>

		<?php endif; ?>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
