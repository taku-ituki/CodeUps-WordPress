<?php
// CSSとJavaScriptの読み込み
function my_script_init() {  
    wp_deregister_script('jquery'); 
    wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), '8.4.7');
    wp_enqueue_style( 'NotoSansJP', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap' );
    wp_enqueue_style( 'Noto+Serif+JP', 'https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;500;700&display=swap' );
    wp_enqueue_style( 'Goto', 'https://fonts.googleapis.com/css2?family=Gotu&display=swap' );
    wp_enqueue_style( 'Lato', 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap' );
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), '3.6.0', true);
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '8.4.7', true);
    wp_enqueue_script('jquery-animation', get_template_directory_uri() . '/dist/assets/js/jquery.inview-master/jquery.inview.min.js', array('jquery'), null, true);
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/dist/assets/js/script.js', array('jquery'), '1.0.1', true);
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/dist/assets/css/style.css', array(), '1.0.1');
}
add_action('wp_enqueue_scripts', 'my_script_init');

// テーマのサポートを追加
function my_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );
}
add_action('after_setup_theme', 'my_setup');

//////////キャンペーンページ//////////

//campaignページ 記事の表示件数設定
function set_campaign_list_posts_per_page( $query ) {
    // WordPressの管理画面じゃなくて、サイトの画面のときだけ動かすよ
    if ( ! is_admin() && $query->is_main_query() && is_post_type_archive('campaign_list') ) {
        $query->set( 'posts_per_page', 4 );  // 1ページに4件表示するようにする
    }
}
// 上で作ったルールを、WordPressに使ってもらうように登録
add_action( 'pre_get_posts', 'set_campaign_list_posts_per_page' );





////////// お問い合わせページ//////////

// 自動挿入される<p>タグを無効化
add_action('init', function() {
    remove_filter('the_content', 'wpautop');
});

// Breadcrumb NavXT の <p> タグを無効にする
add_filter('bcn_display', function($breadcrumb) {
    return shortcode_unautop($breadcrumb);
}, 10, 1);

// Contact Form 7 の <p> タグを無効にする
add_filter('wpcf7_autop_or_not', '__return_false');

// カスタム送信ボタンショートコードの作成
function custom_submit_button_shortcode() {
    return '
    <div class="page-contact__btn-wrap">
        <div class="contact__btn-wrap">
            <button type="submit" class="common-btn">
                <span>send</span>
            </button>
        </div>
    </div>';
}
add_shortcode('custom_submit_button', 'custom_submit_button_shortcode');

// Contact Form 7 の送信ボタンをカスタムHTMLに置換
function custom_wpcf7_form_elements($content) {
    $custom_button = do_shortcode('[custom_submit_button]');
    $content = preg_replace('/<input[^>]*type="submit"[^>]*>/', $custom_button, $content);
    return $content;
}
add_filter('wpcf7_form_elements', 'custom_wpcf7_form_elements');



////////// ブログ //////////
/* 「投稿」名称変更 */
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $name = 'ブログ';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name.'一覧';
    $submenu['edit.php'][10][0] = '新しい'.$name;
   }
   function change_post_object_label() {
    global $wp_post_types;
    $name = 'ブログ';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name.'の新規追加';
    $labels->edit_item = $name.'の編集';
    $labels->new_item = '新規'.$name;
    $labels->view_item = $name.'を表示';
    $labels->search_items = $name.'を検索';
    $labels->not_found = $name.'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
   }
   add_action( 'init', 'change_post_object_label' );
   add_action( 'admin_menu', 'change_post_menu_label' );

   
   
// 閲覧数をカウントする設定（サイドバー）
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// 閲覧数取得
function getPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);

    if ($count == '') { // カウントがなければ0をセット
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }

    return $count . ' Views';
}

// 管理画面に閲覧数項目を追加する
function add_views_column($columns) {
    $columns['views'] = '閲覧数';
    return $columns;
}
add_filter('manage_posts_columns', 'add_views_column'); // 投稿ページに追加

// 管理画面にページビュー数を表示する
function add_views_column_data($column, $post_id) {
    if ($column === 'views') {
        echo getPostViews($post_id); // 閲覧数を取得する
    }
}
add_action('manage_posts_custom_column', 'add_views_column_data', 10, 2); // 投稿ページに追加

// 閲覧数項目を並び替え可能にする
function add_sortable_views_column($columns) {
    $columns['views'] = 'views';
    return $columns;
}
add_filter('manage_edit-post_sortable_columns', 'add_sortable_views_column'); // 投稿ページに追加

