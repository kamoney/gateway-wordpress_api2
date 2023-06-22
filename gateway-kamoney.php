<?php
/*
Plugin Name: Gateway Kamoney
Plugin URI: https://www.kamoney.com.br
Description: Plugin WooCommerce que permite pagamentos usando criptomoeda via Kamoney. Este plugin requer uma conta Kamoney (https://www.kamoney.com.br).
Version: 2.0
*/

defined( 'ABSPATH' ) || exit;

// Plugin constants.
//define( 'WC_KAMONEY_PLUGIN_FILE', __FILE__ );

if ( ! class_exists( 'WC_Gateway_Kamoney' ) ) {
	include_once dirname( __FILE__ ) . '/includes/class-wc-kamoney.php';
	add_action( 'plugins_loaded', array( 'WC_Gateway_Kamoney', 'init' ) );
}
