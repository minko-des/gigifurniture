<?php get_header(); ?>

    <section class="p-items__main-visual">
        <div class="heading-area">
            <p>Original items</p>
            <h1>オリジナルアウトドアグッズの製作、販売を行っています。</h1>
        </div>
        <div class="catch-area">
            <div class="img-wrap">
                <div class="img01"><img src="<?php echo esc_url(get_theme_file_uri('/images_item/items-catch1.jpg') ); ?>" alt=""></div>
                <div class="img02"><img src="<?php echo esc_url(get_theme_file_uri('/images_item/items-catch2.jpg') ); ?>" alt=""></div>
            </div>
        </div>
        <p class="notes">
            ※商品は受注生産のため、発送までにお時間をいただく場合がございます。<br>
            ※モニターの設定や環境により、実際の商品の色味が異なる場合がございます。
        </p>
    </section>

    <section class="p-items__content">
        <?php
        $paged = get_query_var('paged') ?: get_query_var('page') ?: 1;
        
        $args = array(
            'post_type' => 'item',
            'paged'     => $paged,
            'posts_per_page' => 8,
        );
        
        $custom_query = new WP_Query($args);
        ?>
            
        <div class="originalitem-wrap">
            <?php
            if ($custom_query->have_posts()) :
                while ($custom_query->have_posts()) : $custom_query->the_post();
                get_template_part('template-parts/originalitem-card');
                endwhile;
                
            else :
                echo '<p>表示する投稿がありません。</p>';
            endif ;

            wp_reset_postdata();
            ?>
        </div>
        <div class="p-pagination">
            <?php
                if ( function_exists( 'wp_pagenavi' )) {
                    wp_pagenavi( array( 'query' => $custom_query ));
                }
                wp_reset_postdata();
            ?>
        </div>
    </section>

    <?php get_template_part('template-parts/partner'); ?>

<?php get_footer(); ?>