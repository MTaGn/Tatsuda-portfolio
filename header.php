<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico"; type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body class="body" <?php body_class(); ?>>

    <header id="header" class="header">
        <div class="header-container">
            <h1 class="header-container__title"><a href="<?php echo home_url(); ?>">Tatsuda Portfolio</a></h1>
            <nav class="header-container__navigation">
                <ul class="header-container__menu-box">
                    <li class="menu"><a href="<?php echo get_template_directory_uri();?>./about/" class="menu-anker">About</a></li>
                    <li class="menu"><a href="<?php echo get_template_directory_uri(); ?>./works/" class="menu-anker">Works</a></li>
                    <li class="menu"><a href="<?php echo get_template_directory_uri(); ?>./contact/" class="menu-anker">Contact</a></li>
                </ul>
                <div class="header-container__humberger-box">
                    <span class="header-container__line"></span>
                    <span class="header-container__line"></span>
                    <span class="header-container__line"></span>
                </div>
                <div class="header-container__close-box hide">
                    <span class="header-container__close-line"></span>
                    <span class="header-container__close-line"></span>
                </div>
            </nav>
        </div>
        <div class="header-container__sp-menu-box hide">
            <div class="header-container__close-box hide">
                <span class="header-container__close-line"></span>
                <span class="header-container__close-line"></span>
            </div>
            <div class="header__accent-color-area"></div>
            <div class="header__sp-menus .hide">
                <p class="sp-menu"><a href="<?php echo get_template_directory_uri(); ?>/about/" class="anker">About</a></p>
                <p class="sp-menu"><a href="<?php echo get_template_directory_uri(); ?>/works/" class="anker">Works</a></p>
                <p class="sp-menu"><a href="<?php echo get_template_directory_uri(); ?>/contact/" class="anker">Contact</a></p>
            </div>
        </div>
        <div class="header-container__mask"></div>

    </header>