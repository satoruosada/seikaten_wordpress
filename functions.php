<?php
add_action('init', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // メニューをサポート
    register_nav_menus([
        'main_menu' => 'メインメニュー',
    ]);
});

/*アイキャッチ画像がなければ、標準画像を取得する*/
function get_eyecatch_with_default()
{
    if (has_post_thumbnail()) :
        $id = get_post_thumbnail_id();
        $img = wp_get_attachment_image_src($id, 'large');
    // else :
    //     $img = array(get_template_directory_uri() . '/img/hero_image.png');
    endif;

    return $img;
}

