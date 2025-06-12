<?php
/**
 * Template Name: About Us Page
 * Template for About Us page
 */

get_header(); ?>

<main class="main-content about-page">
    <!-- Hero Section -->
    <section class="hero-section about-hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title"><?php echo esc_html(esgi_get_option('about_hero_title', 'About Our Company')); ?></h1>
                <p class="hero-subtitle"><?php echo esc_html(esgi_get_option('about_hero_subtitle', 'We are passionate about what we do')); ?></p>
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

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?php _e('Our Team', 'esgi-theme'); ?></h2>
                <p class="section-description"><?php _e('Meet the people behind our success', 'esgi-theme'); ?></p>
            </div>
            
            <div class="team-grid">
                <?php for ($i = 1; $i <= 4; $i++) : 
                    $member_name = esgi_get_option("team_member_{$i}_name", "Team Member {$i}");
                    $member_position = esgi_get_option("team_member_{$i}_position", 'Position');
                    $member_description = esgi_get_option("team_member_{$i}_description", 'Member description');
                    $member_image = esgi_get_option("team_member_{$i}_image", '');
                    
                    if ($member_name !== "Team Member {$i}" || $member_image) : ?>
                        <div class="team-member">
                            <?php if ($member_image) : ?>
                                <div class="member-image">
                                    <img src="<?php echo esc_url($member_image); ?>" alt="<?php echo esc_attr($member_name); ?>">
                                </div>
                            <?php endif; ?>
                            
                            <div class="member-info">
                                <h3 class="member-name"><?php echo esc_html($member_name); ?></h3>
                                <p class="member-position"><?php echo esc_html($member_position); ?></p>
                                <p class="member-description"><?php echo esc_html($member_description); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <!-- Values Section (using page content if available) -->
    <section class="values-section">
        <div class="container">
            <div class="values-content">
                <div class="values-grid">
                    <div class="value-item">
                        <div class="value-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3><?php _e('Innovation', 'esgi-theme'); ?></h3>
                        <p><?php _e('We constantly seek new ways to improve and innovate in everything we do.', 'esgi-theme'); ?></p>
                    </div>
                    
                    <div class="value-item">
                        <div class="value-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3><?php _e('Teamwork', 'esgi-theme'); ?></h3>
                        <p><?php _e('Collaboration and teamwork are at the heart of our success.', 'esgi-theme'); ?></p>
                    </div>
                    
                    <div class="value-item">
                        <div class="value-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h3><?php _e('Excellence', 'esgi-theme'); ?></h3>
                        <p><?php _e('We strive for excellence in every project and relationship.', 'esgi-theme'); ?></p>
                    </div>
                    
                    <div class="value-item">
                        <div class="value-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3><?php _e('Trust', 'esgi-theme'); ?></h3>
                        <p><?php _e('Building trust with our clients and partners is our priority.', 'esgi-theme'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>