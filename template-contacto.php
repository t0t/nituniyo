<?php
/*
Template Name: Contacto
*/
?>
<!-- Cargame los scrips de wpcf7 solo en esta pagina -->
<!-- http://contactform7.com/loading-javascript-and-stylesheet-only-when-it-is-necessary/ -->
<?php
    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
        wpcf7_enqueue_scripts();
    }
 
    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
        wpcf7_enqueue_styles();
    }
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php //get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div class="formulario">
    <!-- formulario y muestras -->
    <?php echo do_shortcode('[contact-form-7 id="80" title="Contact form 1"]'); ?>
    
    <!-- personas de contacto -->
    <div class="formulario__contacto">
        <dl>
        <dt>Noelia Requena</dt>
        <dd>+ 34 607471777</dd>
        <dd><a href="mailto:noeliarequena@gmail.com" class="btn btn--primary">noeliarequena@gmail.com</a></dd>
        </dl>
        
    </div>
</div>