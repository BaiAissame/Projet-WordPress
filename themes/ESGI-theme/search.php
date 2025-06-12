<?php get_header(); ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="search-results">
                    <h1>
                        <?php printf(__('Résultats de la recherche pour %s', 'ESGI'), '<strong>' . get_search_query() . '</strong>'); ?>
                    </h1>

                    <?php
                    $search_query = get_search_query();
                    
                    // Recherche pour les pages
                    $pages_query = new WP_Query([
                        'post_type' => 'page',
                        's' => $search_query,
                        'posts_per_page' => -1,
                        'post_status' => 'publish'
                    ]);
                    
                    // Recherche pour les articles
                    $posts_query = new WP_Query([
                        'post_type' => 'post',
                        's' => $search_query,
                        'posts_per_page' => -1,
                        'post_status' => 'publish'
                    ]);
                    ?>

                    <?php if ($pages_query->have_posts()) : ?>
                        <section class="search-section">
                            <h2>
                                <?php printf(_n('pages : %d page trouvée', 'pages : %d pages trouvées', $pages_query->found_posts, 'ESGI'), $pages_query->found_posts); ?>
                            </h2>
                            <ul class="search-results-list">
                                <?php while ($pages_query->have_posts()) : 
                                    $pages_query->the_post(); ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </section>
                    <?php endif; ?>

                    <?php if ($posts_query->have_posts()) : ?>
                        <section class="search-section">
                            <h2>
                                <?php printf(_n('articles : %d article trouvé', 'articles : %d articles trouvés', $posts_query->found_posts, 'ESGI'), $posts_query->found_posts); ?>
                            </h2>
                            <ul class="search-results-list">
                                <?php while ($posts_query->have_posts()) : 
                                    $posts_query->the_post(); ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </section>
                    <?php endif; ?>

                    <?php if (!$pages_query->have_posts() && !$posts_query->have_posts()) : ?>
                        <div class="no-results">
                            <p><?php _e('Aucun résultat trouvé pour votre recherche.', 'ESGI'); ?></p>
                        </div>
                    <?php endif; ?>

                    <?php
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>