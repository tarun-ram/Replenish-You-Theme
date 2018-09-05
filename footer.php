

<!-- Footer -->
<footer>

  <!-- Footer Elements -->
  <div class="container mb-4 footer--social">

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a href="" class="btn-fb mx-1">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="" class="btn-tw mx-1">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="" class="btn-insta mx-1">
          <i class="fab fa-instagram"></i>
        </a>
      </li>

    </ul>
    <!-- Social buttons -->
  </div>
  <!-- Footer Elements -->



  <!-- Footer Links -->
  <div class="container text-center text-md-left footer--content">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Replenish You</h5>

        <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
        adipisicing elit.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="mt-3 mb-4">Links</h5>

        <?php
        wp_nav_menu( array(

          'theme_location'  => 'footer',
          'container'       => '',
          'container_class' => '',
          'menu_id'         => '',
          'menu_class'      => 'list-unstyled',
          'fallback_cb'     => '',
          'walker'          => new WP_Bootstrap_Navwalker(),

        ) );
        ?>


      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="mt-3 mb-4">Links</h5>

        <?php
        wp_nav_menu( array(

          'theme_location'  => 'footer',
          'container'       => '',
          'container_class' => '',
          'menu_id'         => '',
          'menu_class'      => 'list-unstyled',
          'fallback_cb'     => '',
          'walker'          => new WP_Bootstrap_Navwalker(),

        ) );
        ?>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <hr>

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
    <p><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?></p>
    <p>Website: Tarun Ram</p>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->



<?php wp_footer(); ?>

</body>
</html>
