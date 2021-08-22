<?php get_header(); ?>

<main>
    <article class="contact_sv subvisual">
        <h2>お問い合わせ</h2>
    </article>

    <section class="breadcrumb inner">
        <ul>
            <li><a href="index.html">TOP</a></li>
            <li>お問い合わせ</li>
        </ul>
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