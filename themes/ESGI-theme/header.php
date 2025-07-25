<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" />
</head>

<body <?php body_class(); ?>>

    <header class="esgi-header">
        <div class="esgi-logo">
            <a href="<?php echo home_url(); ?>" class="esgi-logo-link">
                ESGI<span class="esgi-logo-dot">.</span>
            </a>
        </div>

        <button class="menu-toggle" id="menuToggle">
            <span class="hamburger-line burger-top"></span>
            <span class="hamburger-line burger-bottom"></span>
        </button>

        <nav class="esgi-nav" id="mobileNav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'esgi-menu',
                'container' => false,
                'fallback_cb' => 'esgi_fallback_menu'
            ));
            ?>
        </nav>
    </header>