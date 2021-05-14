<?php
// category
get_header();

echo '<div class="post">';
echo '<span class="small archive-title">検索ワード: '.$_GET['s'].'</span>'.PHP_EOL;
if(have_posts()):
  while(have_posts()):the_post();
    echo '<section class="post-item">';
    echo '<h2 class="title"><a href="';
    echo the_permalink();
    echo '">';
    echo the_title('', '', false).'</a></h2>';
    the_excerpt();
    echo '</section>';
  endwhile;
else:
  echo '検索ワードが入ったポストがありません。<br>';
  echo 'カナにしてみたり、英語にしてみてはいかがでしょう？';
  get_template_part('inc/searchform');
endif;

get_template_part('inc/paging');

echo '</div>';
get_footer();