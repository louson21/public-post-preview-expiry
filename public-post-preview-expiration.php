<?php
/**
 * Plugin Name: Public Post Preview Expiration
 * Description: Extends the Public Post Preview plugin with custom functionality.
 * Version: 1.0.1
 * Author: Louie Sonugan
 * Author URI: https://louiesonugan.com/
 * License: GPLv2 or later
 */

// Add settings menu in the WordPress admin panel
function ppp_expiration_add_admin_menu() {
    add_options_page(
        'PPP Expiration Settings',
        'PPP Expiration',
        'manage_options',
        'ppp-expiration',
        'ppp_expiration_settings_page'
    );
}
add_action( 'admin_menu', 'ppp_expiration_add_admin_menu' );

// Create the settings page
function ppp_expiration_settings_page() {
    ?>
    <div class="wrap">
        <h1>Public Post Preview Expiration Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields( 'ppp_expiration_options' );
            do_settings_sections( 'ppp-expiration' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

// Register settings
function ppp_expiration_settings_init() {
    register_setting( 'ppp_expiration_options', 'ppp_expiration_time' );

    add_settings_section(
        'ppp_expiration_section',
        'Public Post Preview Expiration Settings',
        '__return_false',
        'ppp-expiration'
    );

    add_settings_field(
        'ppp_expiration_time',
        'Set Expiration Time (in minutes)',
        'ppp_expiration_time_field',
        'ppp-expiration',
        'ppp_expiration_section'
    );
}
add_action( 'admin_init', 'ppp_expiration_settings_init' );

// Field for expiration time
function ppp_expiration_time_field() {
    $value = get_option( 'ppp_expiration_time', 30 ); // Default to 30 minutes
    echo '<input type="number" name="ppp_expiration_time" value="' . esc_attr( $value ) . '" min="1" step="1"> minute(s)';
}

// Modify nonce expiration dynamically
function custom_ppp_nonce_life( $nonce_life ) {
    $custom_expiration = get_option( 'ppp_expiration_time', 1800 ); // Default to 30 minutes
    return (int) $custom_expiration * 60;
}
add_filter( 'ppp_nonce_life', 'custom_ppp_nonce_life' );

?>