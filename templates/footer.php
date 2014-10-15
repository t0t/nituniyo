<footer class="content-info" role="contentinfo">
           
	<aside>
		<ul class="info-adicional">
			<li class="info-adicional__item">
				<a href="/solicitud-de-muestras" class="contacto h1">
				<i class="icon-call37"></i> Contacto</a>
			</li>
			<li class="info-adicional__item">
			   <a href="http://www.maderlim.com" target="_blank" class="muestras" alt="Lasures Maderlim" title="Lasures Maderlim"></a>
			</li>
		</ul>
	</aside>

	<footer rel="author"> 
		<small>
			<?php bloginfo('name'); ?>

Ctra. Morella, km. 0,7
12500 Vinaroz, Castellón, España

			<?php echo date('Y'); ?>
		</small>
	<?php edit_post_link('&oplus; Editar ') ?>&sdot;
	<?php wp_loginout(); ?> &sdot; <a href="http://sergiofores.net" target="_blank"><i class="icon-logo-mazizo"></i></a>
	</footer>

</footer>

	<?php //dynamic_sidebar('sidebar-footer'); ?>		
	<?php //get_search_form(); ?>
<?php wp_footer(); ?>