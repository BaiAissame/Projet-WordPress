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

// Enqueue scripts
function esgi_enqueue_scripts() {
    wp_enqueue_script('esgi-menu-script', get_template_directory_uri() . '/src/js/menu.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'esgi_enqueue_scripts');

// Fonction de fallback pour le menu si aucun menu n'est défini
function esgi_fallback_menu() {
    echo '<ul class="esgi-menu">';
    echo '<li><a href="' . home_url() . '">Home</a></li>';
    echo '<li><a href="' . home_url() . '/about-us">About Us</a></li>';
    echo '<li><a href="' . home_url() . '/services">Services</a></li>';
    echo '<li><a href="' . home_url() . '/partners">Partners</a></li>';
    echo '<li><a href="' . home_url() . '/blog">Blog</a></li>';
    echo '<li><a href="' . home_url() . '/contacts">Contacts</a></li>';
    echo '</ul>';
}

function esgi_enqueue_fontawesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'esgi_enqueue_fontawesome');

function esgi_create_about_page() {
    $about_page = get_page_by_path('about-us');
    
    if (!$about_page) {
        $page_data = array(
            'post_title'    => 'About Us',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_name'     => 'about-us'
        );
        
        wp_insert_post($page_data);
    }
}
add_action('after_setup_theme', 'esgi_create_about_page');


function esgi_create_partners_page() {
    $partners_page = get_page_by_path('partners');
    
    if (!$partners_page) {
        $page_data = array(
            'post_title'    => 'Partners',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_name'     => 'partners'
        );
        
        wp_insert_post($page_data);
    }
}
add_action('after_setup_theme', 'esgi_create_partners_page');

function esgi_create_services_page() {
    $services_page = get_page_by_path('services');
    
    if (!$services_page) {
        $page_data = array(
            'post_title'    => 'Services',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_name'     => 'services'
        );
        
        wp_insert_post($page_data);
    }
}
add_action('after_setup_theme', 'esgi_create_services_page');

function enqueue_custom_styles() {
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/style.css', array(), time());
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');