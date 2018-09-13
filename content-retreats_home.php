<?php
/**
 * The template part used to display Retreats on the homepage
 *
 * @
 */
?>


<section class="featured--retreats">
    <div class="row no-gutters">
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
            'posts_per_page' => 3,
            'paged' => $paged
        );
        $wp_query = new WP_Query();
        $wp_query->query( $args );
        ?>

        <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
            <div class="col-md-4">


                <div class="card d-flex justify-content-center align-self-center img-gradient">

                    <?php if ( has_post_thumbnail()) : ?>

                        <?php the_post_thumbnail('', array(
                            'class' => 'card-img-top')); ?>



                        <?php endif; ?>
                        <div class="card-body align-self-center text-center">
                            <h2 class="card-title"><?php the_title(); ?></h2>
                            <p class="card-text location"><i class="fas fa-map-marker-alt"></i>
                                <?php the_field('location'); ?>
                            </p>
                            <p class="card-text date"><i class="far fa-calendar-alt"></i>
                                <?php the_field('date'); ?>
                            </p>
                            <hr>
                            <a href="<?php the_permalink(); ?>" class="btn btn-gold mt-3">
                                Book Retreat from <?php the_field('price'); ?>
                            </a>

                        </div>

                    </div>

                </div><!-- end col -->
            <?php endwhile; endif; ?>
        </div>
        <?php wp_reset_query(); ?>
    </section>

