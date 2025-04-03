<div class="p-swiper-area slideInFromUnder">
    <div class="swiper">
        <div class="swiper-wrapper">
            <?php
            $args = array(
                'post_type'     => 'item',
                'post_per_page' => 10,
            );

            $custom_query = new WP_Query($args);

            if ($custom_query->have_posts()) :
                while ($custom_query->have_posts()) : $custom_query->the_post();
                get_template_part('template-parts/swiper-slide');
                endwhile;
                wp_reset_postdata();
            else :
                echo "<p>記事がありません。</p>";
            endif;
            
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"><span></span></div>
    <div class="swiper-button-next"><span></span></div>
</div>