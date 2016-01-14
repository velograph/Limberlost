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
		  accessibility: true,
		  arrows: false,
		  asNavFor: '.image-thumbs'
		});

		jQuery('.image-thumbs').slick({
		  slidesToShow: 'all',
		  slidesToScroll: 1,
		  accessibility: true,
		  arrows: false,
		  asNavFor: '.main-image',
		  dots: false,
		  focusOnSelect: true
		});

	});
</script>

	<div class="single-exploration">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php if( has_term('routes', 'category') ) : ?>
				<!-- Routes! -->
				<div class="exploration-banner">

					<?php $mobile = wp_get_attachment_image_src(get_field('route_banner'), 'banner-mobile'); ?>
					<?php $desktop = wp_get_attachment_image_src(get_field('route_banner'), 'banner-desktop'); ?>
					<?php $retina = wp_get_attachment_image_src(get_field('route_banner'), 'banner-retina'); ?>

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

				<div class="breadcrumbs-container">
					<div class="breadcrumbs">
						<div class="ancestor">
							<a href="/exploration">Exploration</a>
						</div>
						<div class="separator">
							<svg viewBox="0 0 430.7 360.9">
							<g>
								<path d="M50.5,242.7c10.1,0.5,24.6-3.8,33.6-4.1c12.1,2.2,24.2,4.3,36.3,6.5c5.2-0.1,13.1-6.2,18.3-6.3c5.7,2,11.4,4.1,17.2,6.1
									c5.2,0,13.8-5.7,18.3-6.3c15.3-2.2,53.1-1,60.1,11.8c8.6,6.7,5.2,11.2,9.2,19.3c-6.1,14.5-15.6,20.2-27.3,22.4
									c-8.2,28.5,5.8,31.9,10.4,51.9c9.8,5.6,19.6,11.3,29.4,16.9c15.4-4.2,30.8-8.3,46.2-12.5c1.4-7,2.9-14,4.3-21
									c1.9-2.4,9.6-3.8,11.6-5.5c8.2-6.6,13.4-18.3,21.6-24.5c13.9-5.8,27.7-11.6,41.6-17.4l11.8-15.1c5.1-4,16.1-6.8,20.4-12
									c9.8-11.9,5.5-23.7,16.9-29.4c1.9-8.4-4.1-46.4-7.6-51c-7.9-4.9-15.8-9.9-23.7-14.8c-1.5-4.8-3-9.7-4.5-14.5
									c-4.5-5.5-9.2-3.5-12.2-10.8c0.7-1.9,1.3-3.8,2-5.7c-3.9-7-14.6-7.8-20.8-13.8c-6.5-6.4-9.3-19.2-16.7-25.2
									c-13.3-4.8-26.6-9.5-40-14.3c-8.2-6.4-15.2-21.3-22.4-27.3c-11.1-5-22.1-10-33.2-15C242.7,22.7,238,7.8,226.9,0
									c-10.8,6.2-49.1,14.3-62.5,13.1c-2.5,11.2,0.2,17.2,0.4,25.9c-2.8,5-7,6.1-5.1,14.3c1.3,5.5,8.2,9.1,11.2,13.6
									c7.9,11.8,11,31.5,8.6,48.1c19.7,12.4,38.1,28.9,51.8,44.1c-13.3,17.6-39.9,4.2-62.4,3.6c-13.4-0.4-30.4,4-43.2,3.9
									c-16.4-0.1-30.3-9.7-47.7-10.5c-17.6-0.8-48.2-0.7-63.4,6.4c-3.2,1.8-6.6,7.5-9.8,9.4c-10.8,29.8-1.3,34.8,2.7,55.6
									C22,232.6,36.2,237.6,50.5,242.7"/>
							</g>
							</svg>
						</div>
						<div class="parent">
							<?php
								foreach((get_the_category()) as $parentcat) {
									$parent = $parentcat->category_parent;
									echo '<a href="' . get_category_link($parentcat) .'">' .$parentcat->cat_name .'</a>';
								}
							?>
						</div>
						<div class="separator">
							<svg viewBox="0 0 430.7 360.9">
							<g>
								<path d="M50.5,242.7c10.1,0.5,24.6-3.8,33.6-4.1c12.1,2.2,24.2,4.3,36.3,6.5c5.2-0.1,13.1-6.2,18.3-6.3c5.7,2,11.4,4.1,17.2,6.1
									c5.2,0,13.8-5.7,18.3-6.3c15.3-2.2,53.1-1,60.1,11.8c8.6,6.7,5.2,11.2,9.2,19.3c-6.1,14.5-15.6,20.2-27.3,22.4
									c-8.2,28.5,5.8,31.9,10.4,51.9c9.8,5.6,19.6,11.3,29.4,16.9c15.4-4.2,30.8-8.3,46.2-12.5c1.4-7,2.9-14,4.3-21
									c1.9-2.4,9.6-3.8,11.6-5.5c8.2-6.6,13.4-18.3,21.6-24.5c13.9-5.8,27.7-11.6,41.6-17.4l11.8-15.1c5.1-4,16.1-6.8,20.4-12
									c9.8-11.9,5.5-23.7,16.9-29.4c1.9-8.4-4.1-46.4-7.6-51c-7.9-4.9-15.8-9.9-23.7-14.8c-1.5-4.8-3-9.7-4.5-14.5
									c-4.5-5.5-9.2-3.5-12.2-10.8c0.7-1.9,1.3-3.8,2-5.7c-3.9-7-14.6-7.8-20.8-13.8c-6.5-6.4-9.3-19.2-16.7-25.2
									c-13.3-4.8-26.6-9.5-40-14.3c-8.2-6.4-15.2-21.3-22.4-27.3c-11.1-5-22.1-10-33.2-15C242.7,22.7,238,7.8,226.9,0
									c-10.8,6.2-49.1,14.3-62.5,13.1c-2.5,11.2,0.2,17.2,0.4,25.9c-2.8,5-7,6.1-5.1,14.3c1.3,5.5,8.2,9.1,11.2,13.6
									c7.9,11.8,11,31.5,8.6,48.1c19.7,12.4,38.1,28.9,51.8,44.1c-13.3,17.6-39.9,4.2-62.4,3.6c-13.4-0.4-30.4,4-43.2,3.9
									c-16.4-0.1-30.3-9.7-47.7-10.5c-17.6-0.8-48.2-0.7-63.4,6.4c-3.2,1.8-6.6,7.5-9.8,9.4c-10.8,29.8-1.3,34.8,2.7,55.6
									C22,232.6,36.2,237.6,50.5,242.7"/>
							</g>
							</svg>
						</div>
						<div class="current-post">
							<?php the_title(); ?>
						</div>
					</div>
				</div>

				<div class="content-area">

					<div class="exploration-term">
						Featured Route
					</div>
					<h1 class="exploration-title"><?php the_title(); ?></h1>

					<div class="exploration-section gallery-container">

						<div class="main-image">

							<?php if( get_field('gallery') ) : ?>

								<?php

								$images = get_field('gallery');

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
												<img srcset="<?php echo $image['sizes']['portal-desktop']; ?>">
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

							$images = get_field('gallery');

							if( $images ): ?>
								<?php foreach( $images as $image ): ?>

									<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />

								<?php endforeach; ?>
							<?php endif; ?>

						</div>

					</div>

					<div class="exploration-section details-intro">

						<div class="list-callout route-details">
							<h4>Details:</h4>
							<?php if( have_rows('route_details') ) : ?>

								<ul>
								    <?php while ( have_rows('route_details') ) : ?>

								        <?php the_row(); ?>

										<li>
									        <?php the_sub_field('detail'); ?>
										</li>

								    <?php endwhile; ?>
								</ul>

							<?php endif; ?>
						</div>

						<div class="route-intro">
							<?php the_field('route_intro'); ?>
						</div>

					</div>

					<div class="exploration-section rwgps-embed-row">
						<div class="rwgps-embed">

							<?php the_field('route_embed'); ?>

						</div>
					</div>

					<div class="exploration-section exploration-content">

						<?php the_content(); ?>

					</div>

					<div class="exploration-section pullquote">

						<?php the_field('pullquote'); ?>

					</div>

					<?php if( have_rows('need_to_knows') ) : ?>

						<div class="exploration-section list-callout need-to-knows">

							<h4>Need to Know:</h4>
							<ul>
								<?php while ( have_rows('need_to_knows') ) : ?>

									<?php the_row(); ?>

									<li>
										<?php the_sub_field('need_to_know'); ?>
									</li>

								<?php endwhile; ?>
							</ul>

						</div>

					<?php endif; ?>

				</div>

			<?php endif; ?>

			<?php if( has_term('reports', 'category') ) : ?>
			<!-- Reports! -->
			<div class="exploration-banner">

				<?php $mobile = wp_get_attachment_image_src(get_field('route_banner'), 'banner-mobile'); ?>
				<?php $desktop = wp_get_attachment_image_src(get_field('route_banner'), 'banner-desktop'); ?>
				<?php $retina = wp_get_attachment_image_src(get_field('route_banner'), 'banner-retina'); ?>

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

			<div class="breadcrumbs-container">
				<div class="breadcrumbs">
					<div class="ancestor">
						<a href="/exploration">Exploration</a>
					</div>
					<div class="separator">
						<svg viewBox="0 0 430.7 360.9">
						<g>
							<path d="M50.5,242.7c10.1,0.5,24.6-3.8,33.6-4.1c12.1,2.2,24.2,4.3,36.3,6.5c5.2-0.1,13.1-6.2,18.3-6.3c5.7,2,11.4,4.1,17.2,6.1
								c5.2,0,13.8-5.7,18.3-6.3c15.3-2.2,53.1-1,60.1,11.8c8.6,6.7,5.2,11.2,9.2,19.3c-6.1,14.5-15.6,20.2-27.3,22.4
								c-8.2,28.5,5.8,31.9,10.4,51.9c9.8,5.6,19.6,11.3,29.4,16.9c15.4-4.2,30.8-8.3,46.2-12.5c1.4-7,2.9-14,4.3-21
								c1.9-2.4,9.6-3.8,11.6-5.5c8.2-6.6,13.4-18.3,21.6-24.5c13.9-5.8,27.7-11.6,41.6-17.4l11.8-15.1c5.1-4,16.1-6.8,20.4-12
								c9.8-11.9,5.5-23.7,16.9-29.4c1.9-8.4-4.1-46.4-7.6-51c-7.9-4.9-15.8-9.9-23.7-14.8c-1.5-4.8-3-9.7-4.5-14.5
								c-4.5-5.5-9.2-3.5-12.2-10.8c0.7-1.9,1.3-3.8,2-5.7c-3.9-7-14.6-7.8-20.8-13.8c-6.5-6.4-9.3-19.2-16.7-25.2
								c-13.3-4.8-26.6-9.5-40-14.3c-8.2-6.4-15.2-21.3-22.4-27.3c-11.1-5-22.1-10-33.2-15C242.7,22.7,238,7.8,226.9,0
								c-10.8,6.2-49.1,14.3-62.5,13.1c-2.5,11.2,0.2,17.2,0.4,25.9c-2.8,5-7,6.1-5.1,14.3c1.3,5.5,8.2,9.1,11.2,13.6
								c7.9,11.8,11,31.5,8.6,48.1c19.7,12.4,38.1,28.9,51.8,44.1c-13.3,17.6-39.9,4.2-62.4,3.6c-13.4-0.4-30.4,4-43.2,3.9
								c-16.4-0.1-30.3-9.7-47.7-10.5c-17.6-0.8-48.2-0.7-63.4,6.4c-3.2,1.8-6.6,7.5-9.8,9.4c-10.8,29.8-1.3,34.8,2.7,55.6
								C22,232.6,36.2,237.6,50.5,242.7"/>
						</g>
						</svg>
					</div>
					<div class="parent">
						<?php
							foreach((get_the_category()) as $parentcat) {
								$parent = $parentcat->category_parent;
								echo '<a href="' . get_category_link($parentcat) .'">' .$parentcat->cat_name .'</a>';
							}
						?>
					</div>
					<div class="separator">
						<svg viewBox="0 0 430.7 360.9">
						<g>
							<path d="M50.5,242.7c10.1,0.5,24.6-3.8,33.6-4.1c12.1,2.2,24.2,4.3,36.3,6.5c5.2-0.1,13.1-6.2,18.3-6.3c5.7,2,11.4,4.1,17.2,6.1
								c5.2,0,13.8-5.7,18.3-6.3c15.3-2.2,53.1-1,60.1,11.8c8.6,6.7,5.2,11.2,9.2,19.3c-6.1,14.5-15.6,20.2-27.3,22.4
								c-8.2,28.5,5.8,31.9,10.4,51.9c9.8,5.6,19.6,11.3,29.4,16.9c15.4-4.2,30.8-8.3,46.2-12.5c1.4-7,2.9-14,4.3-21
								c1.9-2.4,9.6-3.8,11.6-5.5c8.2-6.6,13.4-18.3,21.6-24.5c13.9-5.8,27.7-11.6,41.6-17.4l11.8-15.1c5.1-4,16.1-6.8,20.4-12
								c9.8-11.9,5.5-23.7,16.9-29.4c1.9-8.4-4.1-46.4-7.6-51c-7.9-4.9-15.8-9.9-23.7-14.8c-1.5-4.8-3-9.7-4.5-14.5
								c-4.5-5.5-9.2-3.5-12.2-10.8c0.7-1.9,1.3-3.8,2-5.7c-3.9-7-14.6-7.8-20.8-13.8c-6.5-6.4-9.3-19.2-16.7-25.2
								c-13.3-4.8-26.6-9.5-40-14.3c-8.2-6.4-15.2-21.3-22.4-27.3c-11.1-5-22.1-10-33.2-15C242.7,22.7,238,7.8,226.9,0
								c-10.8,6.2-49.1,14.3-62.5,13.1c-2.5,11.2,0.2,17.2,0.4,25.9c-2.8,5-7,6.1-5.1,14.3c1.3,5.5,8.2,9.1,11.2,13.6
								c7.9,11.8,11,31.5,8.6,48.1c19.7,12.4,38.1,28.9,51.8,44.1c-13.3,17.6-39.9,4.2-62.4,3.6c-13.4-0.4-30.4,4-43.2,3.9
								c-16.4-0.1-30.3-9.7-47.7-10.5c-17.6-0.8-48.2-0.7-63.4,6.4c-3.2,1.8-6.6,7.5-9.8,9.4c-10.8,29.8-1.3,34.8,2.7,55.6
								C22,232.6,36.2,237.6,50.5,242.7"/>
						</g>
						</svg>
					</div>
					<div class="current-post">
						<?php the_title(); ?>
					</div>
				</div>
			</div>

			<div class="content-area">

				<div class="exploration-term">
					Trip Report
				</div>
				<h1 class="exploration-title"><?php the_title(); ?></h1>

				<div class="exploration-section gallery-container">

					<div class="main-image">

						<?php if( get_field('gallery') ) : ?>

							<?php

							$images = get_field('gallery');

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
											<img srcset="<?php echo $image['sizes']['portal-desktop']; ?>">
										</picture>
										<div class="slide-caption">
											<?php echo $image['caption']; ?>
										</div>
									</div>

								<?php endforeach; ?>
							<?php endif; ?>

						<?php else: ?>

							<?php $mobile_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-mobile'); ?>
							<?php $tablet_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-tablet'); ?>
							<?php $desktop_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-desktop'); ?>
							<?php $retina_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-retina'); ?>

							<picture class="single-image">
								<!--[if IE 9]><video style="display: none"><![endif]-->
								<source
									srcset="<?php echo $mobile_page_banner[0]; ?>"
									media="(max-width: 500px)" />
								<source
									srcset="<?php echo $tablet_page_banner[0]; ?>"
									media="(max-width: 860px)" />
								<source
									srcset="<?php echo $desktop_page_banner[0]; ?>"
									media="(max-width: 1180px)" />
								<source
									srcset="<?php echo $retina_page_banner[0]; ?>"
									media="(min-width: 1181px)" />
								<!--[if IE 9]></video><![endif]-->
								<img srcset="<?php echo $image[0]; ?>">
							</picture>

						<?php endif; ?>

					</div>

					<div class="image-thumbs">

						<?php

						$images = get_field('gallery');

						if( $images ): ?>
							<?php foreach( $images as $image ): ?>

								<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />

							<?php endforeach; ?>
						<?php endif; ?>

					</div>

				</div>

				<div class="exploration-section exploration-content">

					<?php the_content(); ?>

				</div>

				<div class="exploration-section pullquote">

					<?php the_field('pullquote'); ?>

				</div>

				<?php if( have_rows('need_to_knows') ) : ?>

					<div class="exploration-section list-callout need-to-knows">

						<h4>Need to Know:</h4>
						<ul>
							<?php while ( have_rows('need_to_knows') ) : ?>

								<?php the_row(); ?>

								<li>
									<?php the_sub_field('need_to_know'); ?>
								</li>

							<?php endwhile; ?>
						</ul>

					</div>

				<?php endif; ?>

			</div>
			<?php endif; ?>

			<?php if( has_term('gear', 'category') ) : ?>
			<!-- Gear! -->
			<div class="exploration-banner">

				<?php $mobile = wp_get_attachment_image_src(get_field('route_banner'), 'banner-mobile'); ?>
				<?php $desktop = wp_get_attachment_image_src(get_field('route_banner'), 'banner-desktop'); ?>
				<?php $retina = wp_get_attachment_image_src(get_field('route_banner'), 'banner-retina'); ?>

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

			<div class="breadcrumbs-container">
				<div class="breadcrumbs">
					<div class="ancestor">
						<a href="/exploration">Exploration</a>
					</div>
					<div class="separator">
						<svg viewBox="0 0 430.7 360.9">
						<g>
							<path d="M50.5,242.7c10.1,0.5,24.6-3.8,33.6-4.1c12.1,2.2,24.2,4.3,36.3,6.5c5.2-0.1,13.1-6.2,18.3-6.3c5.7,2,11.4,4.1,17.2,6.1
								c5.2,0,13.8-5.7,18.3-6.3c15.3-2.2,53.1-1,60.1,11.8c8.6,6.7,5.2,11.2,9.2,19.3c-6.1,14.5-15.6,20.2-27.3,22.4
								c-8.2,28.5,5.8,31.9,10.4,51.9c9.8,5.6,19.6,11.3,29.4,16.9c15.4-4.2,30.8-8.3,46.2-12.5c1.4-7,2.9-14,4.3-21
								c1.9-2.4,9.6-3.8,11.6-5.5c8.2-6.6,13.4-18.3,21.6-24.5c13.9-5.8,27.7-11.6,41.6-17.4l11.8-15.1c5.1-4,16.1-6.8,20.4-12
								c9.8-11.9,5.5-23.7,16.9-29.4c1.9-8.4-4.1-46.4-7.6-51c-7.9-4.9-15.8-9.9-23.7-14.8c-1.5-4.8-3-9.7-4.5-14.5
								c-4.5-5.5-9.2-3.5-12.2-10.8c0.7-1.9,1.3-3.8,2-5.7c-3.9-7-14.6-7.8-20.8-13.8c-6.5-6.4-9.3-19.2-16.7-25.2
								c-13.3-4.8-26.6-9.5-40-14.3c-8.2-6.4-15.2-21.3-22.4-27.3c-11.1-5-22.1-10-33.2-15C242.7,22.7,238,7.8,226.9,0
								c-10.8,6.2-49.1,14.3-62.5,13.1c-2.5,11.2,0.2,17.2,0.4,25.9c-2.8,5-7,6.1-5.1,14.3c1.3,5.5,8.2,9.1,11.2,13.6
								c7.9,11.8,11,31.5,8.6,48.1c19.7,12.4,38.1,28.9,51.8,44.1c-13.3,17.6-39.9,4.2-62.4,3.6c-13.4-0.4-30.4,4-43.2,3.9
								c-16.4-0.1-30.3-9.7-47.7-10.5c-17.6-0.8-48.2-0.7-63.4,6.4c-3.2,1.8-6.6,7.5-9.8,9.4c-10.8,29.8-1.3,34.8,2.7,55.6
								C22,232.6,36.2,237.6,50.5,242.7"/>
						</g>
						</svg>
					</div>
					<div class="parent">
						<?php
							foreach((get_the_category()) as $parentcat) {
								$parent = $parentcat->category_parent;
								echo '<a href="' . get_category_link($parentcat) .'">' .$parentcat->cat_name .'</a>';
							}
						?>
					</div>
					<div class="separator">
						<svg viewBox="0 0 430.7 360.9">
						<g>
							<path d="M50.5,242.7c10.1,0.5,24.6-3.8,33.6-4.1c12.1,2.2,24.2,4.3,36.3,6.5c5.2-0.1,13.1-6.2,18.3-6.3c5.7,2,11.4,4.1,17.2,6.1
								c5.2,0,13.8-5.7,18.3-6.3c15.3-2.2,53.1-1,60.1,11.8c8.6,6.7,5.2,11.2,9.2,19.3c-6.1,14.5-15.6,20.2-27.3,22.4
								c-8.2,28.5,5.8,31.9,10.4,51.9c9.8,5.6,19.6,11.3,29.4,16.9c15.4-4.2,30.8-8.3,46.2-12.5c1.4-7,2.9-14,4.3-21
								c1.9-2.4,9.6-3.8,11.6-5.5c8.2-6.6,13.4-18.3,21.6-24.5c13.9-5.8,27.7-11.6,41.6-17.4l11.8-15.1c5.1-4,16.1-6.8,20.4-12
								c9.8-11.9,5.5-23.7,16.9-29.4c1.9-8.4-4.1-46.4-7.6-51c-7.9-4.9-15.8-9.9-23.7-14.8c-1.5-4.8-3-9.7-4.5-14.5
								c-4.5-5.5-9.2-3.5-12.2-10.8c0.7-1.9,1.3-3.8,2-5.7c-3.9-7-14.6-7.8-20.8-13.8c-6.5-6.4-9.3-19.2-16.7-25.2
								c-13.3-4.8-26.6-9.5-40-14.3c-8.2-6.4-15.2-21.3-22.4-27.3c-11.1-5-22.1-10-33.2-15C242.7,22.7,238,7.8,226.9,0
								c-10.8,6.2-49.1,14.3-62.5,13.1c-2.5,11.2,0.2,17.2,0.4,25.9c-2.8,5-7,6.1-5.1,14.3c1.3,5.5,8.2,9.1,11.2,13.6
								c7.9,11.8,11,31.5,8.6,48.1c19.7,12.4,38.1,28.9,51.8,44.1c-13.3,17.6-39.9,4.2-62.4,3.6c-13.4-0.4-30.4,4-43.2,3.9
								c-16.4-0.1-30.3-9.7-47.7-10.5c-17.6-0.8-48.2-0.7-63.4,6.4c-3.2,1.8-6.6,7.5-9.8,9.4c-10.8,29.8-1.3,34.8,2.7,55.6
								C22,232.6,36.2,237.6,50.5,242.7"/>
						</g>
						</svg>
					</div>
					<div class="current-post">
						<?php the_title(); ?>
					</div>
				</div>
			</div>

			<div class="content-area">

				<div class="exploration-term">
					Gear Review
				</div>
				<h1 class="exploration-title"><?php the_title(); ?></h1>

				<div class="exploration-section gallery-container">

					<div class="main-image">

						<?php if( get_field('gallery') ) : ?>

							<?php

							$images = get_field('gallery');

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
											<img srcset="<?php echo $image['sizes']['portal-desktop']; ?>">
										</picture>
										<div class="slide-caption">
											<?php echo $image['caption']; ?>
										</div>
									</div>

								<?php endforeach; ?>
							<?php endif; ?>

						<?php else: ?>

							<?php $mobile_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-mobile'); ?>
							<?php $tablet_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-tablet'); ?>
							<?php $desktop_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-desktop'); ?>
							<?php $retina_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'portal-retina'); ?>

							<picture class="single-image">
								<!--[if IE 9]><video style="display: none"><![endif]-->
								<source
									srcset="<?php echo $mobile_page_banner[0]; ?>"
									media="(max-width: 500px)" />
								<source
									srcset="<?php echo $tablet_page_banner[0]; ?>"
									media="(max-width: 860px)" />
								<source
									srcset="<?php echo $desktop_page_banner[0]; ?>"
									media="(max-width: 1180px)" />
								<source
									srcset="<?php echo $retina_page_banner[0]; ?>"
									media="(min-width: 1181px)" />
								<!--[if IE 9]></video><![endif]-->
								<img srcset="<?php echo $image[0]; ?>">
							</picture>

						<?php endif; ?>

					</div>

					<div class="image-thumbs">

						<?php

						$images = get_field('gallery');

						if( $images ): ?>
							<?php foreach( $images as $image ): ?>

								<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />

							<?php endforeach; ?>
						<?php endif; ?>

					</div>

				</div>

				<div class="exploration-section exploration-content">

					<?php the_content(); ?>

				</div>

			</div>
			<?php endif; ?>

		<?php endwhile; // end of the loop. ?>

	</div>

<?php get_footer(); ?>
