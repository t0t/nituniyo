<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>

<?php //echo do_shortcode('[gallery link="file" columns="3"]'); ?>
