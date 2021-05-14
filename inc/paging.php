<?php
echo '<aside class="paging">';
$big = 9999999999;
$arg = array(
  'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
  'current' => max( 1, get_query_var('paged') ),
  'total'   => $wp_query->max_num_pages,
  'prev_text' => '&lsaquo; 新しいポスト',
  'next_text' => '古いポスト &rsaquo;'
);
echo paginate_links($arg);
echo '</aside>';