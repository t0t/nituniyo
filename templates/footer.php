<footer id="pie" class="content-info" role="contentinfo">
 
	<?php //dynamic_sidebar('sidebar-footer'); ?>		
	<?php //get_search_form(); ?>

           
		<!-- Botones adicionales -->
            <a href="/solicitud-de-muestras" class="btn btn--primary"
            data-100-bottom="transform: translate(0px,0px);"
            data-bottom="transform: translate(100px,0px;"
            >
            &#x2B22; Contacto. Solicitud de Información y Muestras	
            </a>

            <a href="http://www.maderlim.com" target="_blank" class="btn btn--primary"
			data-100-bottom="transform: translate(100px,0px);"
            data-bottom="transform: translate(0px,-50px;"
            >
            &#x2B22; Maderlim	
            </a>


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