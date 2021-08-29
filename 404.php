<?php get_header(); ?>

<main>
    <article class="not-found_sv subvisual">
        <h2>404 Not found</h2>
    </article>

    <section class="breadcrumb inner">
        <?php
        if (function_exists('bcn_display')) {
            bcn_display();
        }
        ?>
    </section>

    <div class="wrapper">
        <article>
            <section class="inner">
                <p>ページが見つかりませんでした。</p>
                <p><a href="<?php echo home_url(); ?>">トップページへ戻る</a></p>
                </ul>
            </section>
        </article>
    </div>
</main>

<?php get_footer(); ?>