<?php
/**
 * The template part used to display Testimonials on the homepage
 *
 * @
 */
?>
<section class="container">
    <div class="container">
        <div class="text-center">
            <!-- /////////CUSTOM FIELD///////// -->
            <h2 class="">TESTIMONIALS</h2>
        </div>
    </div>
    <div class="row">
        <!-- <div class="box effect1" style="position:absolute; top:0; z-index: 100;">Test</div> -->
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
            'post_type' => 'testimonials',
            'orderby'=>'date',
            'posts_per_page' => 6,
            'paged' => $paged
        );
        $wp_query = new WP_Query();
        $wp_query->query( $args );
        ?>
        <div class="owlone owl-carousel owl-theme">
          <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

            <div class="item card">
              <div class="card-body">
                <p class="card-text-name"><?php the_content(); ?></p>
                <h5 class="card-title"><?php the_title(); ?></h5>
            </div>

        </div>
    <?php endwhile; endif; ?>
</div>
</div>
<?php wp_reset_query(); ?>
</section>




