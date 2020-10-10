<?php

/**
 * Fired during plugin activation
 *
 * @link       https://twitter.com/fransallen
 * @since      1.0.0
 *
 * @package    Umami
 * @subpackage Umami/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Umami
 * @subpackage Umami/includes
 * @author     Frans Allen
 */
class Umami_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		add_option(
            'umami',
            [
				'url' => '',
				'id'  => '',
            ]
        );
	}

}
