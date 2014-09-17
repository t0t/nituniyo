<header class="banner" role="banner" id="header" 
data-0="height: 150px;"
data-100="height: 55px;"
>
  

    <a class="logo" href="<?php echo home_url(); ?>/">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo FKR" class="logo-img"
      data-0="width: 150px; height: auto;"
      data-150="width: 75px; height: auto;">
    </a>

    <h2 class="slogan"><?php //bloginfo('description'); ?></h2>
    <div class="sello" data-0="top: 20px; opacity: 1;" data-200="top: -20px; opacity: 0;"
    ><p>Exclusivo profesionales</p></div>
  
</header>

<a class="responsive-menu-btn">
    <i class="icon-collapse"></i>
  </a>


  <nav class="nav" role="navigation" 
  data-0="top: 150px;"
  data-150="top: 0px;"
  >
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'sf-menu'));
        endif;
      ?>
  </nav>