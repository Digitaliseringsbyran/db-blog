<?php /* Template Name: Service Template */ ?>


<?php get_header(); ?>

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
				<div class="service-page__steps center col-11 sm-col-8 lg-col-5 mx-auto">
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
				</div>
			<?php endif; ?>


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
