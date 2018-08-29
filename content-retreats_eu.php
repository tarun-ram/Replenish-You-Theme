<?php
/**
 * The template part used to display UK Retreats
 *
 * @
 */
?>

<?php
global $wp_query, $paged;

if( get_query_var('paged') ) {
    $paged = get_query_var('paged');
}else if ( get_query_var('page') ) {
    $paged = get_query_var('page');
}else{
    $paged = 1;
}

$wp_query = null;
$args = array(
    'post_type' => 'retreats',
    'orderby'=>'date',
    'category_name' => 'europe',
    'paged' => $paged
);
$wp_query = new WP_Query();
$wp_query->query( $args );
?>

<section name="page-anchor">
    <div class="container">
        <div class="text-center">
            <h2 class=""><?php single_cat_title(); ?></h2>
        </div>
    </div>
    <div class="featured--retreats home scroll" data-type="background" data-speed="5">
        <div class="container">
            <div class="row">

                <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                    <div class="col-4">
                        <div class="card">
                            <?php if ( has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                                    <?php the_post_thumbnail('', array(
                                        'class' => 'card-img-top')); ?>
                                    </a>
                                <?php endif; ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <p class="card-text location"><i class="fas fa-map-marker-alt"></i>
                                        <?php the_field('location'); ?>
                                    </p>
                                    <p class="card-text date"><i class="far fa-calendar-alt"></i>
                                        <?php the_field('date'); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>">
                                        <button class="btn">Book Retreat</button>
                                    </a>
                                    <span><?php the_field('price'); ?></span>
                                </div>
                            </div>
                        </div><!-- end col -->
                    <?php endwhile; endif; ?>
                </div>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </section>
