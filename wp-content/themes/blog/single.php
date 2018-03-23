<?php get_header(); ?>

	<main role="main container">
	<!-- section -->
	<article class="article container clearfix">
		<div class="col-12 sm-col-11 md-col-10 mx-auto">
			<div class="col col-12 sm-col-10 lg-col-5">
				<div class="article__intro-section col col-11 sm-col-10">
					<?php 
						$categories = get_the_category();
						$category = esc_html( $categories[0]->name );
					?>
					<span class="post__category"><?php echo $category ?></span>
					<h1 class="article__h1"><?php the_title(); ?></h1>
					<p class="article__excerpt"><?php the_field('excerpt') ?></p>	
				</div>
				<div class="col col-12 article__img-container mt4">
					<img class="article__img lazyload" data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'db-medium'); ?>" alt="">
				</div>
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
	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
