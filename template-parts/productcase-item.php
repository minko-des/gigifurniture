<figure class="p-productcase-item">
    <div class="productcase-item__img">
        <?php 
            $product_image = get_field('product-image'); 
            if ($product_image): 
        ?>
            <img src="<?php echo esc_url($product_image); ?>" alt="イメージ画像">
        <?php else: ?>
            <p>画像が設定されていません。</p>
        <?php endif; ?>

        

        <!-- <php if( get_field('product-image') ): ?>
            <img src="<php the_field('product-image'); ?>" alt="イメージ画像">
        <php endif; ?> -->
        <!-- <img src="./images_productcase/product_01.jpg" alt="イメージ画像"> -->
    </div>
    <figcaption class="productcase-item__caption">
        <h2 class="title"><?php the_title(); ?></h2>
        <!-- <h2 class="title">フィンガーボードラック</h2> -->
        <div class="category">
            <p class="date"><?php the_field('date'); ?></p>
            <p class="buildtime"><?php the_field('buildtime'); ?></p>
            
            <!-- <p class="date">2023.5</p> -->
            <!-- <p class="buildtime">制作期間 1.5ヶ月</p> -->
        </div>
            <p class="text"><?php the_field('text'); ?></p>
        <!-- <p class="text">商品の説明文が入ります商品の説明文が入ります商品の説明文が入ります商品の説明文が入ります商品の説明文が入ります商品の説明文が入ります</p> -->
    </figcaption>
</figure>