<?php get_header(); ?>

<main>
    <div class="search-container">
        <div class="search-results-header">
            <h1>
                <?php printf(__('Search results for: %s', 'ESGI'), '<strong>' . get_search_query() . '</strong>'); ?>
            </h1>
        </div>

        <div class="articles-grid">
            <!-- Article 1 -->
            <article class="article-card">
                <div class="article-content">
                    <h2 class="article-title">
                        <a href="#">
                            Suspendisse aliquet efficitur porttitor. In ornare varius.
                        </a>
                    </h2>
                    
                    <div class="article-meta">
                        <span class="category">Uncategorized</span>
                        <span class="date">July 5, 2022</span>
                    </div>
                    
                    <div class="article-excerpt">
                        Nulla hendrerit, mauris non convallis lacinia, quam quam effend massa, id fermentum magna tellus in augue. Vestibulum scelerisque mauris.
                    </div>
                </div>
            </article>

            <!-- Article 2 -->
            <article class="article-card">
                <div class="article-content">
                    <h2 class="article-title">
                        <a href="#">
                            Suspendisse aliquet efficitur porttitor. In ornare varius.
                        </a>
                    </h2>
                    
                    <div class="article-meta">
                        <span class="category">Uncategorized</span>
                        <span class="date">July 5, 2022</span>
                    </div>
                    
                    <div class="article-excerpt">
                        Nulla hendrerit, mauris non convallis lacinia, quam quam effend massa, id fermentum magna tellus in augue. Vestibulum scelerisque mauris.
                    </div>
                </div>
            </article>

            <!-- Article 3 -->
            <article class="article-card">
                <div class="article-content">
                    <h2 class="article-title">
                        <a href="#">
                            Suspendisse aliquet efficitur porttitor. In ornare varius.
                        </a>
                    </h2>
                    
                    <div class="article-meta">
                        <span class="category">Uncategorized</span>
                        <span class="date">July 5, 2022</span>
                    </div>
                    
                    <div class="article-excerpt">
                        Nulla hendrerit, mauris non convallis lacinia, quam quam effend massa, id fermentum magna tellus in augue. Vestibulum scelerisque mauris.
                    </div>
                </div>
            </article>

            <!-- Article 4 -->
            <article class="article-card">
                <div class="article-content">
                    <h2 class="article-title">
                        <a href="#">
                            Suspendisse aliquet efficitur porttitor. In ornare varius.
                        </a>
                    </h2>
                    
                    <div class="article-meta">
                        <span class="category">Uncategorized</span>
                        <span class="date">July 5, 2022</span>
                    </div>
                    
                    <div class="article-excerpt">
                        Nulla hendrerit, mauris non convallis lacinia, quam quam effend massa, id fermentum magna tellus in augue. Vestibulum scelerisque mauris.
                    </div>
                </div>
            </article>

            <!-- Article 5 -->
            <article class="article-card">
                <div class="article-content">
                    <h2 class="article-title">
                        <a href="#">
                            Suspendisse aliquet efficitur porttitor. In ornare varius.
                        </a>
                    </h2>
                    
                    <div class="article-meta">
                        <span class="category">Uncategorized</span>
                        <span class="date">July 5, 2022</span>
                    </div>
                    
                    <div class="article-excerpt">
                        Nulla hendrerit, mauris non convallis lacinia, quam quam effend massa, id fermentum magna tellus in augue. Vestibulum scelerisque mauris.
                    </div>
                </div>
            </article>

            <!-- Article 6 -->
            <article class="article-card">
                <div class="article-content">
                    <h2 class="article-title">
                        <a href="#">
                            Suspendisse aliquet efficitur porttitor. In ornare varius.
                        </a>
                    </h2>
                    
                    <div class="article-meta">
                        <span class="category">Uncategorized</span>
                        <span class="date">July 5, 2022</span>
                    </div>
                    
                    <div class="article-excerpt">
                        Nulla hendrerit, mauris non convallis lacinia, quam quam effend massa, id fermentum magna tellus in augue. Vestibulum scelerisque mauris.
                    </div>
                </div>
            </article>
        </div>
    </div>
</main>
<style>

.search-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
}

.search-results-header {
    text-align: center;
    margin-bottom: 40px;
}

.search-results-header h1 {
    font-size: 28px;
    color: #333;
    font-weight: 400;
}

.articles-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-bottom: 50px;
}

.article-card {
    background: white;
    padding: 25px;
}


.article-title {
    margin: 0 0 15px 0;
    font-size: 18px;
    line-height: 1.4;
}

.article-title a {
    color: #333;
    text-decoration: none;
    font-weight: 600;
}


.article-meta {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 15px;
    font-size: 14px;
    color: #666;
}

.category {
    color: #4facfe;
    font-weight: 500;
}

.date {
    color: #999;
}

.article-excerpt {
    color: #666;
    line-height: 1.6;
    font-size: 14px;
}
</style>
<?php get_footer(); ?>