// 閲覧数クリックで並び替えを実行
function sort_views_column($query) {
    if (!is_admin()) {
        return;
    }

    $orderby = $query->get('orderby');
    if ($orderby === 'views') {
        $query->set('meta_key', 'post_views_count');
        $query->set('orderby', 'meta_value_num');
    }
}
add_action('pre_get_posts', 'sort_views_column');

function dynamic_field_values( $tag, $unused ) {
    if ( $tag['name'] != 'campaign_list_select' )  // Contact Form 7内に記入するフィールド名（独自のフォームタグ名）
        return $tag;

    // 初期表示の項目を追加
    $tag['raw_values'][] = 'キャンペーン内容を選択';
    $tag['values'][] = '';
    $tag['labels'][] = 'キャンペーン内容を選択';

    $args = array (
        'posts_per_page' => -1, // 全件取得（制限が必要な場合は数値を指定）
        'post_type'      => 'campaign_list', // カスタム投稿タイプ名（投稿タイプスラッグ）
        'orderby'        => 'title', // タイトルでソート
        'order'          => 'ASC', // 昇順
    );
    $custom_posts = get_posts($args);
    if ( ! $custom_posts )
        return $tag;

    foreach ( $custom_posts as $custom_post ) {
        $tag['raw_values'][] = $custom_post->post_title;
        $tag['values'][] = $custom_post->post_title;
        $tag['labels'][] = $custom_post->post_title;
    }
    return $tag;
}
add_filter( 'wpcf7_form_tag', 'dynamic_field_values', 30, 2);

//wordpressのバージョン隠す（攻撃のリスク軽減）
remove_action('wp_head','wp_generator');


////////// お客様の声//////////
// 'voice_list' カスタム投稿タイプの一覧表示件数を6件に変更
function set_voice_list_posts_per_page($query) {
    // 管理画面ではなく、メインクエリかつアーカイブページでのみ適用
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('voice_list')) {
        $query->set('posts_per_page', 6); // 表示件数を6件に設定
    }
}
add_action('pre_get_posts', 'set_voice_list_posts_per_page');


////////// 管理画面 //////////

// Contact Form 7 のメニュー位置を変更してダッシュボードのすぐ下に表示する
function move_contactform7_menu() {
    // Contact Form 7 の既存メニューを削除
    remove_menu_page('wpcf7');

    // 新しい位置に Contact Form 7 のメニューを追加
    add_menu_page(
        'Contact Form 7',             // メニューのタイトル
        'お問い合わせ',                // 管理画面に表示される名前
        'manage_options',             // 権限レベル
        'wpcf7',                      // メニューのスラッグ
        'wpcf7',                      // 表示するページの関数
        'dashicons-email-alt',         // アイコン
        12                             // メニューの位置 (ダッシュボード直後に表示)
    );
}
add_action('admin_menu', 'move_contactform7_menu', 999);


// メディアメニューの位置を変更する
function move_media_menu() {
    // 既存のメディアメニューを削除
    remove_menu_page('upload.php');

    // 新しい位置にメディアメニューを追加
    add_menu_page(
        'メディア',                 // メニューのタイトル
        'メディア',                 // 管理画面に表示される名前
        'upload_files',             // 権限レベル
        'upload.php',               // メニューのスラッグ
        '',                         // 表示するページの関数（デフォルトは空）
        'dashicons-admin-media',    // アイコン
        30                          // メニューの位置
    );
}
 //利用規約とプライバシーポリシーページ  クラス名を管理画面へ反映
function add_custom_classes_by_page($content) {
    if (is_page('terms')) { // 利用規約ページの場合（スラッグが 'terms'）
        // 利用規約ページ用のクラスを適用
        $content = str_replace('<ul>', '<ul class="page-terms__description-numbers">', $content);
        $content = str_replace('<ol>', '<ol class="page-terms__description-numbers">', $content);
        $content = str_replace('<li>', '<li class="page-terms__description-number">', $content);
        $content = str_replace('<p>', '<p class="page-terms__description-text">', $content);
        $content = str_replace('<h3>', '<h3 class="page-terms__term">', $content);
        $content = str_replace('<dd>', '<dd class="page-terms__description">', $content);
    } elseif (is_page('privacy')) { // プライバシーポリシーページの場合（スラッグが 'privacy-policy'）
        // プライバシーポリシー用のクラスを適用
        $content = str_replace('<ul>', '<ul class="page-privacy__description-numbers">', $content);
        $content = str_replace('<ol>', '<ol class="page-privacy__description-numbers">', $content);
        $content = str_replace('<li>', '<li class="page-privacy__description-number">', $content);
        $content = str_replace('<p>', '<p class="page-privacy__description-text">', $content);
        $content = str_replace('<h3>', '<h3 class="page-privacy__term">', $content);
        $content = str_replace('<dd>', '<dd class="page-privacy__description">', $content);
    }
    return $content;
}