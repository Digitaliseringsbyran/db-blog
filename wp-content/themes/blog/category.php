<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<?php 
				$categories = get_the_category();
				$category_id = $categories[0]->cat_ID; 
			?>
			
			<div class="category__header py5">
				<h1><?php the_category(); ?></h1>
			</div>
			

			<section class="category__grid clearfix mxn2">
				<?php global $post;
					$args = array('category' => $category_id );

					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<div class="col col-sm-12 sm-col-6 md-col-4 px2">
						<article class="card inline-block">
							<div class="card__img-container">
								<img src="<?php the_post_thumbnail_url( 'card-thumbnail' ); ?>" alt="" class="card__img">
							</div>
							<h4 class="card__title my2"><?php the_title();?></h4>
							<a class="card__link" href="<?php the_permalink(); ?>">Läs mer</a>
						</article>
					</div>
				<?php endforeach; 
				wp_reset_postdata();?>
			</section>
			

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
