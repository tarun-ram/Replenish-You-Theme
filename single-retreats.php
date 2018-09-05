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



	<!-- INTRO
		================================================== -->
		<section class="retreat--intro" role="main" name="page-anchor">
			<div class="container">
				<div class="row">
					<div class="col-6 text-center">

						<h3>LOCATION</h3>
						<p><i class="fas fa-map-marker-alt"></i> <?php the_field('location'); ?></p>
						<hr>

					</div>
					<div class="col-6 text-center">
						<h3>DATES</h3>
						<p><i class="far fa-calendar-alt"></i> <?php the_field('date'); ?></p>
						<hr>

					</div>

				</div>

				<div class="row">
					<div class="col-12 the-content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</section><!-- .end -->

	<!-- GALLERY
		================================================== -->
		<section class="retreat--gallery">
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

	<!-- WHAT'S INCLUDED
		================================================== -->
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
										<img class="img-fluid shadow" src="<?php the_sub_field('top_image'); ?>" alt="Sample image">
									</div>
								</div>

								<!-- List item -->
								<?php if( have_rows('text_repeater') ): ?>
									<?php while( have_rows('text_repeater') ): the_row(); ?>
										<div class="mb-3">
											<div class="d-flex justify-content-between">
												<i class="fas fa-circle"></i>
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

	<!-- HIGHLIGHTS
		================================================== -->
		<section class="retreat--highlights">
			<div class="container">

				<div class="row">
					<?php if( have_rows('highlights') ): while ( have_rows('highlights') ) : the_row(); ?>
						<div class="col-4">
							<div class="card">
								<div class="card-body">
									<h2 class="card-title "><?php the_sub_field('highlight_title');?></h2>
									<p class="card-text"><?php the_sub_field('highlight_summary');?></p>
								</div>
							</div>
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</section>

	<!-- ROOMS
		================================================== -->
		<section class="retreat--rooms">
			<div class="container">
				<div class="row">
					<div class="owlthree owl-carousel owl-theme card">
						<div class="item">
							<div class="row">
								<div class="col-4">
									<img class="img-fluid" src="http://localhost/wp-content/uploads/2018/08/hotel__room1.jpg" alt="">
								</div>
								<div class="col-8 d-flex align-items-center">

									<div class="container">
										<h2>Twin Room</h2>
										<p class="price">From £800 per person</p>
										<div class="col">
											<ul class="list-group list-group-flush d-flex justify-content-start">
												<li class="list-group-item d-flex justify-content-start"><i class="fas fa-circle"></i> Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio</li>
												<li class="list-group-item d-flex justify-content-start"><i class="fas fa-circle"></i> Dapibus ac facilisis in</li>
												<li class="list-group-item d-flex justify-content-start"><i class="fas fa-circle"></i>Morbi leo risus</li>

											</ul>

										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="row">
								<div class="col-4">
									<img class="img-fluid" src="http://localhost/wp-content/uploads/2018/08/hotel__room1.jpg" alt="">
								</div>
								<div class="col-8 d-flex align-items-center">

									<div class="container">
										<h2>Twin Room</h2>
										<p class="price">From £800 per person</p>
										<div class="col">
											<ul class="list-group list-group-flush d-flex justify-content-start">
												<li class="list-group-item d-flex justify-content-start"><i class="fas fa-circle"></i> Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio</li>
												<li class="list-group-item d-flex justify-content-start"><i class="fas fa-circle"></i> Dapibus ac facilisis in</li>
												<li class="list-group-item d-flex justify-content-start"><i class="fas fa-circle"></i>Morbi leo risus</li>

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

	<!-- FLIGHTS
		================================================== -->
		<section class="retreat--flights">
			<div class="row no-gutters ">
				<div class="col-5 justify-content-center align-self-center">
					<div class="p-3 ml-5 mr-5 left--col">
						<h2>RECOMMENDED FLIGHTS</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
					</div>
				</div>

				<div class="col-7">
					<div class="row d-flex justify-content-center">

						<div class="col-md-12 col-sm-12 d-flex justify-content-center">

							<ul class="flight--info list-inline text-center">
								<li class="list-inline-item align-top text-center" >
									<p class="badge badge-pill badge-warning"><strong>LGW</strong></p>
									<p>London Gatwick</p>
									<p>06:05AM</p>
								</li>
								<li class="list-inline-item">
									<i class="fas fa-plane li-middle"></i>
								</li>
								<li class="list-inline-item align-top text-center">
									<p class="badge badge-pill badge-warning"><strong>PVK</strong></p>
									<p>London Gatwick</p>
									<p>06:05AM</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-md-12 col-sm-12 d-flex justify-content-center">
							<ul class="flight--info list-inline text-center">
								<li class="list-inline-item align-top text-center" >
									<p class="badge badge-pill badge-warning"><strong>LGW</strong></p>
									<p>London Gatwick</p>
									<p>06:05AM</p>
								</li>
								<li class="list-inline-item ">
									<i class="fas fa-plane fa-flip-horizontal li-middle"></i>
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

	<!-- TESTIMONIALS PART
		================================================== -->

		<?php get_template_part('content','testimonials'); ?>



	<?php endwhile; endif; ?>

	<?php get_footer(); ?>
