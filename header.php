<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Arimo:400,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.png" type="image/png">
    <title>AVTOMIR</title>
    <?php wp_head(); ?>
</head>
<body>
        <?php get_template_part('template_parts/modal-window'); ?>
        <?php get_template_part('template_parts/quick-order'); ?>
        <div id="upstairs">
                <img src="<?php echo get_template_directory_uri() ?>/img/right-arrow.png" alt="Стрелка вверх">
        </div>
        <?php get_template_part('template_parts/mobile-menu'); ?>
        <div class="container">
            <header class="header inside-wr flex_s-b">
            <a href="\">
            <div class="logo">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="Логотип">
            </div>
            </a>
                <nav class="menu">
                    <?php wp_nav_menu(array('theme_location'=>'Main', 'menu_class'=>'menu_list') );?>
                </nav>
                <div class="tel">
                        <a class="call_mobi" href="tel:+78002000600"><div class="phone__icon"></div></a>
                        <a class="dectop" href="tel:+73952931739">+7 (3952) 93-17-39</a>
                </div>
                <div class="burger">
                        <div class="burger_1"></div>
                        <div class="burger_2"></div>
                        <div class="burger_3"></div>
                </div>
            </header>
            <div class="full_line"></div>