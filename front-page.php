<?php get_header(); ?>

<div class="container-fluid" role="main">

	<div class="row">

		<div class="col-md-12">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="page-header">
					<h1><?php the_title(); ?></h1>
				</div>

				<?php the_content(); ?>

			<?php endwhile; endif; ?>

		</div>

	</div>

</div>

<!-- Pillars of Success -->
<section class="pillars--container--cards">
	<div class="container">
		<div class="row">
			<div class="col-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Special title treatment</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Special title treatment</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Special title treatment</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Special title treatment</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Featured Retreats -->
<section class="featured--retreats--container">
	<div class="container">
		<div class="text-center">
			<h2 class="">Featured Retreats</h2>
		</div>
	</div>
	<div class="featured--retreats--cards">
		<div class="container">
			<div class="row">
				<div class="col-4 ">
					<div class="card">
						<img class="card-img-top" src="http://via.placeholder.com/700x570" alt="">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Book Retreat</a>
						</div>
					</div>
				</div>
				<!-- ./end col -->
				<div class="col-4 ">
					<div class="card">
						<img class="card-img-top" src="http://via.placeholder.com/700x570" alt="">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Book Retreat</a> <span style="display:inline-block">£100</span>
						</div>
					</div>
				</div>
				<!-- ./end col -->
				<div class="col-4 ">
					<div class="card">
						<img class="card-img-top" src="http://via.placeholder.com/700x570" alt="">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Book Retreat</a>
						</div>
					</div>
				</div>
				<!-- ./end col -->
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
