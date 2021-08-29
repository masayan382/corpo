<?php get_header(); ?>

<?php $args = array(
    'post_type' => 'recruit',
    'p' => '141'
);
$posts_array = get_posts($args); ?>
<?php foreach ($posts_array as $post) : setup_postdata($post); ?>

    <main>
        <article class="recruit_sv subvisual">
            <h2>採用情報</h2>
        </article>

        <section class="breadcrumb inner">
            <?php
            if (function_exists('bcn_display')) {
                bcn_display();
            }
            ?>
        </section>

        <div class="wrapper">
            <article class="recruit_list">
                <section class="inner">
                    <h2><?php echo CFS()->get('recruit_title'); ?></h2>
                    <table>
                        <tbody>
                            <?php
                            $fields = CFS()->get('recruit_tableloop');
                            foreach ($fields as $field) :
                            ?>
                                <tr>
                                    <th><?php echo $field['recruit_th']; ?></th>
                                    <td><?php echo $field['recruit_td']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </section>
            </article>
        </div>

    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>

    </main>

    <?php get_footer(); ?>