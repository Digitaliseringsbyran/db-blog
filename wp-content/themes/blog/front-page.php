<?php get_header(); ?>

<?php


	$clients = get_field('service_steps', $post_id);

	$post_id = 51;
	$queried_post = get_post($post_id);
	$field = get_field('service_steps', $post_id);
	$post_image = get_the_post_thumbnail_url($post_id);


	$hiring_id = 104;


	$about_id = 75;
	$about_post = get_post($about_id);
	$field = get_field('people', $about_id);
?>

	<main class="main container" role="main">

		<div class="intro clearfix">
			<div class="col-12 sm-col-9 md-col-8 lg-col-6 mb4 mt5">
				<h1 class="intro__h1">Vi hjälper företag att <a class="intro__a" href="<?php echo get_permalink($post_id); ?>">effektivt testa idéer</a>, lansera digitala tjänster snabbare och optimera sin digitala affär.</h1>
				<a href="<?php echo get_permalink($hiring_id); ?>">
					<div class="hiring">
						<svg class="hiring__badge" viewBox="-18 -18 120 120" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						    <defs>
						        <path d="M41.5,83 C18.5801829,83 0,64.4198171 0,41.5 C0,18.5801829 18.5801829,0 41.5,0 C64.4198171,0 83,18.5801829 83,41.5 C83,64.4198171 64.4198171,83 41.5,83 L41.5,83 Z" id="text-path"></path>
						    </defs>
						    <use xlink:href="#text-path" fill="none"></use>
						    <text class="hiring__text">
						        <textPath xlink:href="#text-path">DIGITALISERINGSBYRÅN IS HIRING •</textPath>
						    </text>
						</svg>
						<svg class="hiring__smile" width="86px" height="86px" viewBox="0 0 86 86" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						        <g transform="translate(27.000000, 25.000000)" fill="#000000" fill-rule="nonzero">
						            <path class="hiring__eye" d="M7.999968,6.2833 C7.99998203,7.94975371 7.57856423,9.54796134 6.82842319,10.7263298 C6.07828215,11.9046983 5.06086662,12.5667001 4,12.5667 C2.93913338,12.5667001 1.92171785,11.9046983 1.17157681,10.7263298 C0.421435772,9.54796134 1.79695098e-05,7.94975371 3.2e-05,6.2833 C3.79417788e-05,2.81312637 1.79088291,-1.73522494e-07 4,0 C6.20911709,-1.73522494e-07 7.99996206,2.81312637 7.999968,6.2833 Z" id="Shape"></path>
						            <path class="hiring__eye" d="M31.999968,6.2833 C31.999982,7.94975371 31.5785642,9.54796134 30.8284232,10.7263298 C30.0782821,11.9046983 29.0608666,12.5667001 28,12.5667 C26.9391334,12.5667001 25.9217179,11.9046983 25.1715768,10.7263298 C24.4214358,9.54796134 24.000018,7.94975371 24.000032,6.2833 C24.0000379,2.81312637 25.7908829,-1.73522494e-07 28,0 C30.2091171,-1.73522494e-07 31.9999621,2.81312637 31.999968,6.2833 Z" id="Shape"></path>
						        </g>
						        <path class="hiring__mouth" d="M20.363281,50.7578 C23.998888,59.3978 32.752785,65.5 43,65.5 C53.247215,65.5 62.001112,59.3978 65.636719,50.7578" id="Shape" stroke-width="5" stroke-linecap="round"></path>
						    </g>
						</svg>
					</div>
				</a>
			</div>
			<div class="intro-service__section col col-12 sm-col-10 md-col-5">
				<span class="intro__span">Vi gör det genom att:</span>
				<ul class="intro__li-list">
					<li class="intro-service">
						<div class="intro-service__content">
							<span class="intro-service__title has-link">Prototypa idéer på 2 dagar</span>
							<span class="intro-service__description block">Låt dina utmaningar och idéer bli testbara prototyper på 2 dagar</span>
						</div>
					</li>

					<li class="intro-service">
						<div class="intro-service__content">
							<span class="intro-service__title">Lansera pilotprojekt inom 4 veckor</span>
							<span class="intro-service__description block">Skapa värde för dina kunder tidigare och lansera en fungerande pilot-version inom 4 veckor</span>
						</div>
					</li>

					<li class="intro-service">
						<div class="intro-service__content">
							<span class="intro-service__title">Förbättra i snabba utvecklingscykler</span>
							<span class="intro-service__description block">Tolka data, förbättra och uppdatera er digitala affär med våra utvecklingssprintar</span>
						</div>
					</li>
				</ul>
			</div>
			<div class="intro__li-section col col-12 sm-col-6 md-col-4">
				<?php if( have_rows('clients') ): ?>
						<span class="intro__span">Vi har hjälpt organisationer som:</span>
							<ul class="intro__li-list">
							    <?php while ( have_rows('clients') ) : the_row(); ?>
									<li class="intro__li"><?php the_sub_field('client'); ?></li>
							    <?php endwhile; ?>
					    	</ul>
						</div>
					<?php else : ?>
				<?php endif; ?>
			<div class="intro__li-section col col-12 sm-col-6 md-col-3">
				<span class="intro__span">Du hittar oss på:</span>
				<ul class="intro__li-list">
					<li class="intro__li"><a class="intro__a" href="https://www.google.se/maps/place/Digitalisation+Office/@57.7003244,11.9530262,17z/data=!3m1!4b1!4m5!3m4!1s0x464ff369c35bc371:0xc32820b70d95f99f!8m2!3d57.7003216!4d11.9552149?hl=en">Norra Allégatan 5</a></li>
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
			$posts_array = get_posts( $args ); 
			$total = count($posts_array);

			?>
			
			<?php foreach ( $posts_array as $index => $post ) : ?>
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
										<div class="post__img-container">
											<img class="post__img lazyload" data-src="<?php echo $image['sizes']['db-medium@2x']; ?>" alt="">
										</div>
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
		<section class="people-section">
			<div class="people clearfix ">
				<div class="people__content-section col col-11 sm-col-5 md-col-5">
					<span class="post__category">Om oss</span>
					<h2 class="people__h2"><?php echo $about_post->post_title; ?></h2>
					<p class="people__p"><?php echo $about_post->post_content; ?></p>
				</div>
				<div class="people__img-section mt4 col col-12">
					<?php if( have_rows('people', $about_id) ): ?>
						<div class="people__carousel">
						    <?php while( have_rows('people', $about_id) ): the_row(); ?>
						    	<?php 

						    		$image_object = get_sub_field('image');
									$image_size = 'db-tall';
									$image_url = $image_object['sizes'][$image_size];
						    	?>
						    	<div class="people__item mr3">
							    	<div class="people__img-container">
							    		<img class="people__img lazyload" src="<?php echo $image_url; ?>" alt="">
									</div>
									<div class="people__inner">
										<span class="people__name block mb2"><?php the_sub_field('name'); ?></span>
										<span class="people__role block mt2"><?php the_sub_field('role'); ?></span>
										<span class="block mt3">
											<a class="people__contact" href="tel:<?php the_sub_field('phone'); ?>">Telefon</a>
											<a class="people__contact ml2" href="mailto:<?php the_sub_field('email'); ?>">Email</a>
										</span>
									</div>
								</div>
						    <?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>

	</main>
<?php get_footer(); ?>

