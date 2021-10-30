<?php
get_header();

if(have_posts()):
  echo '<div class="topframe">'.PHP_EOL;
  echo '<section id="latestposts" class="top-item">'.PHP_EOL;
  echo '<h2 class="title">近ごろのポスト</h2>'.PHP_EOL;
  echo '<ul>'.PHP_EOL;
  while(have_posts()):the_post();
    echo '<li><a href="';
    the_permalink();
    echo '">'.the_title('', '', false).'</a></li>'.PHP_EOL;
  endwhile;
  echo '</ul>'.PHP_EOL;
  echo '</section>'.PHP_EOL;
endif;

echo '<section id="profile" class="top-item">';
echo '<h2 class="title">プロフィール</h2>';
readfile ('https://motebody.siteyuh.com/prof/');
echo '</section>';
echo '<section id="style" class="top-item">';
echo '<h2 class="title">スタイル</h2>';
readfile ('https://motebody.siteyuh.com/stl/');
echo '<div class="tablewrap">'.PHP_EOL;
echo '<table>'.PHP_EOL;
echo '<thead><tr><th>日時</th><th>体重</th><th>体脂肪率</th></tr></thead>'.PHP_EOL;
echo '<tbody>'.PHP_EOL;
$result = file('https://motebody.siteyuh.com/inc/bodydata.csv');
$result = array_reverse($result);
for ( $i = 0; $i < sizeof( $result ); $i++ ) {
  list($date, $weight, $bodyfat) = explode( ",", $result[ $i ] );
  echo '<tr><td>'.str_replace('-', '.', $date).'</td><td>'.$weight.'&nbsp;kg</td><td>'.substr($bodyfat, 0, -1).'&#37;</td></tr>'.PHP_EOL;
}
echo '</tbody>'.PHP_EOL;
echo '</table>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</section>'.PHP_EOL;
echo '</div>'.PHP_EOL;

get_footer();