<?php get_header(); ?>

<main>
    <article class="news_sv subvisual">
        <h2>ニュース</h2>
    </article>

    <section class="breadcrumb inner">
        <?php
        if (function_exists('bcn_display')) {
            bcn_display();
        }
        ?>
    </section>

    <div class="wrapper">
        <article class="news_list">
            <section class="inner">
                <h2>ニュース一覧</h2>
                <ul class="news-archive">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <li><time><?php echo get_the_date('Y.m.d'); ?></time><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php endwhile;
                    endif; ?>
                </ul>
                <?php wp_pagenavi(); ?>
            </section>
        </article>
    </div>
</main>

<?php get_footer(); ?>