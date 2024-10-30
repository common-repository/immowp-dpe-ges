<?php
/**
 * Plugin Name:       ImmoWP DPE-GES
 * Description:       Afficher les étiquettes DPE/GES, les estimations énergétiques et les géorisques d'un bien immobilier.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           1.0.2
 * Author:            ImmoWP
 * Author URI: 		  https://www.immowp.fr
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       immowp-dpe-ges
 *
 * @package           create-block
 */

if ( ! defined( 'IMMOWPDPEGES_PLUGIN_FILE' ) ) {
	define( 'IMMOWPDPEGES_PLUGIN_FILE', __FILE__ );
}

/**
 * Settings Page
 */
require_once plugin_dir_path( IMMOWPDPEGES_PLUGIN_FILE ) . 'settings-page.php';

/**
 * Shortcode
 */
require_once plugin_dir_path( IMMOWPDPEGES_PLUGIN_FILE ) . 'shortcode/shortcode.php';
