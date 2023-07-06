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

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

function menu_header() {
    register_nav_menu('header',__( 'Mon menu header' ));
}

add_action( 'init','menu_header');


// Ajout du lien ADMIN dans le menu 
function custom_header_menu( $items, $args ) {
    // Vérifiez si l'utilisateur connecté est un administrateur
    if ( current_user_can( 'administrator' ) ) {
        // Trouver la position du lien souhaité dans les éléments du menu
        $position = strpos( $items, '</li>', 2 ); // Indiquez ici la position souhaitée

        // Ajoutez le lien "admin" à la position trouvée
        $items = substr_replace( $items, '<li><a href="' . admin_url() . '">Admin</a></li>', $position, 0 );
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'custom_header_menu', 10, 2 );

