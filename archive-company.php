<?php get_header(); ?>

<?php $args = array(
    'post_type' => 'company',
    'p' => '42'
);
$posts_array = get_posts($args); ?>
<?php foreach ($posts_array as $post) : setup_postdata($post); ?>

    <main>
        <article class="company_sv subvisual">
            <h2>会社案内</h2>
        </article>

        <section class="breadcrumb inner">
            <?php
            if (function_exists('bcn_display')) {
                bcn_display();
            }
            ?>
        </section>

        <div class="wrapper">
            <article class="company_profile">
                <section class="inner">
                    <h2><?php echo CFS()->get('company_title01'); ?></h2>
                    <table>
                        <tbody>
                            <?php
                            $fields = CFS()->get('company_tableloop01');
                            foreach ($fields as $field) :
                            ?>
                                <tr>
                                    <th><?php echo $field['company_th01']; ?></th>
                                    <td><?php echo $field['company_td01']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </section>
            </article>

            <article class="access_map">
                <section class="inner">
                    <h3><?php echo CFS()->get('company_title02'); ?></h3>
                    <table>
                        <tbody>
                            <?php
                            $fields = CFS()->get('company_tableloop02');
                            foreach ($fields as $field) :
                            ?>
                                <tr>
                                    <th><?php echo $field['company_th02']; ?></th>
                                    <td><?php echo $field['company_td02']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <iframe src="<?php echo CFS()->get('company_map'); ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </section>
            </article>
        </div>

    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>

    </main>

    <?php get_footer(); ?>