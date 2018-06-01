<div class="cto_admin_general_main">
	<div class="cto_admin_general_col1">
		<h1 class="cto_admin_general_title">General Options</h1>
		<form method="post" action="options.php">
			<?php settings_fields('cto-group-settings'); ?>
			<div class="cto_admin_general">
			<?php do_settings_sections('cto_caei'); ?>
			</div>
			<?php submit_button(); ?>
		</form>
		<?php settings_errors(); ?>
	</div>
	<div class="cto_admin_general_col2">
		<h1 class="cto_admin_preview_title">Live View</h1>
		<div class="preview-wrapper">
	    	<iframe id="cto_webprev" src="<?php echo get_site_url(); ?>"  allowfullscreen="" frameborder="0"></iframe>
	    </div>
	</div>
</div>




