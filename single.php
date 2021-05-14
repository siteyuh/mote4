<?php
/*
single.php
*/

get_header();
echo '<section class="post">';
the_post();
echo '<div class="post-header">';
echo '<h1>'.get_the_title('', '', false).'</h1>';
echo '<p class="date">'.get_the_date().'</p>';
echo '</div>';
the_content();
echo '</section>';

echo '<section class="post-footer">';
echo '<ul class="flexed"><li>カテゴリー: </li>';
$categories = get_the_category();
foreach ($categories as $category) {
  echo '<li><a href="'.esc_url(get_category_link($category->term_id)).'">'.$category->name.'</a></li>';
}
echo '</ul>';
echo get_the_tag_list( '<p class="taglist">タグ: ', '/', '</p>' );
echo '</section>';
?>
<aside class="comment">
  <h3>コメント</h3>
  <p>
    コメントするにはTwitterにアカウントが必要です。<br>
    <a class="tweet-button" href="https://twitter.com/share?url=<?=get_the_permalink()?>&text=@siteyuh" rel="nofollow" target="_blank">Twitterでコメントする</a>
  </p>
</aside>
<?php
get_footer();