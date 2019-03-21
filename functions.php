<?php
/**
 * Created by PhpStorm.
 * User: aleks
 * Date: 14.03.2019
 * Time: 15:29
 */

if ( ! function_exists( 'project_center_iot_setup' ) ) {
    function project_center_iot_setup() {
        add_theme_support( 'custom-logo', [
            'height'      => 50,
            'width'       => 50,
            'flex-width'  => false,
            'flex-height' => false
        ] );

        add_filter( 'get_custom_logo', 'change_logo_link_class' );
        function change_logo_link_class( $html ) {
            return str_replace( 'custom-logo-link', 'custom-logo-link navbar-brand', $html );
        }

        register_nav_menus( [
            'main-menu' => 'Главное меню'
        ] );

        add_filter( 'nav_menu_css_class', 'filter_main_nav_menu_css_classes', 10, 4 );
        function filter_main_nav_menu_css_classes( $classes, $item, $args ) {
            if ( $args->theme_location === 'main-menu' ) {
                $classes = [
                    'nav-link'
                ];

                if ( $item->current ) {
                    $classes[] = 'active';
                }
            }

            return $classes;
        }

        add_filter( 'nav_menu_link_attributes', 'filter_main_nav_menu_link_attributes', 10, 4 );
        function filter_main_nav_menu_link_attributes( $attrs, $item, $args ) {
            if ( $args->theme_location === 'main-menu' ) {
                $attrs['class'] = 'nav-link';
            }

            return $attrs;
        }
    }
}
add_action( 'after_setup_theme', 'project_center_iot_setup' );

function project_center_iot_scripts() {
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js' );
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' );
    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', [
        'jquery',
        'popper'
    ] );

    wp_enqueue_style('main', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'project_center_iot_scripts' );
