<footer class="content-info" role="contentinfo">
  
	<div class="">
    	<?php dynamic_sidebar('sidebar-footer'); ?>
	</div>

	<div class="col__12">

		<div class="col__4">
			<?php get_search_form(); ?>
		</div>

		<div class="col__4">
			<h6>
			<a class="url" href="#">
				<i class="icon-logo-t0theme"></i> <?php bloginfo('name'); ?>
			</a></h6>
			<address>
				<span class="street-address">Calle número 13</span>
				<span class="region">La Provincia</span>
				<span class="postal-code">12980</span>
				<span class="country-name">Spain</span>
				<span class="phone">+44 (0)345 345345</span>
			</address>
		</div>

		<div class="col__4">
			<h6>Redes Sociales</h6>
			<a href=""><i class="icon-facebook3"></i></a>
			<a href=""><i class="icon-twitter"></i></a>
			<a href=""><i class="icon-vimeo"></i></a>
		</div>
	</div>

	<p class="creditos" rel="author">
		 
		<small>
			<a href="http://sergiofores.net" target="_blank"><i class="icon-logo-mazizo"></i> Sergio Forés</a> => <?php bloginfo('name'); ?> 
			- <?php echo date('Y'); ?>
		</small - >
		<?php edit_post_link(' EDIT') ?>
		<?php wp_loginout(); ?>
	</p>

</footer>
<?php wp_footer(); ?>
