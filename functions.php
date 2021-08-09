<?php
add_action('wp_print_styles', 'my_deregister_styles', 100);
function my_deregister_styles()
{
    wp_deregister_style('wp-pagenavi');
}

/*アイキャッチ画像を有効化*/
add_theme_support('post-thumbnails');
