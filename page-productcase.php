<?php get_header(); ?>

    <section class="p-productcase__heading">
        <p>Product Case</p>
        <h1>
            <span aria-hidden="true">ー   </span>
            制作事例
            <span aria-hidden="true">   ー</span>
        </h1>
    </section>

    <p class="bg-text" aria-hidden="true">gigifurniture</p>

    <section class="p-productcase__content">
        <div class="item-wrap">
            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;

            $args = array(
                'post_type' => 'post', // ← 通常の投稿タイプ、 固定ページにループ処理を行う場合はカスタムクエリになるので指定が必要
                'paged'     => $paged,
                'posts_per_page' => 6,
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                get_template_part('template-parts/productcase-item');
                endwhile;
                
                else :
                echo '<p>表示する投稿がありません。</p>';
            endif ;
            ?>
        </div>
        <div class="p-pagination">
            <?php
                if ( function_exists( 'wp_pagenavi' )) {
                    wp_pagenavi( array( 'query' => $query ));
                }
                wp_reset_postdata();
            ?>
        </div>
    </section>

    <?php get_template_part('template-parts/partner'); ?>

<?php get_footer(); ?>