<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('|', true, 'right'); ?><?php echo get_bloginfo('name'); ?></title>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <header class='clearfix'>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <nav id="mySidenav" class="sidenav" role="navigation">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <?php
            wp_nav_menu( array(
              'theme_location'  => 'primary',
              'depth'           => 2,
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker(),
            ) );

            ?>
          </nav>
          <span onclick="openNav()" class="navbar-menu">MENU</span>
        </div>

      </div>
    </nav>

  </header>
