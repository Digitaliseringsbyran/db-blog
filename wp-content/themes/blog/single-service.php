<?php /* Template Name: Service Template */ ?>


<?php get_header(); ?>

<?php
	$more_id = 6;
	$queried_post = get_post($more_id);
	$field = get_field('service_steps', $more_id);
	$post_image = get_the_post_thumbnail_url($more_id);
?>

	<main role="main">
		<article class="service-page clearfix">
			<div class="service-page__intro col-12 sm-col-11 md-col-10 lg-col-8 pt5 mt5 mb3 mx-auto center px2">
				<span class="service-page__summary mb3 block">2 dagar — Fastpris</span>
				<h1 class="service-page__h1"><?php the_title(); ?></h1>
				<div class="col-11 sm-col-8 lg-col-6 mx-auto">
					<p class="service-page__excerpt mt4">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						  the_content();
						endwhile; ?>
						<?php else: ?>
						  <?php _e('Sorry, no posts matched your criteria.'); ?>
						<?php endif; ?>
					</p>
				</div>
			</div>
			
			<?php if( have_rows('service_steps', $post_id) ): ?>
				<div class="service-page__steps center col-11 sm-col-8 lg-col-5 relative z3 mx-auto mb3">
				    <?php while( have_rows('service_steps', $post_id) ): the_row(); ?>
				    	<?php 
				    		$image_object = get_sub_field('step_image');
							$image_size = 'db-medium@2x';
							$image_url = $image_object['sizes'][$image_size];
				    	?>
				    	<div class="service-page__line"></div>
				    	<div class="service-page__step px2">
							<svg class="service-page__step-icon">
				                <use xlink:href="#hypotes-icon"/>
				            </svg>
					    	<span class="service-page__step-title mt2 mb3 center block"><?php the_sub_field('step_title'); ?></span>
					    	<div class="service-page__img-container">
					    		<img class="service-page__img" src="<?php echo $image_url; ?>" alt="">
							</div>
							<div class="clearfix left-align">
								<div class="col col-12 sm-col-5">
									<h2 class="step__title"><?php the_sub_field('step_intro'); ?></h2>
								</div>
								<div class="col col-12 sm-col-7">
									<p class="mt3 mb4"><?php the_sub_field('step_excerpt'); ?></p>
								</div>
							</div>
						</div>
				    <?php endwhile; ?>
				    	<div class="service-page__line"></div>
				    	<div class="cta center">
							<h2 class="cta__title">Redo att sätta igång?</h2>
							<h3 class="cta__contact mt3 mb3"><a href="mailto:info@digitaliseringsbyran.se">info@digitaliseringsbyran.se</a></h3>
						</div>
						<div class="service-page__line"></div>
					</div>
				</div>
			<?php endif; ?>

			<div class="post clearfix">
				<div class="post__date-section col col-2 sm-col-1 md-col-1">
					<span class="post__day block"><?php echo get_the_date('d', $more_id); ?></span>
					<span class="post__month block"><?php echo get_the_date('M', $more_id); ?></span>
				</div>
				<div class="post__content-section col col-11 sm-col-5 md-col-4">
					<?php 
						$categories = get_the_category($more_id);
						$category = esc_html( $categories[0]->name );
					?>
					<span class="post__category"><?php echo $category ?></span>
					<a class="post__a" href="<?php echo get_the_permalink($more_id); ?>">
						<h2 class="post__title"><?php echo get_the_title($more_id); ?></h2>
					</a>
					<p class="post__excerpt"><?php the_field('excerpt', $more_id) ?></p>	
				</div>
				<div class="post__img-section col col-12 sm-col-6 md-col-4">
					<?php 
						
						$images = get_field('gallery', $more_id);
						if ($images  && get_field('gallery_toggle')) : ?>
						<div class="post__carousel-buttons">
							<button class="post__carousel-button post__carousel-previous">←</button>
							<button class="post__carousel-button post__carousel-next">→</button>
						</div>
						<div class="post__carousel">
							<?php foreach( $images as $image ): ?>
								<img class="post__img lazyload" data-src="<?php echo $image['sizes']['db-medium@2x']; ?>" alt="">
							 <?php endforeach; ?>
						</div>

						<?php else :?>
							<div class="post__img-container">
								<img class="post__img lazyload" data-src="<?php echo get_the_post_thumbnail_url( $post->ID, 'db-medium@2x' ) ?>" alt="">
							</div>
					<?php endif ?>
				</div>
			</div>


			<div class="prototype-icon rellax" id="tshirt">
			  	<svg class="">
	                <use xlink:href="#prototype-tshirt-icon"/>
	            </svg>
			</div>
			<div class="prototype-icon rellax" id="buy" data-rellax-speed="-3">
				<svg class="">
	                <use xlink:href="#prototype-buy-icon"/>
	            </svg>
			</div>
			<div class="prototype-icon rellax" id="scrub" data-rellax-speed="-2">
				<svg class="">
	                <use xlink:href="#prototype-scrub-icon"/>
	            </svg>
			</div>



		</article>
	</main>

<?php get_footer(); ?>
