<article id="post-<?php the_ID(); ?>" <?php post_class('productcase-item'); ?>>
    <div class="productcase-item__img">
        <?php 
            $product_image = get_field('product-image'); 
            if ($product_image): 
        ?>
            <img src="<?php echo esc_url($product_image); ?>" alt="オーダーメイド家具の画像" loading="lazy">
        <?php else: ?>
            <p>画像が設定されていません。</p>
        <?php endif; ?>
    </div>
    <div class="productcase-item__caption">
        <h2 class="title"><?php the_title(); ?></h2>
        <div class="category">
            <p class="date"><?php echo esc_html(get_field('date')); ?></p>
            <p class="buildtime"><?php echo esc_html(get_field('buildtime')); ?></p>
        </div>
        <p class="text">
            <?php
            $text = get_field('text');
            if ($text) {
                echo nl2br(esc_html($text));
            }
            ?>
        </p>
    </div>
</article>