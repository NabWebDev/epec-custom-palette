<?php
/*
Plugin Name: Custom Colors Palette by Promo EPEC
Plugin URI:https://github.com/NabWebDev/epec-custom-palette.git
Description: Un plugin d'introduction pour le développement sous WordPress
Version: 1.0
Author: Nabil
Author URI: http://votre-site.com
License: GPL2

function my_scripts () {
wp_enqueue_script ('jquery');
wp_register_style ('prefix-style', plugins_url ('mystyle.css', __FILE__));
wp_enqueue_style ('style préfixe');
}
add_action ('wp_enqueue_scripts', 'mes_scripts');

*/

function mytheme_setup_theme_supported_features() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'Brand Color 1', 'epec-custom-palette' ),
            'slug' => 'strong-magenta',
            'color' => '#6128A1',
        ),
        array(
'name' => __( 'Brand Color2', 'epec-custom-palette' ),
            'slug' => 'light-grayish-magenta',
            'color' => '#E94B59',
        ),
        array(
'name' => __( 'Very Dark Gray', 'epec-custom-palette' ),
            'slug' => 'very-light-gray',
            'color' => '#111111',
        ),
        array(
'name' => __( 'White', 'epec-custom-palette' ),
            'slug' => 'very-dark-gray',
            'color' => '#FFFFFF',
        ),
    ) );
}
 
add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );function my_scripts() {
wp_register_style( 'prefix-style', plugins_url('style.css', __FILE__) );
wp_enqueue_style( 'prefix-style' );
}
add_action('wp_enqueue_scripts','my_scripts');