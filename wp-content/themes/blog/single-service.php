<?php /* Template Name: Service Template */ ?>


<?php get_header(); ?>

	<main role="main">
		<article class="service-page clearfix">
			<div class="service-page__intro col-12 sm-col-11 md-col-10 lg-col-8 pt5 mt4 mb3 mx-auto center px2">
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
				<div class="service-page__steps center col-11 sm-col-6 lg-col-4 mx-auto">
				    <?php while( have_rows('service_steps', $post_id) ): the_row(); ?>
				    	<?php 
				    		$image_object = get_sub_field('step_image');
							$image_size = 'db-square@2x';
							$image_url = $image_object['sizes'][$image_size];
				    	?>
				    	<div class="service-page__line"></div>
				    	<div class="service-page__step center px2">
					    	<span class="service-page__step-title mt2 mb3 center block"><?php the_sub_field('step_title'); ?></span>
					    	<div class="service-page__img-container">
					    		<img class="service-page__img" src="<?php echo $image_url; ?>" alt="">
							</div>
							<h2 class="mt2 mb2"><?php the_sub_field('step_intro'); ?></h2>
							<p class="mb3"><?php the_sub_field('step_excerpt'); ?></p>
						</div>
				    <?php endwhile; ?>
				</div>
			<?php endif; ?>




		</article>
	</main>

<?php get_footer(); ?>
