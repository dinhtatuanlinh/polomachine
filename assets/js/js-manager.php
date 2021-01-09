<?php
add_action( 'wp_enqueue_scripts', 'dttl_register_js');
function dttl_register_js(){
    $jsUrl = get_template_directory_uri() . '/assets/js';
    wp_register_script('dttl_jquery', $jsUrl . '/libs/jquery-3.5.1.min.js', array(), '1.0', true);
    wp_enqueue_script('dttl_jquery');
    wp_register_script('dttl_swiper-bundle', $jsUrl . '/libs/swiper-bundle.min.js', array( 'jquery' ), '1.0', true);
    wp_enqueue_script('dttl_swiper-bundle');
    wp_register_script('dttl_main', $jsUrl . '/main.js', array(), '1.0', true);
    wp_enqueue_script('dttl_main');
    wp_register_script('dttl_lazysizes', $jsUrl . '/lazysizes.min.js', array(), '1.0', true);
    wp_enqueue_script('dttl_lazysizes');
    wp_register_script('dttl_jsmain_min', $jsUrl . '/jsmain.min.js', array(), '1.0', true);
    wp_enqueue_script('dttl_jsmain_min');
}
?>