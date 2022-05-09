<?php
/**************************************************
CSSファイルの読み込み
**************************************************/
function my_enqueue_styles() {
    wp_enqueue_style("reset", get_theme_file_uri()."/assets/css/reset.css", array(), false, "all"); // true:body閉じタグの直前で読み込み all:screen・printのすべてのメディアタイプでcssを読み込む
    wp_enqueue_style("style", get_theme_file_uri()."/style.css", array("reset"), false, "all"); // true:body閉じタグの直前で読み込み all:screen・printのすべてのメディアタイプでcssを読み込む
}
add_action("wp_enqueue_scripts", "my_enqueue_styles");

/**************************************************
JSファイルの読み込み
**************************************************/
function my_enqueue_scripts() {
    wp_enqueue_script("main", get_theme_file_uri()."/assets/js/main.js", array(), false, true); // false:wpのバージョン番号がhrefの最後に付与  all:screen・printのすべてのメディアタイプでcssを読み込む
}
add_action("wp_enqueue_scripts", "my_enqueue_scripts");

/**************************************************
ペジネーション
**************************************************/
function pagination() {
    
}

/**************************************************
 bodyタグ直後にコード挿入
**************************************************/
add_action( 'wp_body_open', function() {
	?>
	<!-- ここから挿入したいソースコードなどスタート -->
	<!-- ここまで -->
	<?php
});

/**************************************************
 titleタグ出力
**************************************************/
add_theme_support("title-tag");

/**************************************************
 titleにキャッチフレーズを含めないようにする
**************************************************/
function my_remove_title_tagline($title) {
  if (isset($title["tagline"])) {
    unset($title["tagline"]);
	}   
	
	return $title;
}
add_filter("document_title_parts", "my_remove_title_tagline");

/**************************************************
 サムネイルを使用可能にする
**************************************************/
add_theme_support("post-thumbnails");

/**************************************************
 ショートコード
**************************************************/
function my_shortcode($atts) {
	return "<img src=".get_template_directory_uri().".".$atts[0]." alt="."メインビジュアル"." width="."1280"." height="."405". " class="."mainvisual-container__img".">";
}
add_shortcode("work-img-path", "my_shortcode");

/**************************************************
 グローバルナビゲーションを管理画面で作成可能にする
**************************************************/
