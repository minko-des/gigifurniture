<?php

function custom_theme_support() {
    add_theme_support( 'html5', array(   //add_theme_support() テーマに必要な機能を有効化するための関数
        'search-form',                   //吐き出されるコードをデフォルトの XHTML からHTML5（ Living Standard ）に
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    add_theme_support( 'post-thumbnails' );  //投稿ページでアイキャッチ画像を扱えるようにする
    add_theme_support( 'title-tag' );        //テーマにタイトルタグのサポートを許可する
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support( 'custom-background', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ));
    add_theme_support( 'align-wide' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'editor-styles' );
    add_editor_style();
    add_theme_support( 'automatic-feed-links' );  //RSSフィードリンクを自動的に追加する

    register_block_style(
        'core/paragraph', //ブロックタイプの指定（段落ブロック）
        array(
            'name' => 'custom-style',
            'label' => __( 'Custom Style', 'gigifurniture' ), //第2引数は翻訳ドメイン名で、テーマやプラグインに紐づけるための識別子です。
        )
    );
    register_block_pattern(
        'my-plugin/my-block-pattern', // パターンの名前
        array(
            'title'       => __( 'My Block Pattern', 'gigifurniture' ), // パターンのタイトル
            'description' => _x( 'A custom block pattern for my plugin.', 'Block pattern description', 'gigifurniture' ), // パターンの説明
            'categories'  => array( 'my-pattern-category' ), // パターンのカテゴリー
            'content'     => '<!-- wp:paragraph --><p>' . __( 'This is a custom block pattern.', 'gigifurniture' ) . '</p><!-- /wp:paragraph -->', // パターンの内容);
        )
    );
    register_nav_menus( array(       //カスタムメニューの有効化（管理画面の外観-メニューで編集できるようになる）
        'header-nav' => esc_html__( 'header navigation', 'gigifurniture' ),
        'sidebar-nav' => esc_html__( 'sidebar navigation', 'gigifurniture' ),
        'footer-nav' => esc_html__( 'footer navigation', 'gigifurniture' ), //( 管理画面でのメニュー名 ,翻訳ファイル参照)
        // ↑ 識別キー                    // ↑ 翻訳可能な名前
    ) );
}
add_action( 'after_setup_theme', 'custom_theme_support' );


function readScript() {
    //googleフォントの読み込み  
    wp_enqueue_style( 'google-fonts_Big+Shoulders+Stencil+Text', 'https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Text:wght@100..900&display=swap', array(), ''); //バージョンパラメータを null に設定することで、WordPressは自動的にクエリパラメータを付けないようにします
    wp_enqueue_style( 'google-fonts_Noto+Sans+JP', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap', array(), '');
    wp_enqueue_style( 'google-fonts_Fuzzy+Bubbles', 'https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@400;700&display=swap', array(), '');
    wp_enqueue_style( 'google-fonts_Oswald', 'https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap', array(), '');
    wp_enqueue_style( 'google-fonts_Teko', 'https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap', array(), '');

    wp_enqueue_style( 'style', get_theme_file_uri('/css/style.css'), array(), '1.0.0');
    wp_enqueue_style( 'swiper', get_theme_file_uri('/css/swiper-bundle.min.css'), array(), '11.2.0');
    wp_enqueue_script( 'script', get_theme_file_uri('/js/main.js'), array(), time(), true);
    wp_enqueue_script( 'swiper-script', get_theme_file_uri('/js/swiper-bundle.min.js'), array(), '11.2.0', true);
}
add_action( 'wp_enqueue_scripts', 'readScript' );


// ブロックエディタに適用されるCSSを無効化
function remove_block_library_css() {
    wp_dequeue_style( 'wp-block-library' ); // すべてのブロックCSSを無効にする
}
add_action( 'wp_enqueue_scripts', 'remove_block_library_css' );


//コメントの返信機能を実装するために必要なスクリプトで、コメントの「返信」ボタンをクリックした際に動作します。
function mytheme_enqueue_comment_reply_script() {
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_comment_reply_script' );


//テキストドメインを読み込み
function theme_slug_setup() {
    load_theme_textdomain( 'gigifurniture', get_template_directory() . '/languages' ); //第一引数はテキストドメイン,第二引数は翻訳ファイルの設置場所
}
add_action( 'after_setup_theme', 'theme_slug_setup' );
    

//ウィジェットエリア登録
function my_theme_widgets_init() {
    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );



function my_custom_post_type() {
    $labels = array(
        'name'               => 'アイテム一覧',
        'singular_name'      => 'アイテム',
        'menu_name'          => 'アイテム',
        'add_new'            => '新規追加',
        'add_new_item'       => '新しい投稿を追加',
        'edit_item'          => '投稿を編集',
        'new_item'           => '新しい投稿',
        'view_item'          => '投稿を表示',
        'search_items'       => '投稿を検索',
        'not_found'          => '投稿が見つかりません',
        'not_found_in_trash' => 'ゴミ箱に投稿が見つかりません',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-admin-post',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'rewrite'            => array('slug' => 'item'),
    );

    register_post_type('item', $args);
}
add_action('init', 'my_custom_post_type');
?>