<footer id="pie" class="content-info" role="contentinfo">
 
	<?php //dynamic_sidebar('sidebar-footer'); ?>		
	<?php //get_search_form(); ?>

	<div class="exagono link_de_pagina">

        <div class="muestras ficha1">
            <a href="/solicitud-de-muestras">Contacto. Solicitud de Información y Muestras</a>
        </div>
        <div class="add ficha2">
            <a href="http://www.maderlim.com" target="_blank">Maderlim</a>
        </div>

    </div>

		<aside class="creditos" rel="author"> 
			<small>
				 <?php bloginfo('name'); ?>
				 <?php echo date('Y'); ?>
			</small>
			 <?php edit_post_link('&oplus; Editar ') ?>&sdot;
			 <?php wp_loginout(); ?> &sdot; <a href="http://sergiofores.net" target="_blank"><i class="icon-logo-mazizo"></i></a>
		</aside>

</footer>

<?php wp_footer(); ?>