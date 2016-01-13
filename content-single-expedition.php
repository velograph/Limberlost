<?php
/**
 * @package Limberlost
 */
?>

<script>
	jQuery(document).ready(function(){

		jQuery('.main-image').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: false,
		  asNavFor: '.image-thumbs'
		});

		jQuery('.image-thumbs').slick({
		  slidesToShow: 6,
		  slidesToScroll: 1,
		  arrows: false,
		  asNavFor: '.main-image',
		  dots: false,
		  focusOnSelect: true
		});

	});
</script>


	<div class="expedition-banner">

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

	<div class="content-area single-expedition">

		<section class="section">

			<div class="section-lead-in">

				<div class="section-lead-in-teaser">
						Join us on the
				</div>

				<div class="section-title">
					<h1><?php the_title(); ?></h1>
				</div>

			</div>

		</section>

		<div class="column-container">
			<section class="column-one expedition-gallery expedition-content expedition-day-to-day">

				<div class="expedition-section expedition-gallery-container">

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

				<div class="expedition-section expedition-content">

					<?php the_content(); ?>

				</div>

				<div class="expedition-section pullquote">

					<?php the_field('pullquote'); ?>

				</div>

				<div class="expedition-section daily-itinerary">
					<h2>Day by Day</h2>

					<?php if( have_rows('daily_itinerary') ) : ?>

						<?php while ( have_rows('daily_itinerary') ) : ?>

							<?php the_row(); ?>

							<?php if( get_row_layout() == 'day' ) : ?>

								<div class="day">
									<?php the_sub_field('day'); ?>
								</div>
								<div class="itinerary">
									<?php the_sub_field('itinerary'); ?>
								</div>

							<?php endif; ?>

						<?php endwhile; ?>

					<?php endif; ?>
				</div>

			</section>

			<section class="column-two expedition-details expedition-add-to-cart expedition-you-get-you-should expedition-supporting-images">

				<div class="expedition-section details">

					<div class="list-callout route-details">
						<h2><?php the_field('trip_date'); ?></h2>

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

				<div class="expedition-section add-to-cart">

					<h3>
						<?php global $product; ?>
						<?php echo $product->get_price_html(); ?>
					</h3>

					<div class="add-to-cart-button">

						<a class="button" href="mailto:hello@limberlost.co">
							Email us for info
						</a>

					</div>

				</div>

				<div class="expedition-section you-get-you-should">

					<div class="list-callout you-get">
						<h2>You Get:</h2>

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
						<h2>You Should:</h2>

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

				<div class="expedition-section supporting-images">

					<?php if( get_field('supporting_images') ) : ?>

						<?php

						$images = get_field('supporting_images');

						if( $images ): ?>
							<?php foreach( $images as $image ): ?>

								<picture class="supporting-image">
									<!--[if IE 9]><video style="display: none"><![endif]-->
									<source
										srcset="<?php echo $image['sizes']['portal-mobile']; ?>"
										media="(max-width: 500px)" />
									<source
										srcset="<?php echo $image['sizes']['portal-tablet']; ?>"
										media="(min-width: 501px)" />
									<!--[if IE 9]></video><![endif]-->
									<img srcset="<?php echo $image[0]; ?>">
								</picture>

							<?php endforeach; ?>
						<?php endif; ?>

					<?php endif; ?>

				</div>

			</section>

		</div>

	</div>
