<?php
/**
 * Template Name: Front Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Limberlost
 */

get_header(); ?>

<script>
	jQuery(document).ready(function(){

		jQuery('.exploration-slider').slick({
			arrows: false,
			dots: true,
			autoplay: true,
			autoplaySpeed: 5000,
			pauseOnHover: true,
			centered: true,
			mobileFirst: true,
		    lazyLoad: 'ondemand',
		});

		jQuery('.outfitting-slider').slick({
			arrows: true,
			dots: false,
			slidesToShow: 4,
			autoplay: false,
			centerMode: true,
			mobileFirst: true,
		    lazyLoad: 'ondemand',
		});

	});
</script>
	<div class="front-page content-area">

		<section class="exploration section">

			<div class="section-portal">

				<?php

				    $args = array(
				        'post_type' => 'post',
						'posts_per_page' => 5,
						'tax_query' => array(
							array(
								'taxonomy' => 'category',
								'field' => 'slug',
								'terms' => array('reports','gear','routes'),
							),
						),
				    );
				    $query = new WP_Query($args);

				    if($query->have_posts()) : ?>

					<div class="exploration-slider">

					    <?php while($query->have_posts()) : ?>

					        <?php $query->the_post(); ?>

							<div class="slide">

								<?php $mobile_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'product-banner-mobile'); ?>
								<?php $tablet_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'product-banner-tablet'); ?>
								<?php $desktop_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'product-banner-desktop'); ?>
								<?php $retina_page_banner = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'product-banner-retina'); ?>

								<picture class="picture document-header-image">
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
								<div class="overlay"></div>

								<div class="slide-caption">
									<?php
									$terms = get_the_terms( $post->ID, 'category' );

										$exploration_links = array();

										foreach ( $terms as $term ) {
											$exploration_links[] = $term->name;
										}

										$exploration_category = join( ", ", $exploration_links );
									?>

									<?php $post_type = get_post_type_object( get_post_type($post) ); ?>
									<a href="<?php the_permalink(); ?>">
										<span class="post-type"><?php echo $exploration_category; ?>:&nbsp;</span>
										<span class="post-title"><?php the_title() ?>
											<span class="arrow">
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
											</span>
										</span>
									</a>
								</div>

							</div>

					    <?php endwhile; ?>

					</div>

				<?php endif; ?>

			</div>

			<div class="section-supporting">

				<div class="section-content">
					<div class="section-title">
						<h1>
							<a href="/exploration">
								Exploration
							</a>
						</h1>
					</div>

					<div class="section-description">
						<?php the_field('section_description', 2060); ?>
						<a href="/exploration"><?php the_field('homepage_link_text', 2060); ?>
							<span class="arrow">
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
							</span>
						</a>
					</div>
				</div>

			</div>

		</section>

		<!-- <section class="outfitting section">

			<div class="section-supporting">

				<div class="section-content">

					<div class="section-description">
						<?php the_field('section_description', 2100); ?>
						<?php the_field('homepage_link_text', 2100); ?>
					</div>

					<div class="section-icon-title">
						<img src="<?php the_field('section_icon', 2100); ?>" alt="exploration" />
						<h1>
							<a href="<?php the_permalink(); ?>">
								Outfitting
							</a>
						</h1>
					</div>

				</div>

			</div>

			<div class="section-portal">
				<?php

					$args = array(
						'post_type' => array('product'),
						'posts_per_page' => 5,
						'tax_query' => array(
							array(
								'taxonomy' => 'product_cat',
								'field' => 'slug',
								'terms' => 'guided-expedition',
								'operator' => 'NOT IN',
							),
						),
					);
					$query = new WP_Query($args);

					if($query->have_posts()) : ?>

					<div class="outfitting-slider">

						<?php while($query->have_posts()) : ?>

							<?php $query->the_post(); ?>

							<div class="product-portal slide">
								<div class="product-thumbnail">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('portal-tablet'); ?>
									</a>
								</div>
								<h5><?php the_title() ?></h5>
								<h6>product short description</h6>
							</div>

						<?php endwhile; ?>

					</div>

				<?php endif; ?>

			</div>

		</section> -->

		<section class="expeditions section">

			<div class="section-supporting">

				<div class="section-content">

					<div class="section-title">
						<h1>
							<a href="/expeditions">
								Expeditions
							</a>
						</h1>
					</div>

					<div class="section-description">
						<?php the_field('section_description', 2102); ?>
						<a href="/expeditions"><?php the_field('homepage_link_text', 2102); ?>
							<span class="arrow">
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
							</span>
						</a>
					</div>

				</div>

			</div>

			<div class="section-portal">

				<?php

					$args = array(
						'post_type' => array('product'),
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

						<?php $mobile = wp_get_attachment_image_src(get_field('tall_trip_banner'), 'full'); ?>
						<?php $retina = wp_get_attachment_image_src(get_field('wide_trip_banner'), 'full'); ?>

						<a href="<?php the_permalink(); ?>">
							<picture>
								<!--[if IE 9]><video style="display: none"><![endif]-->
								<source
									srcset="<?php echo $mobile[0]; ?>"
									media="(max-width: 768px)" />
								<source
									srcset="<?php echo $retina[0]; ?>"
									media="(min-width: 769px)" />
								<!--[if IE 9]></video><![endif]-->
								<img srcset="<?php echo $image[0]; ?>">
							</picture>
						</a>

					<?php endwhile; ?>

				<?php endif; ?>

			</div>

		</section>

		<section class="partnerships section">

			<div class="section-portal">

				<?php $mobile = wp_get_attachment_image_src( get_post_thumbnail_id( 2104 ), 'mobile' ); ?>
				<?php $tablet = wp_get_attachment_image_src( get_post_thumbnail_id( 2104 ), 'tablet' ); ?>
				<?php $desktop = wp_get_attachment_image_src( get_post_thumbnail_id( 2104 ), 'desktop' ); ?>
				<?php $retina = wp_get_attachment_image_src( get_post_thumbnail_id( 2104 ), 'retina' ); ?>

				<a href="/partnerships">
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

			<div class="section-supporting">

				<div class="section-content">

					<div class="section-title">
						<h1>
							<a href="/partnership">
								Partnerships
							</a>
						</h1>
					</div>

					<div class="section-description">
						<?php the_field('short_partnership_description', 2104); ?>
						<a href="/partnership"><?php the_field('homepage_link_text', 2104); ?>
							<span class="arrow">
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
							</span>
						</a>
					</div>

					<?php

					    $args = array(
					        'post_type' => 'partnership',
							'posts_per_page' => 4,
					    );
					    $query = new WP_Query($args);

					    if($query->have_posts()) : ?>

						<div class="partner-logos">

						    <?php while($query->have_posts()) : ?>

						        <?php $query->the_post(); ?>

				        		<div class="partner-logo <?php echo $post->post_name; ?>">
									<a href="<?php the_permalink(); ?>">
										<?php
											$image = get_field('company_logo');
											$size = 'thumb';
											echo wp_get_attachment_image( $image, $size );
										?>
									</a>
								</div>

					    	<?php endwhile; ?>

						</div>

					<?php endif; ?>

				</div>

			</div>

		</section>

	</div><!-- .content-area -->

<?php get_footer(); ?>
