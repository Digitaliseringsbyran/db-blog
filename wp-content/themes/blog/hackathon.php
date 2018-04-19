<?php /* Template Name: Hackathon */ ?>

<?php get_header(); ?>


	<main role="main container">
		<article class="container clearfix">
			<div class="col-12 md-col-10 pt5 mt5 mb3 mx-auto px2">
				<h1 class="hackathon__h1"><?php the_title(); ?></h1>
				<div class="col col-11 sm-col-8 lg-col-6">
					<div class="article__content mt4">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						  the_content();
						endwhile; ?>
						<?php else: ?>
						  <?php _e('Sorry, no posts matched your criteria.'); ?>
						<?php endif; ?>
					</div>
					<a class="service__a" href="https://goo.gl/forms/dmlZOqO49WV9RvKD3">Anmälan</a>
				</div>
			</div>
		</article>
	</main>

<?php get_footer(); ?>
