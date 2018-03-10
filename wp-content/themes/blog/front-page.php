<?php get_header(); ?>

	<main class="main" role="main">

		<div class="intro clearfix">
			<div class="col col-12 sm-col-7 md-col-5">
				<p class="intro__p">Välkommen till Digitaliseringsbyrån i Göteborg.</p>
				<p class="intro__p">Vi hjälper företag att effektivt testa idéer, lansera digitala tjänster snabbare och optimera sin digitala affär.</p>
				<span class="intro__span">Vi gör det genom att:</span>

				<div class="intro-service">
					<a class="intro-service__a inline-flex" href="">
						<span class="intro-service__number mr2">01.</span>
						<div class="intro-service__content">
							<span class="intro-service__title">Prototypa istället för att snacka</span>
							<span class="intro-service__description block">Låt dina utmaningar och idéer bli testbara prototyper på 2 dagar</span>
						</div>
					</a>
				</div>

				<div class="intro-service">
					<a class="intro-service__a inline-flex" href="">
						<span class="intro-service__number mr2">02.</span>
						<div class="intro-service__content">
							<span class="intro-service__title">Fokusera på kärnan och lansera snabbare</span>
							<span class="intro-service__description block">Skapa värde för dina kunder tidigare och lansera en beta-version inom 4 veckor</span>
						</div>
					</a>
				</div>

				<div class="intro-service">
					<a class="intro-service__a inline-flex" href="">
						<span class="intro-service__number mr2">03.</span>
						<div class="intro-service__content">
							<span class="intro-service__title">Utgå från data istället för åsikt</span>
							<span class="intro-service__description block">Tolka data, förbättra och uppdatera er digitala affär med våra utvecklingssprintar</span>
						</div>
					</a>
				</div>
			</div>
		</div>



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
							<?php 
								$categories = get_the_category();
								$category = esc_html( $categories[0]->name );
							?>
							<span class="post__category"><?php echo $category ?></span>
							<h2 class="post__title"><?php the_title(); ?></h2>
							<p class="post__excerpt"><?php the_field('excerpt') ?></p>	
						</div>
						<div class="post__img-section col col-12 sm-col-4">
							<?php 
								
								$images = get_field('gallery');
								if ($images) : ?>

								<div class="post__carousel">
									<?php foreach( $images as $image ): ?>
										<img class="post__img lazyload" data-src="<?php echo $image['sizes']['db-medium']; ?>" alt="">
									 <?php endforeach; ?>
								</div>

								<?php else :?>
									<div class="post__img-container">
										<img class="post__img lazyload" data-src="<?php echo get_the_post_thumbnail_url( $post->ID, 'db-medium' ) ?>" alt="">
									</div>
							<?php endif ?>
						</div>
					</div>
			<?php endforeach ?>
		</section>


	</main>
<?php get_footer(); ?>

