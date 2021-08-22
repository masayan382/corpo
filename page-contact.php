<?php get_header(); ?>

<main>
    <article class="contact_sv subvisual">
        <h2>お問い合わせ</h2>
    </article>

    <section class="breadcrumb inner">
        <?php
        if (function_exists('bcn_display')) {
            bcn_display();
        }
        ?>
    </section>

    <div class="wrapper">
        <article class="contact_form">
            <section class="inner">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </section>
        </article>
    </div>

</main>

<?php get_footer(); ?>