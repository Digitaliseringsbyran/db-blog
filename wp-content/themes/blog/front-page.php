<?php get_header(); ?>

	<main class="main" role="main">

		<section class="post-section">
			<?php $args = array(
				'category'         => '',
				'orderby'          => 'date',
				'order'            => 'DESC',
				'post_type'        => 'post',
				'post_status'      => 'publish',
				'suppress_filters' => true 
			);
			$posts_array = get_posts( $args ); ?>
			
			<?php foreach ( $posts_array as $post ) : ?>

				<div class="post clearfix">
					<div class="post__date-section col col-2 sm-col-1">
						<span class="post__day block"><?php echo get_the_date('d'); ?></span>
						<span class="post__month block"><?php echo get_the_date('M'); ?></span>
					</div>
					<div class="post__content-section col col-10 sm-col-4">
						<h2 class="post__title"><?php the_title(); ?></h2>
						<p class="post__excerpt">This is an excerpt</p>	
					</div>
					<div class="post__img-section col col-12 sm-col-4">
						<div class="post__img-container">
							<img class="post__img" src="" alt="">
						</div>
					</div>
				</div>
				
			<?php endforeach ?>
		</section>


	</main>

<?php get_footer(); ?>
