<?php get_header(); ?>

<main>
    <article class="mainvisual">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mv.jpg" alt="">
        <h2>Reliable technology</h2>
    </article>

    <div class="wrapper">
        <article class="top-greeting">
            <section class="inner">
                <h2>ご挨拶</h2>
                <dl>
                    <dt>
                        <figure><img src="<?php echo get_template_directory_uri(); ?>/images/top_greeting_img.jpg"></figure>
                    </dt>
                    <dd>
                        <p>本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。<br>
                            本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                            本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                            本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。<br>
                            本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。<br>
                            本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                        </p>
                    </dd>
                </dl>
            </section>
        </article>
        <article class="top-business">
            <section class="inner">
                <h2>製品情報</h2>
                <div>
                    <p>本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。</p>
                    <div class="top-business_btn"><a class="btn" href="product_line.html">詳しくはこちら</a></div>
                </div>
            </section>
        </article>
        <article class="top-news">
            <section class="inner">
                <h2>NEWS</h2>
                <ul class="news-archive">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <li><time><?php echo get_the_date('Y.m.d'); ?></time><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php endwhile;
                    endif; ?>
                </ul>
                <div class="top-news_btn"><a class="btn btn-primary" href="news.html">NEWS一覧はこちら</a></div>
            </section>
        </article>
    </div>
</main>

<?php get_footer(); ?>