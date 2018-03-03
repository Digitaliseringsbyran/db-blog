<?php 
/*
Template Name: Landing Page
Template Post Type: post, page, event
*/

?>


<?php get_header(); ?>

	<main class="front-page" role="main">
		<!-- section -->
		<section class="">
			


		</section>


		<section>
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
			</div>
		</section>

	</main>

<?php get_footer(); ?>
