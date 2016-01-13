<?php
/**
 * Template Name: Partnerships
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Limberlost
 */

get_header(); ?>

	<div class="content-area partnerships offset-alternating">

		<section class="section">

			<div class="section-lead-in">

				<div class="section-title">
					<h1>Partnerships</h1>
				</div>

				<div class="section-lead-in-description">
					<?php the_field('section_description', 2104); ?>
				</div>

			</div>

		</section>

		<?php

		$oddpost = 'odd-row';

	    $args = array(
	        'post_type' => 'partnership',
			'posts_per_page' => 4,
	    );
	    $query = new WP_Query($args);

	    if($query->have_posts()) : ?>

		    <?php while($query->have_posts()) : ?>

		        <?php $query->the_post(); ?>

				<?php if ($query->current_post % 2 == 0): ?>

					<section class="<?php echo $oddpost; ?>">

						<div class="section-supporting">

							<?php $mobile = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-mobile' ); ?>
							<?php $tablet = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-tablet' ); ?>
							<?php $desktop = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-desktop' ); ?>
							<?php $retina = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-retina' ); ?>

							<a href="<?php the_permalink(); ?>">
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

						<div class="section-portal">

							<div class="section-content">

								<div class="company-logo">
									<a href="<?php the_permalink(); ?>">
										<?php
											$image = get_field('company_logo');
											$size = 'thumb';
											echo wp_get_attachment_image( $image, $size );
										?>
									</a>
								</div>
								<div class="company-name">
									<h1>
										<a href="<?php the_permalink(); ?>">
											<?php the_title() ?>
										</a>
									</h1>
									<div class="excerpt">
										<?php echo substr(get_the_excerpt(), 0,220); ?>
									</div>
									<a class="read-more" href="<?php the_permalink(); ?>">View Case Study ></a>
								</div>

							</div>

						</div>

					</section>

				<?php else: ?>

					<section class="<?php echo $oddpost; ?>">

						<div class="section-portal">

							<div class="section-content">

								<div class="company-logo">
									<a href="<?php the_permalink(); ?>">
										<?php
											$image = get_field('company_logo');
											$size = 'thumb';
											echo wp_get_attachment_image( $image, $size );
										?>
									</a>
								</div>
								<div class="company-name">
									<h1>
										<a href="<?php the_permalink(); ?>">
											<?php the_title() ?>
										</h1>
									<div class="excerpt">
										<?php echo substr(get_the_excerpt(), 0,220); ?>
									</div>
									<a class="read-more" href="<?php the_permalink(); ?>">View Case Study ></a>
								</div>

							</div>

						</div>

						<div class="section-supporting">

							<?php $mobile = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-mobile' ); ?>
							<?php $tablet = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-tablet' ); ?>
							<?php $desktop = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-desktop' ); ?>
							<?php $retina = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portal-retina' ); ?>

							<a href="<?php the_permalink(); ?>">
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

					</section>

				<?php endif ?>

				<?php /* Changes every other post to a different class */
					if ('odd-row' == $oddpost) $oddpost = 'even-row';
					else $oddpost = 'odd-row';
				?>

			<?php endwhile; ?>

		<?php endif; ?>

		<section class="partner-contact-form-container">

			<div class="partner-contact-form">
				<h1>Resonate with your Customers</h1>
				<?php echo do_shortcode('[gravityform id="1" title="false" description="true"]'); ?>
			</div>

		</section>

	</div>

<?php get_footer(); ?>
