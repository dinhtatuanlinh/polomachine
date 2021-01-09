<?php
add_action( 'wp_enqueue_scripts', 'dttl_register_style');
function dttl_register_style() {
    $cssUrl = get_template_directory_uri() . '/assets/css';
    wp_register_style('dttl_fonts', $cssUrl . '/fonts.css', array(), '1.0');
    wp_enqueue_style('dttl_fonts');
    wp_register_style('dttl_style_min', $cssUrl . '/style.min.css', array(), '1.0');
    wp_enqueue_style('dttl_style_min');
    wp_register_style('dttl_stylelibs_min', $cssUrl . '/stylelibs.min.css', array(), '1.0');
    wp_enqueue_style('dttl_stylelibs_min');
}
?>