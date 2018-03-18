<?php
/*
 * Plugin Name: WW Remove jQuery Migrate
 * Plugin URI: https://github.com/sjinks/wp-remove-jquery-migrate
 * Description: WordPress plugin to remove jQuery Migrate from jQuery dependencies
 * Version: 1.0.0
 * Author: Volodymyr Kolesnykov
 * License: MIT
 */

defined('ASBPATH') || die();

/*
 * Add
 *
 *     define('WWRJQM_MOVE_JQUERY_TO_FOOTER', true);
 *
 * to wp-config.php to move jquery to footer
 */
defined('WWRJQM_MOVE_JQUERY_TO_FOOTER') or define('WWRJQM_MOVE_JQUERY_TO_FOOTER', false);

!is_admin() && add_filter('wp_default_scripts', function(&$scripts) {
	$data = $scripts->query('jquery');
	if (is_object($data)) {
		$data->deps = array_diff($data->deps, array('jquery-migrate'));

		if (WWRJQM_MOVE_JQUERY_TO_FOOTER) {
			$data->args = 1;

			$data = $scripts->query('jquery-core');
			if (is_object($data)) {
				$data->args = 1;
			}
		}
	}
});
