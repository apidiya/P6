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

function menu() {
    register_nav_menu('header',__( 'header' ));
    register_nav_menu('footer',__( 'footer' ));
}

add_action( 'init','menu');

// Ajouter un hook au menu de navigation
add_filter( 'wp_nav_menu_items', 'ajouter_lien_admin', 10, 2 );

function ajouter_lien_admin( $items, $args ) {
    // Vérifie si l'utilisateur est connecté 
    if ( is_user_logged_in() && $args->theme_location == 'header') {
        // Crée le lien vers l'administration de WordPress        
        $lien_admin = '<li class="adminmenu"><a href="' . admin_url() . '">Admin</a></li>';
        // Ajoute le lien au menu
        $items .= $lien_admin;
    }
    return $items;
}

// supprime les balises p ajoutées par CF7
add_filter('wpcf7_autop_or_not', '__return_false');