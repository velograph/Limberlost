<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Limberlost
 */

get_header(); ?>

	<div class="content-area exploration offset-alternating">

		<section class="section">
			<div class="section-lead-in">
				<div class="section-icon">
					<svg viewBox="0 0 1000 1000">
						<g>
							<path d="M663.5,263.5c-3.3-5.9-12.9-4.7-15.9-2.2c-9.8,8-22.5,9.8-32.1,16.4c-19.6,13.5-42,22.2-60.9,36.6
								c-2.8,2.1-6.7,3.4-10.9,2.8c-13-1.8-24.2,8.2-24.5,21.1c-0.3,14.3,9.6,25.4,11.9,38.9c1.5,8.6,7.3,17.1,0.3,25.8
								c-5.7,7-11.7,13.8-16.3,21.7c-1.7,2.9-4.7,5.2-8.4,3.1c-9.2-5.2-19.1-3.5-29.6-3.8c-6.8,1-14.4-0.4-22.2,1.1
								c-22.8,4.6-37.2,19.1-48.8,38c-15.5,25.3-21.5,51.3-4.7,78.1c11.2,17.8,16.8,34.4-1.5,50.9c-1,0.9-1.2,2.7-2.2,3.7
								c-11.9,12.6-15.8,30.7-29.2,42.3c-3.4,2.9-2,6.9,1.3,8c9,2.8,14.9,10.1,22.3,15c7.5,4.9,11.1,3.2,16.8-1.9c20-18,29-43.2,43-65
								c5.7-8.8,11.1-6.6,17-6.1c3.3,0.2,7,1.6,10.6,1.6c16.7-0.1,31.7-6,47.1-12.1c19.7-7.8,31.5-20.6,38.9-40
								c12.2-32,8.8-60.8-14.3-86.7c-2.3-2.6-4.2-4.3-1.5-8.3c9.7-14.2,18.9-28.9,28.4-43.2c7-10.5,14.6-20.7,21.7-31.2
								c13.9-20.6,26.5-42.2,43.5-60.7c7.3-7.9,13.2-17.2,19.5-26C666.7,275.6,666.4,268.5,663.5,263.5z M528.3,551.1
								c-9.7,10.6-37.3,20.2-50.7,16.2c-5.3-1.6-5.4-5.5-4.2-9.6c2.4-8.4-1.9-9.6-8.9-9.4c-8.9,0.2-17.8-0.1-26.7-1
								c-3.6-0.4-6.9-3.5-6.6-7.6c0.5-5.2,5.2-3.2,7.8-3c10.8,0.9,21.7,1.6,32.3,3.8c7.3,1.5,14.1-1,21.4-0.1c5.2,0.7,4.4-5.5,4.5-9.4
								c0-4.4,0.6-10.2-5.8-9.6c-8.2,0.8-17.2,0.4-24.2-1.4c-13.8-3.4-27.4-2.3-41-3.8c-3.4-0.4-4.2-3.6-4-6.8c0.2-4.2,2.9-5.8,6.5-5.9
								c8.1-0.2,16.2-0.4,24.3,0c7.6,0.3,10.7-3.8,11-10.6c0.5-8-5.5-7.1-10.6-7.2c-6.2,0-12.5,0.1-18.7-0.1c-4.2-0.1-7.4-3.1-7.4-6.5
								c0-3.5,3.3-6.7,7.4-6.5c8.4,0.5,16.8-1.6,25.1,1.2c2.4,0.8,5,0.5,7.5,0.9c7,1.2,12.1-2.9,13.8-8.3c1.9-6.3-3.1-10.4-8.8-13.1
								c-1.9-0.9-4.6,0.3-6-3.7c26.6-5.1,49.6-2,66.3,21.7c4.8,6.9,6.9,14.9,7.7,22.1C542.5,513.6,543.9,534,528.3,551.1z"/>
							<path d="M382,688.7c-8.2-1.9-13.1-8.4-19.2-13.4c-4.1-3.4-10.4-5.8-15.7-5.7c-4.5,0-3.1,7.4-5.9,10.4c-2.9,3.2-4.9,7-7.9,10.2
								c-4.6,4.9-10.2,11.2-5.9,18.9c7.8,13.8,20.9,21.1,35.4,25.8c2.3,0.8,5.1,0.5,6.3-2.7c5.1-12.8,12.9-24.5,15.4-38.3
								C384.3,691.9,385.1,689.4,382,688.7z"/>
						</g>
					</svg>
				</div>
				<div class="section-description">
					<?php the_field('section_description', 2060); ?>
				</div>
			</div>
		</section>

		<?php

		$oddpost = 'odd-row';

	    $args = array(
	        'post_type' => 'post',
			'posts_per_page' => 5,
	    );
	    $query = new WP_Query($args);

	    if($query->have_posts()) : ?>

		    <?php while($query->have_posts()) : ?>

		        <?php $query->the_post(); ?>

				<?php if ($query->current_post % 2 == 0): ?>

					<section class="<?php echo $oddpost; ?>">

						<?php if( has_term('routes','category') ) : ?>
							<div class="section-portal route-map" style="background-image: url('<?php the_field('map_image'); ?>');">
						<?php else: ?>
							<div class="section-portal">
						<?php endif; ?>

							<div class="section-content">

								<?php if( has_term('routes','category') ) : ?>
									<span class="featured-route-title">Featured Route:</span>
								<?php endif; ?>
								<h1><?php the_title() ?></h1>
								<a href="<?php the_permalink(); ?>">See More&nbsp;&gt;</a>

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

				<?php else: ?>

					<section class="<?php echo $oddpost; ?>">

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

						<?php if( has_term('routes','category') ) : ?>
							<div class="section-portal route-map" style="background-image: url('<?php the_field('map_image'); ?>');">
						<?php else: ?>
							<div class="section-portal">
						<?php endif; ?>

							<div class="section-content">

								<?php if( has_term('routes','category') ) : ?>
									<span class="featured-route-title">Featured Route:</span>
								<?php endif; ?>
								<h1><?php the_title() ?></h1>
								<a href="<?php the_permalink(); ?>">See More&nbsp;&gt;</a>

							</div>

						</div>

					</section>

				<?php endif ?>

				<?php /* Changes every other post to a different class */
					if ('odd-row' == $oddpost) $oddpost = 'even-row';
					else $oddpost = 'odd-row';
				?>

			<?php endwhile; ?>

		<?php endif; ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
