<?php
/* This is the template for all Single Retreats */
get_header();

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<!-- HERO IMAGE
		================================================== -->
		<div  class="global--hero scroll" data-type="background" data-speed="5" style="background: url(<?php the_field('hero_background'); ?>)no-repeat center center fixed;">
			<div class="intro center-block standard">
				<?php the_custom_logo(); ?>
				<h1><?php the_title(); ?></h1>
				<p><?php the_field('strapline'); ?></p>
				<a href="/" class="btn">
					Book Retreat
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
					<div class="card shadow-sm">
						<?php the_field('location'); ?>
					</div>
				</div>
				<div class="col-4 text-center">
					<div class="card shadow-sm">
						<?php the_field('date'); ?>
					</div>
				</div>
				<div class="col-4 text-center">
					<div class="card shadow-sm">
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
		<section class="container-fluid" >
			<div class="row">
				<div class="owltwo owl-carousel owl-theme">
					<?php if( have_rows('slider') ): ?>
						<?php while( have_rows('slider') ): the_row(); $image = get_sub_field('slide_image'); ?>
							<div class="item">
								<div class="row">
									<div class="col-12">
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" class="img-fluid rounded">
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
				<h2 class="text-center ">What's included?</h2>
				<!-- Grid row -->
				<div class="row ">
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
										<div class="mb-3">
											<div class="d-flex justify-content-between">
												<i class="fas fa-square"></i>
												<div class="col-11 pl-0 mb-3">
													<p><?php the_sub_field('list_items'); ?></p>
												</div>

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

						<div class="row">
							<?php if( have_rows('highlights') ): while ( have_rows('highlights') ) : the_row(); ?>
								<div class="col-4">
									<div class="card">
										<div class="card-body">
											<h5 class="card-title "><?php the_sub_field('highlight_title');?></h5>
											<p class="card-text"><?php the_sub_field('highlight_summary');?></p>
										</div>
									</div>
								</div>
							<?php endwhile; endif; ?>
						</div>
					</div>
				</section>

				<!-- Room -->
				<section class="retreat--rooms">
					<!-- /////ACF THE TITLE -->
					<h2 class="text-center ">Available Rooms</h2>
					<div class="container">
						<div class="row">
							<div class="owlthree owl-carousel owl-theme card">
								<div class="item">
									<div class="row">
										<div class="col-4">
											<img class="img-fluid rounded" src="http://localhost/wp-content/uploads/2018/08/hotel__room1.jpg" alt="">
										</div>
										<div class="col-8 d-flex align-items-center">

											<div class="container">
												<h2>Twin Room</h2>
												<p class="price">From £800 per person</p>
												<div class="col">
													<ul class="list-group list-group-flush d-flex justify-content-start">
														<li class="list-group-item d-flex justify-content-start"><i class="fas fa-square"></i> Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio</li>
														<li class="list-group-item d-flex justify-content-start"><i class="fas fa-square"></i> Dapibus ac facilisis in</li>
														<li class="list-group-item d-flex justify-content-start"><i class="fas fa-square"></i>Morbi leo risus</li>

													</ul>

												</div>
											</div>
										</div>
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
			</section>

			<!-- Flights -->
			<section class="retreat--flights">
				<!-- /////ACF THE TITLE -->
				<h2 class="text-center ">Recommended Flights</h2>
				<div class="container">
					<div class="col-12">
						<div class="row d-flex justify-content-center">

							<div class="col-md-6 col-sm-6 d-flex justify-content-end">

								<ul class="depart list-inline">

									<li class="list-inline-item align-top text-center" >
										<p class="badge badge-pill badge-warning"><strong>LGW</strong></p>
										<p>London Gatwick</p>
										<p>06:05AM</p>
									</li>
									<li class="list-inline-item">
										<i class="fas fa-plane-departure li-middle"></i>
									</li>
									<li class="list-inline-item align-top text-center">
										<p class="badge badge-pill badge-warning"><strong>PVK</strong></p>
										<p>London Gatwick</p>
										<p>06:05AM</p>
									</li>
								</ul>
							</div>
							<div class="col-md-6 col-sm-6 d-flex justify-content-start">
								<ul class="depart list-inline">
									<li class="list-inline-item align-top text-center" >
										<p class="badge badge-pill badge-warning"><strong>LGW</strong></p>
										<p>London Gatwick</p>
										<p>06:05AM</p>
									</li>
									<li class="list-inline-item ">
										<i class="fas fa-plane-arrival li-middle"></i>
									</li>
									<li class="list-inline-item align-top text-center">
										<p class="badge badge-pill badge-warning"><strong>PVK</strong></p>
										<p>London Gatwick</p>
										<p>06:05AM</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

			<?php get_template_part('content','testimonials'); ?>



		<?php endwhile; endif; ?>

		<?php get_footer(); ?>
