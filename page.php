<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/page', 'header'); ?>
  <h2><?php the_field('h3'); ?></h2>
  <section><?php get_template_part('templates/content', 'page'); ?></section>

<?php endwhile; ?>

<?php //echo do_shortcode('[gallery link="file" columns="3"]'); ?>
