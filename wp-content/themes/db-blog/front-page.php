<?php
/**
 * Template Name: Front Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

?>


<?php get_header(); ?>
	
	<body>
		
	</body>
	<main class="main" role="main">
		<!-- section -->
		<section class="front-page__hero clearfix">
			
			<h2>jaiosddaijosdkpaos</h2>
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

				<div class="post clearfix py2">
					<div class="col col-2">
						08
					</div>
					<div class="col col-3">
						<div class="post__img-container">
							<img class="post__img" src="" alt="">
						</div>
					</div>
					<div class="col col-4">
						<h2><?php the_title(); ?></h2>
					</div>
				</div>
			<?php endforeach ?>
			
		</section>

	</main>

<?php get_footer(); ?>
