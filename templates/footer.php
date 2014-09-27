<footer id="pie" class="content-info" role="contentinfo">
 
	<?php //dynamic_sidebar('sidebar-footer'); ?>		
	<?php //get_search_form(); ?>



		<aside class="creditos" rel="author"> 
			<small>
				 <?php bloginfo('name'); ?>
				 <?php echo date('Y'); ?>
			</small>
			 <?php edit_post_link('&oplus; Editar ') ?>&sdot;
			 <?php wp_loginout(); ?> &sdot; <a href="http://sergiofores.net" target="_blank"><i class="icon-logo-mazizo"></i></a>
		</aside>

		<!-- Botones adicionales -->
        <div class="absolute-wrap">
            <a href="/solicitud-de-muestras" class="muestras">
            <span>
            &#x2B22;
			<span>
			Contacto. Solicitud de Información y Muestras	
			</span>
            </span>
            </a>
        </div>
        <div class="absolute-wrap">
             <a href="http://www.maderlim.com" target="_blank" class="muestras">
            <span>
            &#x2B22;
			<span>
			Maderlim	
			</span>
            </span>
            </a>
        </div>
</footer>

<?php wp_footer(); ?>