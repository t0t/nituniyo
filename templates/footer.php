<footer class="content-info" role="contentinfo">
           
	<aside>


	</aside>


	<footer rel="author"> 
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