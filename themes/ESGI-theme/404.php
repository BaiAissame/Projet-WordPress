
<?php get_header(); ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="error-404">
                    <h1><?php _e('Page introuvable', 'ESGI'); ?></h1>
                    <p><?php _e('Essayez de faire une recherche', 'ESGI'); ?></p>
                    
                    <div class="search-form-container">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>