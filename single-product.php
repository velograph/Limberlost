<?php
/**
 * The template for displaying all single posts.
 *
 * @package Limberlost
 */

get_header(); ?>

<script>
	jQuery(document).ready(function(){

		jQuery('.main-image').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: false,
		  asNavFor: '.image-thumbs'
		});

		jQuery('.image-thumbs').slick({
		  slidesToShow: 'all',
		  slidesToScroll: 1,
		  arrows: false,
		  asNavFor: '.main-image',
		  dots: false,
		  focusOnSelect: true
		});

	});
</script>

	<div class="single-exploration">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php if( has_term('guided-expedition', 'product_cat') ) : ?>
				<div class="exploration-banner">

					<?php $mobile = wp_get_attachment_image_src(get_field('wide_trip_banner'), 'full'); ?>
					<?php $desktop = wp_get_attachment_image_src(get_field('wide_trip_banner'), 'full'); ?>
					<?php $retina = wp_get_attachment_image_src(get_field('thin_trip_banner'), 'full'); ?>

					<picture>
						<!--[if IE 9]><video style="display: none"><![endif]-->
						<source
							srcset="<?php echo $mobile[0]; ?>"
							media="(max-width: 500px)" />
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

				<?php if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>

				<div class="content-area">

					<div class="expedition-lead">
						Join us on the
					</div>
					<h1 class="expedition-title"><?php the_title(); ?></h1>

					<div class="exploration-section gallery-container">

						<div class="main-image">

							<?php if( get_field('trip_gallery') ) : ?>

								<?php

								$images = get_field('trip_gallery');

								if( $images ): ?>
									<?php foreach( $images as $image ): ?>

										<div class="portal-image">
											<picture>
												<!--[if IE 9]><video style="display: none"><![endif]-->
												<source
													srcset="<?php echo $image['sizes']['portal-mobile']; ?>"
													media="(max-width: 500px)" />
												<source
													srcset="<?php echo $image['sizes']['portal-tablet']; ?>"
													media="(max-width: 860px)" />
												<source
													srcset="<?php echo $image['sizes']['portal-desktop']; ?>"
													media="(max-width: 1180px)" />
												<source
													srcset="<?php echo $image['sizes']['portal-retina']; ?>"
													media="(min-width: 1181px)" />
												<!--[if IE 9]></video><![endif]-->
												<img srcset="<?php echo $image[0]; ?>">
											</picture>
											<div class="slide-caption">
												<?php echo $image['caption']; ?>
											</div>
										</div>

									<?php endforeach; ?>
								<?php endif; ?>

							<?php endif; ?>

						</div>

						<div class="image-thumbs">

							<?php

							$images = get_field('trip_gallery');

							if( $images ): ?>
								<?php foreach( $images as $image ): ?>

									<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />

								<?php endforeach; ?>
							<?php endif; ?>

						</div>

					</div>

					<div class="expedition-section details">

						<div class="list-callout route-details">
							<h4><?php the_field('trip_date'); ?></h4>

							<?php if( have_rows('trip_details') ) : ?>

								<ul>
								    <?php while ( have_rows('trip_details') ) : ?>

								        <?php the_row(); ?>

										<li>
									        <?php the_sub_field('detail'); ?>
										</li>

								    <?php endwhile; ?>
								</ul>

							<?php endif; ?>
						</div>

					</div>

					<div class="expedition-section you-get-you-should">

						<div class="list-callout you-get">
							<h4>You Get:</h4>

							<?php if( have_rows('you_get_list') ) : ?>

								<ul>
								    <?php while ( have_rows('you_get_list') ) : ?>

								        <?php the_row(); ?>

										<li>
									        <?php the_sub_field('you_get'); ?>
										</li>

								    <?php endwhile; ?>
								</ul>

							<?php endif; ?>
						</div>

						<div class="list-callout you-should">
							<h4>You Should:</h4>

							<?php if( have_rows('you_should_list') ) : ?>

								<ul>
								    <?php while ( have_rows('you_should_list') ) : ?>

								        <?php the_row(); ?>

										<li>
									        <?php the_sub_field('you_should'); ?>
										</li>

								    <?php endwhile; ?>
								</ul>

							<?php endif; ?>
						</div>

					</div>

					<div class="expedition-section daily-itinerary">
						<?php if( have_rows('daily_itinerary') ) : ?>

						    <?php while ( have_rows('daily_itinerary') ) : ?>

						        <?php the_row(); ?>

						        <?php if( get_row_layout() == 'day' ) : ?>

									<?php the_sub_field('day'); ?>
						            <?php the_sub_field('itinerary'); ?>

						        <?php endif; ?>

						    <?php endwhile; ?>

						<?php endif; ?>
					</div>

					<div class="exploration-section exploration-content">

						<?php the_content(); ?>

					</div>

					<div class="exploration-section pullquote">

						<?php the_field('pullquote'); ?>

					</div>

				</div>

			<?php endif; ?>

		<?php endwhile; // end of the loop. ?>

	</div>

<?php get_footer(); ?>
