<header class="banner" role="banner">

    <div class="row">
        <h1 class="brand col__12">
        <i class="icon-logo-mazizo"></i>
        <a href="<?php echo esc_url(home_url('/')); ?>/"><?php bloginfo('name'); ?></a>
        </h1>
    </div>

    <div id="site-menu">
       <a href="#" class="toggle-nav">
       <i class="icon-close"></i></a>
       
        <nav class="nav" role="navigation">
            <?php
            if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
            endif;
            ?>
        </nav>

     </div>
    
     <a href="#" class="toggle-nav btn btn-lg btn-success" id="big-sexy">
     <i class="icon-collapse"></i></a>

    <!-- collapse btn -->
   <!--  <div class="mobile">
      <a href="#"><i class="icon-collapse"></i></a>
    </div> -->

</header>