<article class="main-article">
    <header class="main-article-header">
        <?php
        if (is_single()) :
            the_title('<h1 class="main-article-header-h1">', '</h1>');
        else :
            the_title(sprintf('<h1 class="main-article-header-h1"><a href="%s">', esc_url(get_permalink())), '</a></h1>');
        endif;
        ?>

        <h3>
            <?php
            foreach ((get_the_category()) as $category) {
                echo '<a href="' . get_category_link($category->cat_ID) . '" class="main-article-header-a">' . $category->cat_name . '</a> ';
            }
            ?>
        </h3>

    </header>
    <section class="main-article-content">
        <?php
        /* translators: %s: Name of current post */
        the_content();

        ?>
    </section>
    <footer class="main-article-footer">
        <ul class="main-article-social-icon">
            <li><a href="#" class="fb-like"></a></li>
            <li>SHARE:</li>
            <li><a href="//facebook.com" class="fb-n" target="_blank"></a></li>
            <li><a href="//vk.com" class="vk-n" target="_blank"></a></li>
        </ul>
        <a href="#" class="main-article-liveacomment">LIVE A COMMENT</a>

        <div class="clearfix"></div>
        <div class="article-bot-border"></div>
    </footer>
</article>