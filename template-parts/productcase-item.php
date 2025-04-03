<figure class="productcase-item">
    <div class="productcase-item__img">
        <?php 
            $product_image = get_field('product-image'); 
            
            if ($product_image): 
        ?>
            <img src="<?php echo esc_url($product_image); ?>" alt="オーダーメイド家具の画像">
        <?php else: ?>
            <p>画像が設定されていません。</p>
        <?php endif; ?>
    </div>
    <figcaption class="productcase-item__caption">
        <h2 class="title"><?php the_title(); ?></h2>
        <div class="category">
            <p class="date"><?php the_field('date'); ?></p>
            <p class="buildtime"><?php the_field('buildtime'); ?></p>
        </div>
            <p class="text"><?php the_field('text'); ?></p>
    </figcaption>
</figure>