<?php get_header(); ?>

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
        <article class="product_details">
            <section class="inner">
                <h2><?php the_title(); ?></h2>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="product_details_contents">
                            <h3><?php echo CFS()->get('product_details_title'); ?></h3>
                            <dl>
                                <dt>
                                    <figure><img src="<?php echo CFS()->get('product_details_img'); ?>" alt=""></figure>
                                </dt>
                                <dd>
                                    <table>
                                        <tbody>
                                            <?php
                                            $fields = CFS()->get('product_details_tableloop');
                                            foreach ($fields as $field) :
                                            ?>
                                                <tr>
                                                    <th><?php echo $field['product_details_th']; ?></th>
                                                    <td><?php echo $field['product_details_td']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </dd>
                            </dl>
                        </div>

                <?php endwhile;
                endif; ?>

            </section>
        </article>
    </div>

</main>

<?php get_footer(); ?>