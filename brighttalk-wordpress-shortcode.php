<?php
/**
 * @wordpress-plugin
 * Plugin Name:       BrightTALK Wordpress Short Code 
 * Plugin URI:        https://developer.brighttalk.com/integration/wordpress/brighttalk-short-code/brighttalk_wordpress_shortcode.zip
 * Description:       Add the BrightTALK media player shortcode to to simplify embedding BrightTALK content into your site.
 * Version:           0.0.2
 * Author:            Dorian Logan 
 * Author URI:        http://developer.brighttalk.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       brighttalk-wordpress-shortcode 
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function brighttalk_wordpress_shortcode($atts, $content=null){
  $brighttalk_shortcode_atts = shortcode_atts( array(
    'channelid' => '1166',
    'commid' => '0',
  ), $atts );

  $embed = '<script src="https://www.brighttalk.com/clients/js/player-embed/player-embed.js" class="jsBrightTALKEmbed">{ "channelId" : %d, "commId" : %d, "displayMode" : "channelList", "height" : "2000px", "width" : "100%%", "environment" : "prod", "language" : "en-US",  "noFlash" : false, "track" : "", "inlineContent" : true }</script>';

  $op = sprintf($embed, $brighttalk_shortcode_atts['channelid'], $brighttalk_shortcode_atts['commid']);
  return $op;
}

add_shortcode('BrightTALK', 'brighttalk_wordpress_shortcode');


function activate_brighttalk_wordpress_shortcode() {
}

function deactivate_brighttalk_wordpress_shortcode() {
}

function run_brighttalk_wordpress_shortcode() {
}

register_activation_hook( __FILE__, 'activate_brighttalk_wordpress_shortcode' );
register_deactivation_hook( __FILE__, 'deactivate_brighttalk_wordpress_shortcode' );

run_brighttalk_wordpress_shortcode();

