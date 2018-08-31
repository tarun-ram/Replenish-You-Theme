

<!-- Footer -->
<footer class="pt-4">

  <!-- Footer Elements -->
  <div class="container">

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

  <div class="container">
    <?php
    wp_nav_menu( array(

      'theme_location'  => 'footer',
      'menu_class'      => 'list-unstyled list-inline text-center',
      'fallback_cb'     => '',
      'walker'          => new WP_Bootstrap_Navwalker(),

    ) );
    ?>

  </div>

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
    <p><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?></p>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<?php wp_footer(); ?>

</body>
</html>
