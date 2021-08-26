<?php
/**
 * Fired when the plugin is uninstalled.
 */
// If uninstall not called from WordPress, then exit
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}


global $wpdb;
$mjc_plugin_game_settings = $wpdb->prefix . 'mjc_plugin_game_settings';
$mjc_plugin_user = $wpdb->prefix . 'mjc_plugin_user';


$wpdb->query("DROP TABLE IF EXISTS $mjc_plugin_game_settings");
$wpdb->query("DROP TABLE IF EXISTS $mjc_plugin_user");



  
