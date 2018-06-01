	<footer>
		<div class="footer-main">
			<div class="footer footer-top">
				<div class="nav nav-footer">
				<?php wp_nav_menu(array('theme_location'=>'footer_menu')); ?>
				</div>
				<div class="footer-top-widget-area">

					<?php if(esc_attr(get_option( 'footer_column_number' ))=="1" || esc_attr(get_option( 'footer_column_number' ))=="") { ?>
						<div class="widget-col col-2 set1 <?php echo get_option( 'footer_text_alignment' ); ?>">
							<?php dynamic_sidebar('footer-widget-2'); ?>					
						</div>
					<?php } ?>
					<?php if(esc_attr(get_option( 'footer_column_number' ))=="2") { ?>
						<div class="widget-col col-1 set2 <?php echo get_option( 'footer_text_alignment' ); ?>">
							<?php dynamic_sidebar('footer-widget-1'); ?>
						</div>
						<div class="widget-col col-3 set2 <?php echo get_option( 'footer_text_alignment' ); ?>">
							<?php dynamic_sidebar('footer-widget-3'); ?>
						</div>
					<?php } ?>
					<?php if(esc_attr(get_option( 'footer_column_number' ))=="3") { ?>
						<div class="widget-col col-1 <?php echo get_option( 'footer_text_alignment' ); ?>">
							<?php dynamic_sidebar('footer-widget-1'); ?>
						</div>
						<div class="widget-col col-2 <?php echo get_option( 'footer_text_alignment' ); ?>">
							<?php dynamic_sidebar('footer-widget-2'); ?>
						</div>
						<div class="widget-col col-3 <?php echo get_option( 'footer_text_alignment' ); ?>">
							<?php dynamic_sidebar('footer-widget-3'); ?>
						</div>
					<?php } ?>
				</div>
			</div>			
		</div>
		<div class="footer footer-bottom">
			<?php 
				if(get_theme_mod('cto_footer_bottom_text')) echo get_theme_mod('cto_footer_bottom_text');
				else echo 'CAEI Theme One by CA Irag. All Rights Reserved.';
			?>
				
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>