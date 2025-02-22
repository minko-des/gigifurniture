<?php get_header(); ?>

    <section class="p-main-visual">
        <div class="img__container">
            <img class="main-visual__img" src="./images/mainvisual01.jpg" alt="ビジュアルイメージ01">
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
                    <div class="swiper-slide">
                        <div class="item"><img src="./images_item/item_magazinerack1.jpeg" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item"><img src="./images_item/item_dripper.JPG" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item"><img src="./images_item/item_tissue.JPG" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item"><img src="./images_item/item_incensestand.JPG" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item"><img src="./images_item/item_keyholder.JPG" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item"><img src="./images_item/item_nandemorack1.JPG" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item"><img src="./images_item/item_squarepot1.JPG" alt=""></div>
                    </div>
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
    <?php get_template_part('template-parts/partner'); ?>

<?php get_footer(); ?>