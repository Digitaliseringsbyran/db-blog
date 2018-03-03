<?php get_header(); ?>

	<main class="main" role="main">
		<!-- section -->
		<section class="front-page__hero clearfix">
			

			<h2>Test</h2>
		</section>


		<section class="post-section clearfix py5">
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
				<h2><?php the_title(); ?></h2>
			<?php endforeach ?>
		</section>







	</main>

<?php get_footer(); ?>
