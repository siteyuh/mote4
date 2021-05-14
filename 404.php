<?php
// 404
get_header();

echo '<div class="post">'.PHP_EOL;
echo '<section class="notfound">'.PHP_EOL;
echo '<h2 class="title">'.wp_title('', false).'</h2>'.PHP_EOL;
echo '<p>URLを手打ちしてませんか？<br>'.PHP_EOL;
echo 'それか、ポストを消したか下書きにしたかもしれません。</p>'.PHP_EOL;
echo '</section>'.PHP_EOL;

get_template_part('inc/searchform');

echo PHP_EOL.'</div>';
get_footer();
