<?php

/**
 * Plugin Name: Modal Block ZW
 * Plugin URI: https://#
 * Description: This is a Gutenberg block modal / popup plugin
 * Author: Gladkov Denis
 * Version: 1.1.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 *
 * @package CGB
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path(__FILE__) . 'src/init.php';