<header class="banner" role="banner">
  

    <a class="logo" href="<?php echo home_url(); ?>/">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo FKR" class="logo-img">
    </a>

    <h2 class="slogan"><?php bloginfo('description'); ?></h2>
    <div class="sello"><p>Exclusivo profesionales</p></div>
  
</header>

<a class="responsive-menu-btn">
    <i class="icon-collapse"></i>
  </a>


  <nav class="nav" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'sf-menu'));
        endif;
      ?>
  </nav>