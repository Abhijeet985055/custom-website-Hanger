<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'getbowtied_icons','motion-ui','thehanger-styles','getbowtied-default-fonts' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION
add_action( 'woocommerce_before_single_product', 'cspl_change_single_product_layout' );
function cspl_change_single_product_layout() {
    // Disable the hooks so that their order can be changed.
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );

    // Put the price first.
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 5 );
    // Include the category/tags info.
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 10 );
    // Then the product short description.
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 40 );
    // Move the title to near the end.
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 50 );
    // And finally include the 'Add to cart' section.
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 60 );
}