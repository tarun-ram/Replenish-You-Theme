<?php get_header(); ?>



<section class="container">
	<div class="row">
		<div class="card-columns">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="card">
					<?php the_post_thumbnail(); ?>
					<div class="card-body">
						<h5 class="card-title"><?php the_title(); ?></h5>
						<p class="card-text"><?php the_content(); ?></p>
						<p class="card-text"><small class="text-muted"><?php the_date(); ?></small></p>
					</div>
				</div>
			<?php endwhile; endif; ?>

		</div>
	</div>
</div>
</section>


<?php get_footer(); ?>


