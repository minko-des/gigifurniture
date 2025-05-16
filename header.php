<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="l-wrapper">
        
        <?php get_sidebar(); ?>
        
        <main class="l-main">
            <header class="l-header">
                <div class="bg-color">
                    <div class="logo-bg"></div>
                    <div class="nav-bg"></div>
                </div>
                
                <div class="p-header">
                    <?php if ( is_front_page() && is_home() ) : ?>
                        <h1 class="u-visually-hidden">オーダーメイド家具とオリジナルアウトドア製品ブランドのgigifurniture</h1>
                    <?php endif; ?>
                    
                    <?php get_template_part('template-parts/gigi-logo'); ?>

                    <nav class="header__nav">
                        <?php
                            wp_nav_menu(array(
                            'theme_location' => 'header-nav',
                            'menu_class'     => 'menu',
                            'container'      => false,
                            ));
                        ?>
                    </nav>

                    <div class="link-unit">
                        <?php get_template_part('template-parts/contact-btn--small'); ?>
                        <?php get_template_part('template-parts/insta-icon'); ?>
                    </div>
                    <button class="c-menu-btn" aria-label="メニューを開く">MENU</button>
                </div>
            </header>