<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
$apsp_settings = array();
$pinit_js_disable = isset( $_POST['apsp-pinit-js-disable'] ) ? sanitize_text_field($_POST['apsp-pinit-js-disable']) : 'off';
$js_enable = isset( $_POST['apsp-pinit-js'] ) ? sanitize_text_field($_POST['apsp-pinit-js']) : 'off';
$button_size = sanitize_text_field($_POST['apsp-pinterest-button-size']);
$button_shape = sanitize_text_field($_POST['apsp-pinterest-button-shape']);
//$button_color = sanitize_text_field($_POST['apsp-pinterest-rectangle-color']);
$button_lang = sanitize_text_field($_POST['apsp-pinterest-rectangle-lang']);
if( $_POST['action'] == 'apsp_save_options' ) {
    $apsp_settings['pinit_js_disable'] = $pinit_js_disable;
    $display_options = array();
    foreach ( $_POST['apsp_display_settings']['display_options'] as $key=>$value ){
        $display_options[] = sanitize_text_field($value);
    }
    $apsp_settings['display_options'] = $display_options;
    $apsp_settings['js_enabled'] = $js_enable;
    $apsp_settings['size'] = $button_size;
    $apsp_settings['shape'] = $button_shape;
    //$apsp_settings['color'] = $button_color;
    $apsp_settings['language'] = $button_lang;
    update_option( APSP_SETTINGS, $apsp_settings );
    wp_redirect(admin_url('admin.php?page=accesspress-pinterest&message=1'));
    exit();
}