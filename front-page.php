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
			<a href="" class="btn btn-blue mt-3">
				<i class="fas fa-play-circle"></i> <span>Watch Video</span>
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


<!-- PILLARS OF SUCCESS
	================================================== -->
	<section id="page-anchor" class="pillars--success">
		<div class="row no-gutters ">
			<div class="col-5 justify-content-center align-self-center">
				<div class="p-3 ml-5 mr-5 left--col">
					<h2>PILLARS OF SUCCESS</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
				</div>
			</div>

			<div class="col-7">
				<div class="row no-gutters">
					<?php if( have_rows('pillars_of_success') ): ?>
						<?php while ( have_rows('pillars_of_success') ) : the_row(); ?>
							<div class="col-6">
								<div class="card" style="background: url(<?php the_sub_field('background_image'); ?>)no-repeat center center;">
									<div class="card-body text-center">
										<h3 class="card-title"><?php the_sub_field('headline'); ?></h3>
										<hr>
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
	</section>


	<!-- Featured Retreats -->
	<?php get_template_part('content','retreats_home'); ?>

	<?php get_template_part('content','testimonials'); ?>


<?php endwhile; endif; ?>

<?php get_footer(); ?>


