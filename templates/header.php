<header class="banner" role="banner" id="header">
  
<a class="logo" href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Logo FKR" class="logo-img"></a>



  <nav class="nav" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'sf-menu nav--fit'));
        endif;
      ?>
      <a href="#" class="responsive-menu-btn"><i class="icon-collapse"></i></a>
  </nav>


  <div class="sello" data-0="opacity: 1;" data-200="opacity: 0;"
    ><p>Exclusivo profesionales</p></div>

</header>