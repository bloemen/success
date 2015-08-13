<?php

/**
 * インクルード
 */
 

/**
 * CSS・JS の読み込み
 */
function mnc_wp_enqueue_scripts() {
  
  wp_dequeue_style('main-css');
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array('base-css') );
  wp_enqueue_style( 'child-base-style', get_stylesheet_directory_uri() . '/base.css', array('parent-style'));
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/css/style.css', array( 'parent-style', 'child-base-style' ) );
  wp_enqueue_script( 'wideslider', get_stylesheet_directory_uri() . '/js/wideslider.js', array('jquery'), '', true );
  wp_enqueue_style( 'chil-main-style', get_stylesheet_uri(), array( 'child-style', 'child-base-style' ) );
  wp_enqueue_script('jquery-ui-tabs');
  wp_enqueue_script('jquery-easing', '//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array('jquery'));
  wp_enqueue_script('tab', get_stylesheet_directory_uri() . '/js/tab.js', array('jquery'));
  wp_enqueue_script('smoothScroll', get_stylesheet_directory_uri() . '/js/smoothScroll.js', array());
}
add_action( 'wp_enqueue_scripts', 'mnc_wp_enqueue_scripts' );

// 画像の設定
add_image_size('index_thumb', 234, 144, true);
add_image_size('single_thumb', 300, 204, true);

// 

function my_theme_add_editor_styles() {
    global $post;

    $my_post_type = 'post';

    // 新規投稿 (initフック).
    if ( stristr( $_SERVER['REQUEST_URI'], 'post-new.php' ) !== false
            && ( isset( $_GET['post_type'] ) === true && $my_post_type == $_GET['post_type'] ) ) {
        add_editor_style( get_stylesheet_directory_uri()
            . '/css/editor-style-' . $my_post_type . '.css' );
    }

    // 投稿の編集 (pre_get_postsフック).
    if ( stristr( $_SERVER['REQUEST_URI'], 'post.php' ) !== false
            && is_object( $post )
            && $my_post_type == get_post_type( $post->ID ) ) {
        add_editor_style( get_stylesheet_directory_uri()
            . '/css/editor-style-' . $my_post_type . '.css' );
    }
}
add_action( 'init', 'my_theme_add_editor_styles' );
add_action( 'pre_get_posts', 'my_theme_add_editor_styles' );