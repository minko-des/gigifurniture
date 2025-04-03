<?php get_header(); ?>

    <section class="p-main-visual">
        <div class="img__container">
            <img class="main-visual__img" src="<?php echo esc_url(get_theme_file_uri('/images/mainvisual01.jpg') ); ?>" alt="">
            <img class="main-visual__img hidden" src="<?php echo esc_url(get_theme_file_uri('/images/mainvisual02.jpg') ); ?>" alt="">
            <img class="main-visual__img hidden" src="<?php echo esc_url(get_theme_file_uri('/images/mainvisual03.jpg') ); ?>" alt="">
            <img class="main-visual__img hidden" src="<?php echo esc_url(get_theme_file_uri('/images/mainvisual04.jpg') ); ?>" alt="">
        </div>
            <p class="catch-copy">Making <span>Iron</span> <span>Products.</span></p>
            <p class="concept">
                Add new value to your lifestyle.<br> 
                <span class="br-point">Custom-made furniture</span> <span>and</span> <span>Original outdoor goods.</span>
            </p>
    </section>
    
    <section class="p-about" id="about">
        <p class="c-section__title fadeIn">About</p>
        <h2 class="about__lead fadeIn">gigi furnitureについて</h2>
        <p class="about__text fadeIn">
            gigi furnitureは、鉄加工と鉄製品の製作を事業とする「澤田鈑金」が展開するオリジナルブランドです。<br>
            長年培った鉄加工技術を活かし、オーダーメイド家具やオリジナルアウトドアグッズを製作・提供しています。<br>
            鉄や木材の素材感を活かしたインダストリアルデザインが特徴で、使い込むほどに味わいが増す素材の魅力を感じていただきたいと考えています。<br><br>
            gigi furniture は、暮らしに温かみとスタイルをもたらす製品づくりを通じて、お客様とともに新しい価値を創造していきます。
        </p>
    </section>
    
    <?php get_template_part('template-parts/orderproduct'); ?>
    
    <section class="p-originalitems">
        <div class="heading__plate"></div>
        <p class="c-section__title fadeIn">Original items</p>
        <div class="originalitems__lead fadeIn">
            <p class="c-square-mark" aria-hidden="true"></p>
            <h2 class="lead">オリジナルアウトドアグッズの製作、販売を行っています。</h2>
        </div>
        <p class="originalitems__text fadeIn">鉄素材の質感を大切にし、重厚感がありながら実用性のある商品を製作しています。</p>
    
        <?php get_template_part('template-parts/swiper'); ?>

        <div class="deco-plate fadeIn"><span aria-hidden="true">gigi</span></div>
        <div class="c-link-btn--black fadeIn">
            <a href="<?php echo esc_url(home_url('/items/')); ?>" aria-label="すべての商品一覧ページへ移動" role="button">
                <span>すべての商品を見る</span>
            </a>
        </div>
    </section>

    <?php get_template_part('template-parts/instagram'); ?>

    <?php get_template_part('template-parts/partner'); ?>

<?php get_footer(); ?>