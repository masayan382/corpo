<?php get_header(); ?>

<main>
    <article class="news_sv subvisual">
        <h2>ニュース</h2>
    </article>

    <section class="breadcrumb inner">
        <ul>
            <li><a href="index.html">TOP</a></li>
            <li> <a href="news.html">ニュース</a></li>
            <li>ニュース詳細</li>
        </ul>
    </section>

    <div class="wrapper">
        <article class="news_details">
            <section class="inner">
                <h2><?php the_title(); ?></h2>
                <div class="date"><time><?php echo get_the_date('Y.m.d'); ?></time></div>
                <div class="edit">
                    <p><?php the_content(); ?></p>
                </div>
                <p class="news_details_btn"><a href="<?php echo home_url(); ?>/category/news" class="btn btn-primary">一覧へ戻る</a></p>
            </section>
        </article>
    </div>

</main>

<?php get_footer(); ?>