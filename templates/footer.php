<footer class="content-info" role="contentinfo">
           
	<aside>
		<ul class="info-adicional">
			<li class="info-adicional__item muestras">
				<a href="/solicitud-de-muestras" class="muestras">
				&#x2B22; Contacto. Solicitud de Información y Muestras	
				</a>
			</li>
			<li class="info-adicional__item add">
			   <a href="http://www.maderlim.com" target="_blank" class="muestras">
			   &#x2B22; Maderlim</a>
			</li>
		</ul>
	</aside>

	<footer class="content-info" rel="author"> 
		<small>
			<?php bloginfo('name'); ?>
			<?php echo date('Y'); ?>
		</small>
	<?php edit_post_link('&oplus; Editar ') ?>&sdot;
	<?php wp_loginout(); ?> &sdot; <a href="http://sergiofores.net" target="_blank"><i class="icon-logo-mazizo"></i></a>
	</footer>

</footer>

	<?php //dynamic_sidebar('sidebar-footer'); ?>		
	<?php //get_search_form(); ?>
<?php wp_footer(); ?>