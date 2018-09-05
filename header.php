<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
  <title><?php wp_title('|', true, 'right'); ?><?php echo get_bloginfo('name'); ?></title>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
      <a class="navbar-brand" href="#"><strong></strong></a>
      <button class="navbar-toggler collapsed custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php
      wp_nav_menu([
       'menu'            => 'primary',
       'theme_location'  => 'primary',
       'container'       => 'div',
       'container_class' => 'collapse navbar-collapse',
       'container_id'    => 'navbarSupportedContent',
       'menu_id'         => '',
       'menu_class'      => 'navbar-nav ml-auto',
       'depth'           => 2,
       'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
       'walker'          => new WP_Bootstrap_Navwalker(),
     ]);
     ?>
   </nav>

 </header>
