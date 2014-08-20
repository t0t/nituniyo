<header class="banner" role="banner">

        <h1 class="brand">

        <i class="icon-logo-t0theme"></i>
        <a href="<?php echo esc_url(home_url('/')); ?>/"><?php bloginfo('name'); ?></a>

        </h1>

            
        <a href="#" class="toggle-nav btn btn-success"><i class="icon-collapse"></i></a>

        <nav class="nav" role="navigation">
            <?php
            if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => ''));
            endif;
            ?>
        </nav>


       <!-- <a href="#" class="toggle-nav">
       <i class="icon-close"></i></a> -->
       

    <!-- collapse btn -->
   <!--  <div class="mobile">
      <a href="#"><i class="icon-collapse"></i></a>
    </div> -->

</header>