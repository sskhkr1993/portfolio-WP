<?php

function add_files()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;700&family=Montserrat:wght@400;700&display=swap', array());
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/30bd9b4b55.js', array(), NULL);
    wp_enqueue_style('destyle', get_theme_file_uri('/css/destyle.css'), array());
    wp_enqueue_style('style', get_stylesheet_uri(), array());
    wp_enqueue_style('portfolio', get_theme_file_uri('/css/style.css'), array('destyle'));
    wp_enqueue_script('menu', get_theme_file_uri('/js/menu.js'), array('jquery'), '', true);
    wp_enqueue_script('button', get_theme_file_uri('/js/button--nav.js'), array('jquery'), '', true);
    wp_enqueue_script('pagination', get_theme_file_uri('/js/pagination.js'), array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'add_files');

function theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(
        array(
            'header-menu' => 'ヘッダーメニュー',
        )
    );
}
add_action('after_setup_theme', 'theme_setup');

//タイトル出力
function portfolio_title($title)
{
    if (is_front_page() && is_home()) { //トップページなら
        $title = get_bloginfo('name', 'display');
    } elseif (is_singular()) { //シングルページなら
        $title = single_post_title('', false);
    }
    return $title;
}
add_filter('pre_get_document_title', 'portfolio_title');

/* the_archive_title 余計な文字を削除 */
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_date()) {
        $title = get_the_time('Y年n月');
    } elseif (is_search()) {
        $title = '検索結果：' . esc_html(get_search_query(false));
    } elseif (is_404()) {
        $title = '「404」ページが見つかりません';
    } else {
    }
    return $title;
});

add_theme_support('automatic-feed-links');
