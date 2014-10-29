<aside>
    <ul class="idiomas">
        <li class="idiomas__item">
            <a href="#">ES</a>
        </li>
        <li class="idiomas__item">
            <a href="#">EN</a>
        </li>
    </ul>
</aside>

<header class="banner" role="banner" id="header">

<!-- Brand -->
<div class="brand">
	<a class="brand__logo" href="<?php echo home_url(); ?>/"></a>
	<small class="brand__description"><?php bloginfo('description'); ?></small>
</div>


<nav class="navbar" role="navigation">
  <input type="checkbox" id="trigger">
  <label for="trigger">Menu</label>

    <?php
      if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => ''));
        endif;
      ?>
</nav>

</header>