<section class="identity-card">
    <?= get_custom_logo() ?>
    <h1> <?= get_bloginfo('name') ?></h1>
    <h2> <?= get_bloginfo('description') ?></h2>
    <footer>
        <ul>
            <?php
            $social_networks = ['twitter', 'facebook', 'google', 'linkedin'];
            foreach ($social_networks as $network) {
                $url = get_theme_mod('url_' . $network, '');
                if (!empty($url)) : ?>
                    <li>
                        <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener">
                            <?= esgi_getIcon($network) ?>
                        </a>
                    </li>
                <?php endif;
            } ?>
        </ul>
    </footer>
</section>