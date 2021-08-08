<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KURIPRESS</title>

    <!--Stylesheet-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" media="screen, projection, print">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" media="screen, projection, print">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <h1><a href="index.html">KURIPRESS</a></h1>
        <nav>
            <ul>
                <li><a href="index.html"><span>TOP</span></a></li>
                <li><a href="company.html"><span>会社案内</span></a></li>
                <li><a href="business.html"><span>事業内容</span></a></li>
                <li><a href="product_line.html"><span>製品情報</span></a></li>
                <li><a href="recruit.html"><span>採用情報</span></a></li>
                <li><a href="contact.html"><span>お問い合わせ</span></a></li>
            </ul>
        </nav>
    </header>