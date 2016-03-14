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

	<div class="content-area our-story offset-alternating">

		<section class="section">

			<div class="section-lead-in">

				<div class="section-title">
					<h1><?php the_title(); ?></h1>
				</div>

				<div class="section-lead-in-description">
					<?php the_field('section_description', 2102); ?>
				</div>

			</div>

		</section>

		<section class="section">

			<?php

			    $args = array(
			        'pagename' => 'our-story'
			    );
			    $query = new WP_Query($args);

			    if($query->have_posts()) : ?>

			    <?php while($query->have_posts()) : ?>

			        <?php $query->the_post(); ?>

					<?php if( have_rows('our_story') ) : ?>

						<?php $i = 1; ?>
						<?php while ( have_rows('our_story') ) : ?>

					        <?php the_row(); ?>

					        <?php if( get_row_layout() == 'section' ) : ?>

								<?php if(($i % 2 == 0)) : ?>

									<section class="even-row">

										<div class="section-supporting">

											<?php $mobile = wp_get_attachment_image_src( get_sub_field( 'section_image' ), 'portal-mobile' ); ?>
											<?php $tablet = wp_get_attachment_image_src( get_sub_field( 'section_image' ), 'portal-tablet' ); ?>
											<?php $desktop = wp_get_attachment_image_src( get_sub_field( 'section_image' ), 'portal-desktop' ); ?>
											<?php $retina = wp_get_attachment_image_src( get_sub_field( 'section_image' ), 'portal-retina' ); ?>

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

									</section>

								<?php else: ?>

									<section class="odd-row">

										<div class="section-portal">

											<div class="section-content">

												<h1><?php the_sub_field('section_title'); ?></h1>
												<?php the_sub_field('section_content'); ?>

											</div>

										</div>

										<div class="section-supporting">

											<?php $mobile = wp_get_attachment_image_src( get_sub_field( section_image ), 'portal-mobile' ); ?>
											<?php $tablet = wp_get_attachment_image_src( get_sub_field( section_image ), 'portal-tablet' ); ?>
											<?php $desktop = wp_get_attachment_image_src( get_sub_field( section_image ), 'portal-desktop' ); ?>
											<?php $retina = wp_get_attachment_image_src( get_sub_field( section_image ), 'portal-retina' ); ?>

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

								<?php endif;  ?>

					        <?php endif; ?>

						<?php $i++; ?>
					    <?php endwhile; ?>

					<?php endif; ?>

			    <?php endwhile; ?>

			<?php endif; ?>

	</div><!-- #primary -->

<?php get_footer(); ?>