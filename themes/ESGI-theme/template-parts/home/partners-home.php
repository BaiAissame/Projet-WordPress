<!-- Section Partners -->
<section>
    <div>
        <h2 class="partner-title">Our Partners</h2>
        <div class="partner-list-img">
            <?php for ($i = 1; $i <= 6; $i++): ?>
                <?php $logo = get_theme_mod("esgi_partner_logo_$i"); ?>
                <?php if ($logo): ?>
                    <img src="<?php echo esc_url($logo); ?>" loading="lazy" alt="Logo partenaire <?php echo $i; ?>"
                        class="partner-logo">
                <?php endif; ?>
            <?php endfor; ?>
        </div>
    </div>
</section>