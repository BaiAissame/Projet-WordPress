<section class="events-section">
    <h1 class="about-title">Our Team</h1>
    <div class="hero-team-container">
        <?php for ($i = 1; $i <= 4; $i++): ?>
            <?php
            $name = get_theme_mod("esgi_team_member_$i");
            $img = get_theme_mod("esgi_team_member_img_$i");
            $tel = get_theme_mod("esgi_team_member_tel_$i");
            $mail = get_theme_mod("esgi_team_member_mail_$i");
            ?>
            <?php if ($name || $img || $tel || $mail): ?>
                <div class="teammate">
                    <?php if ($img): ?>
                        <img src="<?php echo esc_url($img); ?>" loading="lazy" alt="<?php echo esc_attr($name); ?>">
                    <?php endif; ?>
                    <?php if ($name): ?>
                        <h1><?php echo esc_html($name); ?></h1>
                    <?php endif; ?>
                    <?php if ($tel || $mail): ?>
                        <p>
                            <?php if ($tel): ?>                 <?php echo esc_html($tel); ?><br><?php endif; ?>
                            <?php if ($mail): ?><a
                                    href="mailto:<?php echo esc_attr($mail); ?>"><?php echo esc_html($mail); ?></a><?php endif; ?>
                        </p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php endfor; ?>
    </div>
</section>