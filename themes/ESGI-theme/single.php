<?php

get_header();


?>

<main class="post">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1><?php the_title() ?></h1> 
                <div class="post-meta">
                    <div class="post-author">
                        <img src="<?= get_avatar_url($post->post_author) ?>" alt="<?= get_the_author_meta('nickname', $post->post_author)  ?>">
                        <?= get_the_author_meta('nickname', $post->post_author)  ?>
                    </div>
                    <time>
                        <?= wp_date('j F Y', strtotime($post->post_date)) ?>
                    </time>
                </div>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail() ?>
                </div>
                <div>
                    <?php the_content() ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();