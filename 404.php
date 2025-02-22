<?php get_header(); ?>

    <div class="p-page404">
        <div class="p-page404__title c-heading--inter">
            <h1>404</h1>
            <p>page not found</p>
        </div>
        <div class="p-page404__text">
            <p>お探しのページが見つかりませんでした。<br>
                URLが間違っているか、ページが存在しません。
            </p>
        </div>
        <div class="p-page404__btn">
            <a href="<?php echo esc_url( home_url('/') ); ?>">TOPページへ戻る</a>
        </div>
    </div>
        
<?php get_footer(); ?>