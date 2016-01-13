<?php
/**
 * Template Name: Outfitting
 *
 * @package Limberlost
 */

get_header(); ?>

	<div class="outfitting-temp">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="placeholder-content">

				<h1><?php the_title(); ?></h1>

				<?php the_content(); ?>

			</div>

		<?php endwhile; // end of the loop. ?>

	</div>

<?php get_footer(); ?>
