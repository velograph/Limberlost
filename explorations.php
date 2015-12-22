<?php
/**
 * Template Name: Explorations
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Limberlost
 */

get_header(); ?>

	<div class="content-area">

		<section class="section">
			<?php

			    $args = array(
			        'post_type' => 'route',
					'posts_per_page' => 1,
			    );
			    $query = new WP_Query($args);

			    if($query->have_posts()) : ?>

			    <?php while($query->have_posts()) : ?>

			        <?php $query->the_post(); ?>

					<div class="section-portal">
						<div class="section-content">
							<h3>Featured Route:</h3>
					        <a href="<?php the_permalink(); ?>"><h2><?php the_title() ?></h2></a>
							<a href="<?php the_permalink(); ?>">See More</a>
						</div>

						<?php $mobile = wp_get_attachment_image_src(get_field('map_image'), 'portal-mobile'); ?>
						<?php $tablet = wp_get_attachment_image_src(get_field('map_image'), 'portal-tablet'); ?>
						<?php $desktop = wp_get_attachment_image_src(get_field('map_image'), 'portal-desktop'); ?>
						<?php $retina = wp_get_attachment_image_src(get_field('map_image'), 'portal-retina'); ?>

						<picture>
							<!--[if IE 9]><video style="display: none"><![endif]-->
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

					<div class="section-supporting">

						<a href="<?php the_permalink(); ?>">
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
						</a>

					</div>

			    <?php endwhile; ?>

			<?php endif; ?>
		</section>

		<section class="section">
			<?php

			    $args = array(
			        'post_type' => 'trip',
					'posts_per_page' => 3,
			    );
			    $query = new WP_Query($args);

			    if($query->have_posts()) : ?>

			    <?php while($query->have_posts()) : ?>

			        <?php $query->the_post(); ?>

					<div class="section-portal">

						<div class="section-content">
					        <h2><?php the_title() ?></h2>
							<a href="<?php the_permalink(); ?>">See More</a>
						</div>

					</div>

					<div class="section-supporting">

						<a href="<?php the_permalink(); ?>">
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
						</a>

			    <?php endwhile; ?>

			<?php endif; ?>

		</section>

		<section class="section">

			<?php
				global $post;
			    $args = array(
			        'post_type' => array('trip','route'),
					'post__not_in' => array($post->ID),
					'caller_get_posts' => 1,
					'posts_per_page' => 6,
			    );
			    $query = new WP_Query($args);

			    if($query->have_posts()) : ?>

			    <?php while($query->have_posts()) : ?>

			        <?php $query->the_post(); ?>

			        <h1><?php the_title() ?></h1>

			    <?php endwhile; ?>

			<?php endif; ?>

		</section>

	</div><!-- #primary -->

<?php get_footer(); ?>
