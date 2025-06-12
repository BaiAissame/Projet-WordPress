<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3><?php _e('About Us', 'esgi-theme'); ?></h3>
                <p><?php _e('We are a passionate team dedicated to creating exceptional digital experiences. Our expertise spans web development, design, and digital marketing.', 'esgi-theme'); ?></p>
                <div class="social-links">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            
            <div class="footer-section">
                <h3><?php _e('Quick Links', 'esgi-theme'); ?></h3>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container'      => false,
                    'menu_class'     => 'footer-menu',
                    'fallback_cb'    => 'esgi_footer_fallback_menu',
                ));
                ?>
            </div>
            
            <div class="footer-section">
                <h3><?php _e('Services', 'esgi-theme'); ?></h3>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/services')); ?>"><?php _e('Web Development', 'esgi-theme'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services')); ?>"><?php _e('Mobile Development', 'esgi-theme'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services')); ?>"><?php _e('UI/UX Design', 'esgi-theme'); ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services')); ?>"><?php _e('Digital Marketing', 'esgi-theme'); ?></a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3><?php _e('Contact Info', 'esgi-theme'); ?></h3>
                <div class="contact-info">
                    <p><i class="fas fa-map-marker-alt"></i> <?php _e('123 Business Street, City, State 12345', 'esgi-theme'); ?></p>
                    <p><i class="fas fa-phone"></i> <a href="tel:+1234567890">+1 (234) 567-890</a></p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:info@example.com">info@example.com</a></p>
                </div>
            </div>

            <?php if (is_active_sidebar('footer-widget-area')) : ?>
                <div class="footer-section">
                    <?php dynamic_sidebar('footer-widget-area'); ?>
                </div>
            <?php endif; ?>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('All rights reserved.', 'esgi-theme'); ?></p>
            <p><?php _e('Built with WordPress', 'esgi-theme'); ?> | <?php _e('Theme by ESGI Student', 'esgi-theme'); ?></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script>
  document.getElementById('burger-menu').addEventListener('click', function () {
    document.getElementById('nav-overlay').classList.add('open');
  });

  document.getElementById('close-menu').addEventListener('click', function () {
    document.getElementById('nav-overlay').classList.remove('open');
  });
</script>
