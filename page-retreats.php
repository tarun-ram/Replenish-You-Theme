<?php
/* Template Name: Retreats Template */

$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

get_header();

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<!-- HERO IMAGE
		================================================== -->
		<div  class="global--hero scroll" data-type="background" data-speed="5" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat center center fixed;" role="main">

			<div class="intro center-block standard">
				<?php the_custom_logo(); ?>
				<h1><?php the_title(); ?></h1>
				<p><?php the_field('strapline'); ?></p>
				<a href="#page-anchor" class="btn btn-blue mt-3">
					<span>Find a retreat</span>
				</a>
			</div>

			<div class="arrow-down text-center">
				<a href="#page-anchor" class="btn-arrow-down">
					<i class="fas fa-angle-down"></i>
				</a>
			</div>

		</div><!-- .end -->

		<?php get_template_part('content','retreats_all'); ?>

	<?php endwhile; endif; ?>

	<?php get_footer(); ?>
