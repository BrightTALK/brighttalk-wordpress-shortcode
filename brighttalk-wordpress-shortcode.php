<?php
/**
 * @link              http://example.com
 * @since             1.0.0
 * @package           BrightTALK-shortcode 
 *
 * @wordpress-plugin
 * Plugin Name:       BrightTALK Short Code 
 * Plugin URI:        https://developer.brighttalk.com/plugins/wordpress/brighttalk-short-code/ 
 * Description:       Adds the BrightTALK shortcode allowing BrightTALK players to be used in Wordpress 
 * Version:           1.0.0
 * Author:            BrightTALK 
 * Author URI:        http://developer.brighttalk.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function brighttalk_wordpress_shortcode($atts, $content=null){
  $brighttalk_shortcode_atts = shortcode_atts( array(
    'title' => 'BrightTALK Integration Channel',
    'description' => 'Tips and best practice regarding integrating the BrightTALK platform with your website',
    'language' => 'en-US',
    'channelid' => '1293',
  ), $atts );

  $embed = '<h1>ChannelId %d</h1><script src="https://www.brighttalk.com/clients/js/player-embed/player-embed.js" class="jsBrightTALKEmbed">{ "channelId" : %d, "displayMode" : "channelList", "height" : "2000px", "width" : "100%%", "environment" : "prod", "language" : "en-US",  "noFlash" : false, "track" : "", "inlineContent" : true }</script>';

  $op = sprintf($embed, $brighttalk_shortcode_atts['channelid'], $brighttalk_shortcode_atts['channelid']);
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

