<?php
// Ajouter ce code dans votre fichier functions.php

// Enregistrer le menu de navigation
function esgi_register_menus() {
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'textdomain'),
    ));
}
add_action('init', 'esgi_register_menus');

// Ajouter le support des menus au thème
function esgi_theme_setup() {
    add_theme_support('menus');
}
add_action('after_setup_theme', 'esgi_theme_setup');
?>
