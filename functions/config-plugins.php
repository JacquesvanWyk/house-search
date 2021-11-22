<?php

require_once get_template_directory() . '/inc/class-ms-plugin-activation.php';

add_action( 'house-search_register', 'ms_register_required_plugins' );

function ms_register_required_plugins() {
    $plugins = array(
        'name' 				=> 'Advance Custom Fields', // The plugin name
        'slug' 				=> 'advanced-custom-fields-pro', // The plugin slug (typically the folder name)
        'required' 			=> true, // If false, the plugin is only 'recommended' instead of required
        'source'   			=> get_stylesheet_directory() . '/inc/plugins/advanced-custom-fields-pro.zip', // The plugin source
        'force_activation' 	=> true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
        'force_deactivation'=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
    );

    $config = array(
        'id'           => 'ms',                 // Unique ID for hashing notices for multiple instances of MS.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.

    );

    tgmpa( $plugins, $config );
}