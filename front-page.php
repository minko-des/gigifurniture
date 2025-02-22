<?php get_header(); ?>

    <section class="p-main-visual">
        <div class="img__container">
            <img class="main-visual__img" src="<?php echo esc_url(get_theme_file_uri('/images/mainvisual01.jpg') ); ?>" alt="ビジュアルイメージ01">
            <img class="main-visual__img hidden" src="<?php echo esc_url(get_theme_file_uri('/images/mainvisual02.jpg') ); ?>" alt="ビジュアルイメージ02">
            <img class="main-visual__img hidden" src="<?php echo esc_url(get_theme_file_uri('/images/mainvisual03.jpg') ); ?>" alt="ビジュアルイメージ03">
            <img class="main-visual__img hidden" src="<?php echo esc_url(get_theme_file_uri('/images/mainvisual04.jpg') ); ?>" alt="ビジュアルイメージ04">
        </div>
            <h1 class="catch-copy">Making <span>Iron</span> <span>Products.</span></h1>
            <p class="concept">Add new value to your lifestyle.<br> <span class="br-point">Custom-made furniture</span> <span>and</span> <span>Original outdoor goods.</span></p>
    </section>
    
    <?php get_template_part('template-parts/about'); ?>
    <?php get_template_part('template-parts/orderproduct'); ?>
    
    <section class="p-originalitems">
        <div class="heading__plate"></div>
        <h2 class="c-section__title">Original items</h2>
        <div class="originalitems__lead">
            <p class="c-square-mark"></p>
            <p class="lead">オリジナルアウトドアグッズの製作、販売を行っています。</p>
        </div>
        <p class="originalitems__text">鉄素材の質感を大切にし、重厚感がありながら実用性のある商品を製作しています。</p>
    
        <div class="p-swiper-area">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                        get_template_part('template-parts/swiper-slide');
                        endwhile;
                    else :
                    endif ;
                    ?>


                    <!-- <div class="swiper-slide">
                        <div class="item"><img src="<php echo esc_url(get_theme_file_uri('/images_item/item_magazinerack1.jpeg') ); ?>" alt="アイテム画像"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item"><img src="<php echo esc_url(get_theme_file_uri('/images_item/item_dripper.JPG') ); ?>" alt="アイテム画像"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item"><img src="<php echo esc_url(get_theme_file_uri('/images_item/item_tissue.JPG') ); ?>" alt="アイテム画像"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item"><img src="<php echo esc_url(get_theme_file_uri('/images_item/item_incensestand.JPG') ); ?>" alt="アイテム画像"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item"><img src="<php echo esc_url(get_theme_file_uri('/images_item/item_keyholder.JPG') ); ?>" alt="アイテム画像"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item"><img src="<php echo esc_url(get_theme_file_uri('/images_item/item_nandemorack1.JPG') ); ?>" alt="アイテム画像"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item"><img src="<php echo esc_url(get_theme_file_uri('/images_item/item_squarepot1.JPG') ); ?>" alt="アイテム画像"></div>
                    </div> -->
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"><span></span></div>
            <div class="swiper-button-next"><span></span></div>
        </div>

        <div class="deco-plate"><span>gigi</span></div>
        <div class="c-link-btn--black"><a href="./archive-item.html"><span>すべての商品を見る</span></a></div>
    </section>

    <?php get_template_part('template-parts/instagram'); ?>
    
    <section class="p-partner">
        <h2>Partners</h2>
        <div class="slider">
            <div class="slider-container">
                <div class="logo-wrap">
                    <div class="logo__uag"><a href="https://uagfb.com/" target="_blank" rel="noopener noreferrer"><img src="<?php echo esc_url(get_theme_file_uri('/images/logo_uag.png') ); ?>" alt="UAGロゴ"></a></div>
                    <div class="logo__gcd"><a href="https://good-crew-dining.com/" target="_blank" rel="noopener noreferrer"><img src="<?php echo esc_url(get_theme_file_uri('/images/logo_gcd.png') ); ?>" alt="GCDロゴ"></a></div>
                    <div class="logo__loko"><a href="http://www.loko-surf.com/" target="_blank" rel="noopener noreferrer"><img src="<?php echo esc_url(get_theme_file_uri('/images/logo_lokosurf.png') ); ?>" alt="Lokoロゴ"></a></div>
                    <div class="logo__ebanataw"><a href="https://xn--gckd3eyb3a.com/" target="_blank" rel="noopener noreferrer"><img src="<?php echo esc_url(get_theme_file_uri('/images/logo_ebanataw.png') ); ?>" alt="ebanatawロゴ"></a></div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>