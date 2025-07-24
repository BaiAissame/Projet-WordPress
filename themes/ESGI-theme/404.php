<?php get_header(); ?>
<style>
    body.error404 {
        margin: 0 !important;
        padding: 0 !important;
    }

    .error404 #main,
    .error404 #primary,
    .error404 #content,
    .error404 .site-content {
        margin: 0 !important;
        padding: 0 !important;
    }

    .error-page {
        background-color: #050A3A;
        margin: 0 !important;
        padding: 0 !important;
        min-height: calc(100vh - 80px);
    }

    .error-404 {
        margin-left: 5% !important;
        margin-top: 0 !important;
        padding-top: 2rem !important;
        color: white;
    }

    .error404 .esgi-header {
        margin-bottom: 0 !important;
    }

    .error404 main {
        margin: 0 !important;
        padding: 0 !important;
    }

    .error-404 h1 {
        margin-top: 0 !important;
        margin-bottom: 1rem;
        font-size: 3rem;
        font-weight: bold;
    }

    .error-404 p {
        margin-bottom: 2rem;
        font-size: 1.2rem;
        line-height: 1.6;
    }

    .search-form-container {
        margin-top: 2rem;
    }

    .search-form {
        display: flex;
        max-width: 400px;
    }

    .search-input-container {
        display: flex;
        width: 100%;
        border-radius: 5px;
        overflow: hidden;
        border: 2px solid #4a5568;
    }

    .search-field {
        flex: 1;
        padding: 12px 16px;
        border: none;
        background-color: #2d3748;
        color: white;
        font-size: 16px;
    }

    .search-field::placeholder {
        color: #a0aec0;
    }

    .search-submit {
        padding: 12px 20px;
        background-color: #4299e1;
        color: white;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .search-submit:hover {
        background-color: #3182ce;
    }

    @media (max-width: 768px) {
        .error-404 {
            margin-left: 1rem !important;
            margin-right: 1rem !important;
            padding-top: 1rem !important;
        }

        .error-404 h1 {
            font-size: 2rem;
        }

        .error-404 p {
            font-size: 1rem;
        }

        .search-form {
            max-width: 100%;
        }
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