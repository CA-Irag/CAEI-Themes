//WP Customize Scripts
;(function () {
	/**
	 * Run function when customizer is ready.
	 */
	wp.customize.bind('ready', function () {
		wp.customize.control('cto_header_background_type_control', function (control) {
			/**
			 * Run function on setting change of control.
			 */
			control.setting.bind(function (value) {
				switch (value) {
					/**
					 * The select was switched to the hide option.
					 */
					case 'Plain':
						/**
						 * Deactivate the conditional control.
						 */
						wp.customize.control('cto_header_background_color_control').activate();
						wp.customize.control('cto_header_background_ggolor_one_control').deactivate();
						wp.customize.control('cto_header_background_ggolor_two_control').deactivate();
						break;
					/**
					 * The select was switched to »show«.
					 */
					case 'Gradient':
						/**
						 * Activate the conditional control.
						 */
						wp.customize.control('cto_header_background_color_control').deactivate();
						wp.customize.control('cto_header_background_ggolor_one_control').activate();
						wp.customize.control('cto_header_background_ggolor_two_control').activate();
						break;
				}
			});
		});
	});
})();