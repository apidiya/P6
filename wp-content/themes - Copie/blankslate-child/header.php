<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?> <!-- Recuperation des plugins  -->
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <div class="logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="logo planty">
        </a>
    </div>
    <!-- affichage du menu et définition de son emplacement -->
    <nav><?php  
    wp_nav_menu( array( 
        'theme_location' => 'header') ); 
    ?> 
    </nav>
</header>
    