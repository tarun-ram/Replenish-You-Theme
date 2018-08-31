<?php
/* Template Name: Homepage */

$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

get_header();

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<!-- Hero image -->
	<div  class="global--hero scroll" data-type="background" data-speed="5" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat center center fixed;" role="main">

		<div class="intro center-block home">
			<?php the_custom_logo(); ?>
			<hr>
			<h1><?php the_title(); ?></h1>
			<p class="home"><?php the_field('strapline'); ?></p>
			<a href="" class="btn play">
				<i class="far fa-play-circle"></i> Watch Video
			</a>
			<!-- <a href="" class="text-link">
				Browse Retreats
			</a> -->
		</div>

		<div class="arrow-down text-center">
			<a href="#page-anchor" class="btn-arrow-down">
				<i class="fas fa-angle-down"></i>
			</a>
		</div>
	</div><!-- .end -->

	<!-- Pillars of Success -->
	<!-- <section id="page-anchor" class="pillars--cards">
		<div class="container">
			<div class="row">
				<?php if( have_rows('pillars_of_success') ): ?>
					<?php while ( have_rows('pillars_of_success') ) : the_row(); ?>
						<div class="col-3">
							<div class="card">
								<div class="card-body text-center">
									<?php the_sub_field('icon'); ?>
									<h5 class="card-title"><?php the_sub_field('headline'); ?></h5>
									<p class="card-text"><?php the_sub_field('summary'); ?></p>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php else : // no rows found ?>
				<?php endif; ?>
			</div>
		</div>
	</section> -->

	<section id="page-anchor" class="pillars--cards">
		<div class="">
			<div class="row no-gutters">
				<div class="col-6">
					test
				</div>
				<div class="col-6">
					<div class="row no-gutters">
						<?php if( have_rows('pillars_of_success') ): ?>
							<?php while ( have_rows('pillars_of_success') ) : the_row(); ?>
								<div class="col-6">
									<div class="card">
										<div class="card-body text-center">
											<?php the_sub_field('icon'); ?>
											<h5 class="card-title"><?php the_sub_field('headline'); ?></h5>
											<p class="card-text"><?php the_sub_field('summary'); ?></p>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						<?php else : // no rows found ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Featured Retreats -->
	<?php get_template_part('content','retreats_home'); ?>

	<?php get_template_part('content','testimonials'); ?>


<?php endwhile; endif; ?>

<?php get_footer(); ?>


