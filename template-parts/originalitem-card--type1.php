<figure class="originalitem-card--type1">
    <a class="originalitem-card__img" href="<?php the_field('item-url'); ?>" target="_blank" rel="noopener noreferrer">
        <img src="<?php the_field('item-image'); ?>" alt="商品画像">
    </a>
    <figcaption class="originalitem-card__caption">
        <h2 class="title"><?php the_title(); ?></h2>
        <p class="text">
        <?php
        $text = get_field('item-text');
        if ($text) {
            echo nl2br(esc_html($text));
        }
        ?>
    </figcaption>
</figure>