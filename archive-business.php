<?php get_header(); ?>

<?php $args = array(
    'post_type' => 'business',
    'p' => '52'
);
$posts_array = get_posts($args); ?>
<?php foreach ($posts_array as $post) : setup_postdata($post); ?>

    <main>
        <article class="business_sv subvisual">
            <h2>事業内容</h2>
        </article>

        <section class="breadcrumb inner">
            <?php
            if (function_exists('bcn_display')) {
                bcn_display();
            }
            ?>
        </section>

        <div class="wrapper">
            <article class="business">
                <h2>事業一覧</h2>
                <section class="business_description_left">
                    <dl>
                        <dt><img src="<?php echo CFS()->get('business_img01'); ?>"></dt>
                        <dd>
                            <h3><?php echo CFS()->get('business_title01'); ?></h3>
                            <p><?php echo CFS()->get('business_text01'); ?></p>
                        </dd>
                    </dl>
                </section>

                <section class="business_description_right">
                    <dl>
                        <dt><img src="<?php echo CFS()->get('business_img02'); ?>"></dt>
                        <dd>
                            <h3><?php echo CFS()->get('business_title02'); ?></h3>
                            <p><?php echo CFS()->get('business_text02'); ?></p>
                        </dd>
                    </dl>
                </section>

                <section class="business_description_left">
                    <dl>
                        <dt><img src="<?php echo CFS()->get('business_img03'); ?>"></dt>
                        <dd>
                            <h3><?php echo CFS()->get('business_title03'); ?></h3>
                            <p><?php echo CFS()->get('business_text03'); ?></p>
                        </dd>
                    </dl>
                </section>
            </article>

        </div>

    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>

    </main>

    <?php get_footer(); ?>