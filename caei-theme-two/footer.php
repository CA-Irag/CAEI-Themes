	<footer class="footer">
		<div class="footer-main container">
			<div class="footer footer-top text-center">
				<div class="nav nav-footer">
				<?php if ( has_nav_menu( 'footer_menu' ) ){ wp_nav_menu(array('theme_location'=>'footer_menu')); } ?>
				</div>
				<div class="footer-top-widget-area">

				</div>
			</div>			
		</div>
		<div class="footer footer-bottom container text-center">
			<?php  bloginfo('name'); ?>
			<span>&copy; by Tonyo Irag. All rights reserved.</span>				
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>