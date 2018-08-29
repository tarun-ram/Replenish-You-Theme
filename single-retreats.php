<?php
/* This is the template for all Single Retreats */
get_header();

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<!-- Hero image -->
	<div  class="global--hero scroll" data-type="background" data-speed="5" style="background: url(<?php the_field('hero_background'); ?>)no-repeat center center fixed;">
		<div class="intro center-block standard">
			<?php the_custom_logo(); ?>
			<h1><?php the_title(); ?></h1>
			<p><?php the_field('strapline'); ?></p>
			<a href="/">
				<button class="btn">Book Retreat</button>
			</a>
		</div>
		<div class="arrow-down text-center">
			<a href="#page-anchor" class="btn-arrow-down">
				<i class="fas fa-angle-down"></i>
			</a>
		</div>
	</div><!-- .end -->



	<!-- Retreat details -->
	<section class="container" name="page-anchor">
		<div class="row">
			<div class="col-4 text-center">
				<div class="card">
					<?php the_field('location'); ?>
				</div>
			</div>
			<div class="col-4 text-center">
				<div class="card">
					<?php the_field('date'); ?>
				</div>
			</div>
			<div class="col-4 text-center">
				<div class="card">
					<?php the_field('price'); ?>
				</div>
			</div>
		</div>
	</section><!-- .end -->

	<!-- Intro -->
	<section class="container" role="main">
		<div class="row">
			<div class="col-12 the-content">
				<?php the_content(); ?>
			</div>
		</div>
	</section><!-- .end -->

	<!-- Retreat Gallery -->
	<section class="container-fluid">
		<div class="row">
			<div class="owltwo owl-carousel owl-theme">
				<?php if( have_rows('slider') ): ?>
					<?php while( have_rows('slider') ): the_row(); $image = get_sub_field('slide_image'); ?>
						<div class="item">
							<div class="row">
								<div class="col-12">
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" class="img-fluid">
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section><!-- .end -->
	<!-- What's included? -->
	<section class="retreat--included">
		<div class="container">
			<!-- Section heading -->
			<h2 class="text-center ">Whats included?</h2>
			<!-- Grid row -->
			<div class="row">
				<!-- Grid column -->
				<?php if( have_rows('whats_included') ): ?>
					<?php while( have_rows('whats_included') ): the_row(); ?>
						<div class="col-lg-4 col-md-12 mb-lg-0 mb-5">

							<!-- Column Image -->
							<div class="single-block mb-3">
								<div class="mb-4">
									<img class="img-fluid rounded shadow" src="<?php the_sub_field('top_image'); ?>" alt="Sample image">
								</div>
							</div>

							<!-- List item -->
							<?php if( have_rows('text_repeater') ): ?>
								<?php while( have_rows('text_repeater') ): the_row(); ?>
									<div class="mb-3 card">
										<div class="card-body d-flex justify-content-between">
											<div class="col-11 pl-0 mb-3">
												<p><?php the_sub_field('list_items'); ?></p>
											</div>
											<i class="fas fa-check"></i>
										</div>
									</div>
								<?php endwhile; endif; ?>

							</div><!-- .end -->
						<?php endwhile; endif; ?>
					</div>
				</div>
			</section><!-- .end section -->

			<!-- Hightlights -->
			<section class="retreat--highlights">
				<div class="container">
					<!-- /////ACF THE TITLE -->
					<h2 class="text-center ">Highlights</h2>
					<div class="row">
						<?php if( have_rows('highlights') ): while ( have_rows('highlights') ) : the_row(); ?>
							<div class="col-4">
								<div class="card ">
									<div class="card-body">
										<h5 class="card-title"><?php the_sub_field('highlight_title');?></h5>
										<p class="card-text"><?php the_sub_field('highlight_summary');?></p>
									</div>
								</div>
							</div>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</section>

			<section class="container">
				<!-- /////ACF THE TITLE -->
				<h2 class="text-center ">Available Rooms</h2>
				<div class="row">
					<div class="owlthree owl-carousel owl-theme">
						<div class="item">
							<div class="row">
								<div class="col-6">
									<div class="item"><img src="https://via.placeholder.com/800x800" alt=""></div>
								</div>
								<div class="col-6">
									lorem ipsum
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-6">
									<div class="item"><img src="https://via.placeholder.com/800x800" alt=""></div>
								</div>
								<div class="col-6">
									lorem ipsum
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-6">
									<div class="item"><img src="https://via.placeholder.com/800x800" alt=""></div>
								</div>
								<div class="col-6">
									lorem ipsum
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>



		<?php endwhile; endif; ?>

		<?php get_footer(); ?>
