<?php get_header(); ?>

<?php
//現在のタームを取得
$taxonomy = 'product_cat';
$taxSlug = get_query_var($taxonomy);
$term = get_term_by('slug', $taxSlug, $taxonomy);
$slug = $term->slug;
?>

<main>
    <article class="product_sv subvisual">
        <h2>製品情報</h2>
    </article>

    <section class="breadcrumb inner">
        <?php
        if (function_exists('bcn_display')) {
            bcn_display();
        }
        ?>
    </section>

    <div class="wrapper">
        <article class="product_line">
            <section class="inner">
                <h2><?php echo $term->name; ?></h2>
                <ul>
                    <?php
                    $args = array(
                        //記事一覧を表示
                        'post_type' => 'product',
                        'posts_per_page' => -1,
                        'order' => 'ASC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => $taxonomy,
                                'terms'    => $term->term_id,
                            ),
                        ),
                    );
                    $the_query  = new WP_Query($args);
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                            <li><a href="<?php the_permalink(); ?>">
                                    <figure><?php the_post_thumbnail('full'); ?></figure>
                                    <div>
                                        <h3><?php the_title(); ?></h3>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile;
                        wp_reset_postdata();
                    else : ?>
                        <p>公開中の製品がありません。</p>
                    <?php endif;
                    ?>
                </ul>

            </section>
        </article>
    </div>
</main>

<?php get_footer(); ?>