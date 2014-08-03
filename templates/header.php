<header class="banner" role="banner">
  <div class="row">
      <h1 class="brand col__12"><i class="icon-logo-mazizo"></i> <a href="<?php echo esc_url(home_url('/')); ?>/"><?php bloginfo('name'); ?></a>
      </h1>
  </div>
    
    <!-- collapse btn -->
    <div class="mobile">
      <a href="#"><i class="icon-collapse"></i></a>
    </div>

    <nav class="nav" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
        endif;
      ?>
    </nav>

</header>
