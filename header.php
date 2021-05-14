<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
// index
if (is_home()) {
  $title = get_bloginfo('name');
  $descri = get_bloginfo('description');
  $type = 'website';
  echo '<link rel="canonical" href="'.get_bloginfo('url').'">'.PHP_EOL;
} else {
  $type = 'article';
  $title = wp_title('|' ,false, 'right').get_bloginfo('name');
  // single
  if (is_single()) {
    global $post;
    // var_dump ($post);
    $descri = $post->post_content;
    $descri = mb_substr(strip_tags($descri), 0, 38);
  }
  // category
  if (is_category()) {
    $descri = 'カテゴリー「'.wp_title('', false).'」の一覧ページ';
    echo '<link rel="canonical" href="'.get_bloginfo('url').$_SERVER['REQUEST_URI'].'">';
  }
  // 404
  if (is_404()) {
    $descri = 'ページが見つからないことを明記したページ';
  }
  // search
  if (is_search()) {
    $descri = '「'.wp_title('', false).'」の一覧ページ';
  }
  // tag
  if (is_tag()) {
    $descri = 'タグ「'.single_tag_title('', false).'」の一覧ページ';
    echo '<link rel="canonical" href="'.get_bloginfo('url').$_SERVER['REQUEST_URI'].'">';
  }
  // page
  if (is_page('All Posts')) {
    $descri = '全てのポストの一覧ページ';
  }
}
$url = get_bloginfo('url').$_SERVER['REQUEST_URI'];
?>
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@siteyuh">
  <meta property="og:title" content="<?=$title?>">
  <meta property="og:description" content="<?=$descri?>">
  <meta property="og:image" content="https://motebody.siteyuh.com/x/wp-content/uploads/cropped-screenshot.png">
  <meta property="og:type" content="<?=$type?>">
  <meta property="og:url" content="<?=$url?>">
  <title><?=$title?></title>
  <link rel="stylesheet" href="/assets/main.css">
  <?php wp_head(); ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-CXZ9BH6QDX"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-CXZ9BH6QDX');
  </script>
</head>
<body>
  <div class="thecontent">
    <header>
      <div class="logo"><a href="/"><img src="/assets/logo.svg" alt="motebody logo"></a></div>
<?php // トップページの場合 
if (is_home()) { ?>
      <h1><?=bloginfo('description')?></h1>
<?php // そのほか 
} else { ?>
      <p class="descri"><?=bloginfo('description')?></p.descri>
<?php // 条件判断の終わり
} ?>
      <nav>
        <div class="menubtn" onclick="toggle_menu()"><img name="menu_btn" src="/assets/menu.svg" alt="menu button"></div>
      </nav>
    </header>
    <div id="main">
      

    