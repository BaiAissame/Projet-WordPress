<?php
/**
 * Template Name: Partners Page
 * Template for Partners page
 */

get_header(); ?>

<main class="main-content partners-page">
    <!-- Hero Section -->
    <section class="hero-section partners-hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title"><?php echo esc_html(esgi_get_option('partners_hero_title', 'Our Partners')); ?></h1>
                <p class="hero-subtitle"><?php _e('We work with amazing companies and organizations', 'esgi-theme'); ?></p>
            </div>
        </div>
    </section>

    <!-- Page Content -->
    <?php while (have_posts()) : the_post(); ?>
        <section class="page-content-section">
            <div class="container">
                <div class="content-wrapper">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="featured-image">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="page-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>

    <!-- Partners Grid -->
    <section class="partners-grid-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Trusted by Industry Leaders', 'esgi-theme'); ?></h2>
                <p class="section-description"><?php _e('We are proud to collaborate with these exceptional organizations', 'esgi-theme'); ?></p>
            </div>
            
            <div class="partners-grid">
                <?php for ($i = 1; $i <= 6; $i++) : 
                    $partner_logo = esgi_get_option("partner_{$i}_logo", '');
                    $partner_name = esgi_get_option("partner_{$i}_name", "Partner {$i}");
                    
                    if ($partner_logo || $partner_name !== "Partner {$i}") : ?>
                        <div class="partner-item">
                            <?php if ($partner_logo) : ?>
                                <div class="partner-logo">
                                    <img src="<?php echo esc_