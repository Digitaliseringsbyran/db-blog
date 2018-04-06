<?php get_header(); ?>


	<?php 
		$post_id = 51;
		$queried_post = get_post($post_id);
		$field = get_field('service_steps', $post_id);
		$post_image = get_the_post_thumbnail_url($post_id);
	?>

	<main role="main container">
	<!-- section -->
	<article class="article container clearfix">
		<div class="col-12 sm-col-11 md-col-10 mx-auto">
			<div class="col col-12 sm-col-8 lg-col-5">
				<div class="article__intro-section col col-11 sm-col-10">
					<?php 
						$categories = get_the_category();
						$category = esc_html( $categories[0]->name );
					?>
					<span class="post__category"><?php echo $category ?></span>
					<h1 class="article__h1"><?php the_title(); ?></h1>
					<p class="article__excerpt"><?php the_field('excerpt') ?></p>	
				</div>
			</div>

			<div class="col col-12 sm-col-10 md-col-8 mt4">
				<?php 		
					$images = get_field('gallery');
					if ($images  && get_field('gallery_toggle')) : ?>
					<div class="article__carousel">
						<?php foreach( $images as $image ): ?>
							<div class="article__img-container">
								<img class="article__img lazyload" data-src="<?php echo $image['sizes']['db-medium@2x']; ?>" alt="">
							</div>
						 <?php endforeach; ?>
					</div>
					<?php else :?>
						<div class="article__img-container">
							<img class="post__img lazyload" data-src="<?php echo get_the_post_thumbnail_url( $post->ID, 'db-medium@2x' ) ?>" alt="">
						</div>
				<?php endif ?>
			</div>
			<div class="article__content col col-12 sm-col-9 lg-col-7">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				  the_content();
				endwhile; ?>
				<?php else: ?>
				  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
			</div>
	
		</div>
	</article>
	<section class="post-section">
		<div class="service clearfix ">
			<div class="service__content-section col col-11 sm-col-5 md-col-4">
				<span class="post__category"><?php echo $queried_post->post_title; ?></span>
				<h2 class="service__h2"><?php the_field('service_intro', $post_id); ?></h2>
				<p class="service__p"><?php echo $queried_post->post_content; ?></p>
				<a class="service__a mt4" href="<?php echo get_permalink($post_id); ?>">Läs mer</a>
			</div>
			<div class="service__img-section col col-12 sm-col-6 md-col-4">
				<?php if( have_rows('service_steps', $post_id) ): ?>
					<div class="service__carousel">
					    <?php while( have_rows('service_steps', $post_id) ): the_row(); ?>
					    	<?php 

					    		$image_object = get_sub_field('step_image');
								$image_size = 'db-square@2x';
								$image_url = $image_object['sizes'][$image_size];
					    	?>
					    	<div class="service__img-container">
					    		<img class="service__img" src="<?php echo $image_url; ?>" alt="">
								<div class="service__inner">
									<span class="service__step"><?php the_sub_field('step_title'); ?></span>
									<span class="service__arrow">
									</span>
									<svg class="service__arrow-head icon">
						                <use xlink:href="#arrow-head"/>
						            </svg>
								</div>
							</div>
					    <?php endwhile; ?>
					    <div class="service__img-container relative">
					    	<a class="service__a absolute-center z3" href="<?php echo get_permalink($post_id); ?>">Läs mer</a>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
