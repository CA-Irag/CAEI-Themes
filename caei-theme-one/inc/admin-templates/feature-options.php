<h1>Feature Options</h1>
<hr>
<form method="post" action="options.php">
	<?php settings_fields('cto-feature-settings'); ?>
	<?php do_settings_sections('cto_caei_features'); ?>
	<?php submit_button(); ?>
</form>
<?php settings_errors(); ?>