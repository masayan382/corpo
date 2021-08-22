<?php get_header(); ?>

<main>
    <article class="privacy_sv subvisual">
        <h2>プライバシーポリシー</h2>
    </article>

    <section class="breadcrumb inner">
        <?php
        if (function_exists('bcn_display')) {
            bcn_display();
        }
        ?>
    </section>

    <div class="wrapper">
        <article class="privacy_policy">
            <section class="inner">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </section>
        </article>
    </div>
</main>

<?php get_footer(); ?>