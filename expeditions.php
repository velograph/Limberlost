<?php
/**
 * Template Name: Expeditions
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Limberlost
 */

get_header(); ?>

	<div class="content-area alternating">

		<section>

			icon

			<?php the_field('section_description', 2102); ?>

		</section>

		<?php

		$oddpost = 'alternated';

	    $args = array(
	        'post_type' => 'product',
			'posts_per_page' => 2,
			'tax_query' => array(
				array(
					'taxonomy' => 'product_cat',
					'field' => 'slug',
					'terms' => 'guided-expedition',
				),
			),
	    );
	    $query = new WP_Query($args);

	    if($query->have_posts()) : ?>

	    <?php while($query->have_posts()) : ?>

	        <?php $query->the_post(); ?>

			<section class="<?php echo $oddpost; ?>">
				<div class="section-portal">

					<div class="section-content">

						<h1><?php the_title() ?></h1>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>">Learn More</a>

					</div>

				</div>

				<div class="section-supporting">

					<?php $mobile = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-mobile' ); ?>
					<?php $tablet = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-tablet' ); ?>
					<?php $desktop = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-desktop' ); ?>
					<?php $retina = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-retina' ); ?>

					<picture>
						<!--[if IE 9]><video style="display: none;"><![endif]-->
						<source
							srcset="<?php echo $mobile[0]; ?>"
							media="(max-width: 500px)" />
						<source
							srcset="<?php echo $tablet[0]; ?>"
							media="(max-width: 860px)" />
						<source
							srcset="<?php echo $desktop[0]; ?>"
							media="(max-width: 1180px)" />
						<source
							srcset="<?php echo $retina[0]; ?>"
							media="(min-width: 1181px)" />
						<!--[if IE 9]></video><![endif]-->
						<img srcset="<?php echo $image[0]; ?>">
					</picture>

				</div>

			</section>

			<?php /* Changes every other post to a different class */
				if ('alternated' == $oddpost) $oddpost = 'regular';
				else $oddpost = 'alternated';
			?>

		    <?php endwhile; ?>

		<?php endif; ?>

		<section class="section related-posts">

			<?php
				global $post;
			    $args = array(
			        'post_type' => array('trip','route'),
					'posts_per_page' => 6,
			    );
			    $query = new WP_Query($args);

			    if($query->have_posts()) : ?>

			    <?php while($query->have_posts()) : ?>

			        <?php $query->the_post(); ?>

					<div class="section-portal">
						<?php the_post_thumbnail('full'); ?>
				        <p><?php the_title() ?></p>
					</div>

			    <?php endwhile; ?>

			<?php endif; ?>

		</section>

	</div><!-- #primary -->

<?php get_footer(); ?>
