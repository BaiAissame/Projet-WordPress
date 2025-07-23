<?php get_header(); ?>
<style>
.error-404 {
    margin-left: 5% !important;
    color: white;
}
.error-page {
    background-color: #1a1a2e;
}
</style>
<main class="error-page">
    <div class="error-404">
        <h1><?php _e('404 Error.', 'ESGI'); ?></h1>
        <p><?php _e("The page you were looking for couldn't be found.<br>Maybe try a search?", 'ESGI'); ?></p>
        <div class="search-form-container">
            <?php get_search_form(); ?>
        </div>
    </div>

</main>

<?php get_footer(); ?>