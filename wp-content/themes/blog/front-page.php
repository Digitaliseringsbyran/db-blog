<?php get_header(); ?>

<?php
	$post_id = 51;
	$queried_post = get_post($post_id);
	$field = get_field('service_steps', $post_id);
	$post_image = get_the_post_thumbnail_url($post_id);
?>

	<main class="main container" role="main">

		<div class="intro clearfix">
			<div class="col-12 sm-col-9 md-col-8 lg-col-6 mb4 mt5">
				<p class="intro__p">Vi hjälper företag att <a class="intro__a" href="<?php echo get_permalink($post_id); ?>">effektivt testa idéer</a>, <a class="intro__a" href="">lansera digitala tjänster snabbare</a> och <a class="intro__a" href="">optimera sin digitala affär</a>.</p>
			</div>
			<div class="intro-service__section col col-12 sm-col-10 md-col-5">
				<span class="intro__span">Vi gör det genom att:</span>
				<ul class="intro__li-list">
					<li class="intro-service">
						<a class="intro-service__a inline-flex" href="<?php echo get_permalink($post_id); ?>">
							<div class="intro-service__content">
								<span class="intro-service__title">Prototypa idéer på 2 dagar</span>
								<span class="intro-service__description block">Låt dina utmaningar och idéer bli testbara prototyper på 2 dagar</span>
							</div>
						</a>
					</li>

					<li class="intro-service">
						<a class="intro-service__a inline-flex" href="">
							<div class="intro-service__content">
								<span class="intro-service__title">Lansera pilotprojekt inom 4 veckor</span>
								<span class="intro-service__description block">Skapa värde för dina kunder tidigare och lansera en fungerande pilot-version inom 4 veckor</span>
							</div>
						</a>
					</li>

					<li class="intro-service">
						<a class="intro-service__a inline-flex" href="">
							<div class="intro-service__content">
								<span class="intro-service__title">Förbättra i snabba utvecklingscykler</span>
								<span class="intro-service__description block">Tolka data, förbättra och uppdatera er digitala affär med våra utvecklingssprintar</span>
							</div>
						</a>
					</li>
				</ul>
			</div>
			<div class="intro__li-section col col-12 sm-col-6 md-col-4">
				<span class="intro__span">Vi har hjälpt organisationer som:</span>
				<ul class="intro__li-list">
					<li class="intro__li">Svenskt Näringsliv AB</li>
					<li class="intro__li">Region Halland</li>
					<li class="intro__li">Riddermark Bil AB</li>
					<li class="intro__li">Marknadsföreningen i Halland</li>
					<li class="intro__li">Kristian Luuk</li>
					<li class="intro__li">Falkenbergs Näringliv AB</li>
				</ul>
			</div>
			<div class="intro__li-section col col-12 sm-col-6 md-col-3">
				<span class="intro__span">Du hittar oss:</span>
				<ul class="intro__li-list">
					<li class="intro__li"><a class="intro__a" href="">Norra Allégatan 5</a></li>
					<li class="intro__li">413 01, Göteborg</li>
					<li class="intro__li"><a class="intro__a" href="mailto:info@digitaliseringsbyran.se">info@digitaliseringsbyran.se</a></li>
					<li class="intro__li"><a class="intro__a" href="tel:0730936515">+46 730 936 515</a></li>
				</ul>
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
			
			<?php foreach ( $posts_array as $index => $post ) : ?>
					
					<?php if($index == 2 ) : ?>
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
					<?php endif; ?>

					<div class="post clearfix">
						<div class="post__date-section col col-2 sm-col-1 md-col-1">
							<span class="post__day block"><?php echo get_the_date('d'); ?></span>
							<span class="post__month block"><?php echo get_the_date('M'); ?></span>
						</div>
						<div class="post__content-section col col-11 sm-col-5 md-col-4">
							<?php 
								$categories = get_the_category();
								$category = esc_html( $categories[0]->name );
							?>
							<span class="post__category"><?php echo $category ?></span>
							<a class="post__a" href="<?php the_permalink(); ?>">
								<h2 class="post__title"><?php the_title(); ?></h2>
							</a>
							<p class="post__excerpt"><?php the_field('excerpt') ?></p>	
						</div>
						<div class="post__img-section col col-12 sm-col-6 md-col-4">
							<?php 
								
								$images = get_field('gallery');
								if ($images  && get_field('gallery_toggle')) : ?>
								<div class="post__carousel-buttons">
									<button class="post__carousel-button post__carousel-previous">←</button>
									<button class="post__carousel-button post__carousel-next">→</button>
								</div>
								<div class="post__carousel">
									<?php foreach( $images as $image ): ?>
										<img class="post__img lazyload" data-src="<?php echo $image['sizes']['db-medium@2x']; ?>" alt="">
									 <?php endforeach; ?>
								</div>

								<?php else :?>
									<div class="post__img-container">
										<img class="post__img lazyload" data-src="<?php echo get_the_post_thumbnail_url( $post->ID, 'db-medium@2x' ) ?>" alt="">
									</div>
							<?php endif ?>
						</div>
					</div>
			<?php endforeach ?>
		</section>


	</main>
<?php get_footer(); ?>

