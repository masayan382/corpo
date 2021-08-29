<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <!--Stylesheet-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" media="screen, projection, print">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" media="screen, projection, print">

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <h1><a href="<?php echo home_url(); ?>">Corpo</a></h1>
        <nav>
            <ul>
                <li><a href="<?php echo home_url(); ?>">TOP</a></li>
                <li><a href="<?php echo home_url(); ?>/company">会社案内</a></li>
                <li><a href="<?php echo home_url(); ?>/business">事業内容</a></li>
                <li><a href="<?php echo home_url(); ?>/product">製品情報</a></li>
                <li><a href="<?php echo home_url(); ?>/recruit">採用情報</a></li>
                <li><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></li>
            </ul>
        </nav>
    </header>