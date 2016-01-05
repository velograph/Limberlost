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

	<div class="content-area single-partnership offset-alternating">

		<section class="section">

			<div class="section-lead-in">

				<div class="section-title">
					<h1><?php the_title(); ?></h1>
				</div>

				<div class="section-lead-in-description">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php the_field('testimonial'); ?>

					<?php endwhile; // end of the loop. ?>
				</div>

			</div>

		</section>

		<?php $oddpost = 'odd-row'; ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php if( have_rows('partnership_sections') ) : ?>

			    <?php while ( have_rows('partnership_sections') ) : ?>

			        <?php the_row(); ?>

			        <?php if( get_row_layout() == 'partnership_section' ) : ?>

						<section class="<?php echo $oddpost; ?>">

							<?php if( $oddpost == 'even-row') : ?>
								<div class="section-supporting">
									<?php $mobile = wp_get_attachment_image_src( get_sub_field('image'), 'portal-mobile' ); ?>
									<?php $tablet = wp_get_attachment_image_src( get_sub_field('image'), 'portal-tablet' ); ?>
									<?php $desktop = wp_get_attachment_image_src( get_sub_field('image'), 'portal-desktop' ); ?>
									<?php $retina = wp_get_attachment_image_src( get_sub_field('image'), 'portal-retina' ); ?>

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

								<div class="section-portal">

									<div class="section-content">

										<h1><?php the_sub_field('section_title'); ?></h1>
										<?php the_sub_field('section_content'); ?>

									</div>
								</div>
							<?php else: ?>

								<div class="section-portal">

									<div class="section-content">

										<h1><?php the_sub_field('section_title'); ?></h1>
										<?php the_sub_field('section_content'); ?>

									</div>
								</div>

								<div class="section-supporting">
									<?php $mobile = wp_get_attachment_image_src( get_sub_field('image'), 'portal-mobile' ); ?>
									<?php $tablet = wp_get_attachment_image_src( get_sub_field('image'), 'portal-tablet' ); ?>
									<?php $desktop = wp_get_attachment_image_src( get_sub_field('image'), 'portal-desktop' ); ?>
									<?php $retina = wp_get_attachment_image_src( get_sub_field('image'), 'portal-retina' ); ?>

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

							<?php endif; ?>

						</section>

					<?php endif ?>

					<?php /* Changes every other post to a different class */
						if ('odd-row' == $oddpost) $oddpost = 'even-row';
						else $oddpost = 'odd-row';
					?>

			    <?php endwhile; ?>

			<?php endif; ?>

		<?php endwhile; // end of the loop. ?>

	</div>

<?php get_footer(); ?>
