<aside class="alert alert--info alert--block">
	<small>Exclusivo profesionales</small>
</aside>

<header class="banner" role="banner" id="header">

<!-- Brand -->
<div class="brand">
	<a class="brand__logo" href="<?php echo home_url(); ?>/"></a>
	<small class="brand__description"><?php bloginfo('description'); ?></small>
</div>

<!-- Collapse boton -->
<a href="#" class="responsive-menu-btn"><i class="icon-collapse"></i> Menu</a>

  <nav class="navbar" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'sf-menu nav--fit'));
        endif;
      ?>
  </nav>


  <!-- <div class="sello" data-0="opacity: 1;" data-200="opacity: 0;"
    ><p>Exclusivo profesionales</p></div> -->

</header>