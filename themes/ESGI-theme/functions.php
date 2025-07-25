<?php

function esgi_register_menus()
{
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'textdomain'),
    ));
}
add_action('init', 'esgi_register_menus');

function esgi_theme_setup()
{
    add_theme_support('menus');
}
add_action('after_setup_theme', 'esgi_theme_setup');

function esgi_enqueue_scripts()
{
    wp_enqueue_script('esgi-menu-script', get_template_directory_uri() . '/src/js/menu.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'esgi_enqueue_scripts');
function esgi_customize_register($wp_customize)
{
    $wp_customize->add_section('esgi_team_section', array(
        'title' => __('Membres de l\'équipe', 'ESGI'),
        'priority' => 30,
    ));
    for ($i = 1; $i <= 4; $i++) {
        $wp_customize->add_setting("esgi_team_member_$i", array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("esgi_team_member_$i", array(
            'label' => __('Nom du membre ' . $i, 'ESGI'),
            'section' => 'esgi_team_section',
            'type' => 'text',
        ));
        $wp_customize->add_setting("esgi_team_member_img_$i", array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "esgi_team_member_img_$i", array(
            'label' => __('Photo du membre ' . $i, 'ESGI'),
            'section' => 'esgi_team_section',
        )));

        $wp_customize->add_setting("esgi_team_member_tel_$i", array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("esgi_team_member_tel_$i", array(
            'label' => __('Téléphone du membre ' . $i, 'ESGI'),
            'section' => 'esgi_team_section',
            'type' => 'text',
        ));

        $wp_customize->add_setting("esgi_team_member_mail_$i", array(
            'default' => '',
            'sanitize_callback' => 'sanitize_email',
        ));
        $wp_customize->add_control("esgi_team_member_mail_$i", array(
            'label' => __('Email du membre ' . $i, 'ESGI'),
            'section' => 'esgi_team_section',
            'type' => 'email',
        ));
    }

    $wp_customize->add_section('esgi_partners_section', array(
        'title' => __('Logos des partenaires', 'ESGI'),
        'priority' => 31,
    ));
    for ($i = 1; $i <= 6; $i++) {
        $wp_customize->add_setting("esgi_partner_logo_$i", array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "esgi_partner_logo_$i", array(
            'label' => __('Logo partenaire ' . $i, 'ESGI'),
            'section' => 'esgi_partners_section',
        )));
    }
}
add_action('customize_register', 'esgi_customize_register');

function esgi_allow_svg_upload($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'esgi_allow_svg_upload');

function esgi_fallback_menu()
{
    echo '<ul class="esgi-menu">';
    echo '<li><a href="' . home_url() . '">Home</a></li>';
    echo '<li><a href="' . home_url() . '/about-us">About Us</a></li>';
    echo '<li><a href="' . home_url() . '/services">Services</a></li>';
    echo '<li><a href="' . home_url() . '/partners">Partners</a></li>';
    echo '<li><a href="' . home_url() . '/blog">Blog</a></li>';
    echo '<li><a href="' . home_url() . '/contacts">Contacts</a></li>';
    echo '</ul>';
}

function esgi_enqueue_fontawesome()
{
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'esgi_enqueue_fontawesome');

function esgi_create_about_page()
{
    $about_page = get_page_by_path('about-us');

    if (!$about_page) {
        $page_data = array(
            'post_title' => 'About Us',
            'post_content' => '',
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_name' => 'about-us'
        );

        wp_insert_post($page_data);
    }
}
add_action('after_setup_theme', 'esgi_create_about_page');


function esgi_create_partners_page()
{
    $partners_page = get_page_by_path('partners');

    if (!$partners_page) {
        $page_data = array(
            'post_title' => 'Partners',
            'post_content' => '',
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_name' => 'partners'
        );

        wp_insert_post($page_data);
    }
}
add_action('after_setup_theme', 'esgi_create_partners_page');

function esgi_create_services_page()
{
    $services_page = get_page_by_path('services');

    if (!$services_page) {
        $page_data = array(
            'post_title' => 'Services',
            'post_content' => '',
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_name' => 'services'
        );

        wp_insert_post($page_data);
    }
}
add_action('after_setup_theme', 'esgi_create_services_page');

function enqueue_custom_styles()
{

    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/style.css', array(), time());

    wp_enqueue_style('navigation-style', get_stylesheet_directory_uri() . '/css/navigation.css', array(), time());

    wp_enqueue_style('about-style', get_stylesheet_directory_uri() . '/css/about.css', array(), time());

    wp_enqueue_style('footer-style', get_stylesheet_directory_uri() . '/css/footer.css', array(), time());

    wp_enqueue_style('home-style', get_stylesheet_directory_uri() . '/css/home.css', array(), time());

    wp_enqueue_style('partner-style', get_stylesheet_directory_uri() . '/css/partner.css', array(), time());

    wp_enqueue_style('search-form-style', get_stylesheet_directory_uri() . '/css/search-form.css', array(), time());

    wp_enqueue_style('service-style', get_stylesheet_directory_uri() . '/css/service.css', array(), time());
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');