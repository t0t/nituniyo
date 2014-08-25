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

<section class="bg1">
    <div class="col__6">
    <!-- formularios de contacto -->
    <?php echo do_shortcode('[contact-form-7 id="46" title="Formulario de contacto 1"]'); ?>
    </div>
    <div class="col__6">
        <address>
            <h3>Company Name</h3>
            Dirección postal<br>
            Edificio, Calle 4, Piso 2º<br>
            08512, Ciudad<br>
            Spain
        </address>
        <a href="" class="btn btn--primary"><i class="icon-location"></i> Más info</a>
    </div>
</section>
    <div>
    <!-- http://wphostreviews.com/mappress-documentation -->
    <?php echo do_shortcode('[mappress mapid="1" width="100%"]'); ?>
    </div>

<?php //echo do_shortcode('[child-pages depth="1"]' ); ?>