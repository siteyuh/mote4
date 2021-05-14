<?php
// category
get_header();

echo '<div class="post">';
if (is_category()) { $sortname = 'category: '.wp_title('', false); }
if (is_tag()) { $sortname = 'tag: '.single_tag_title('', false); }
echo '<span class="small archive-title">'.$sortname.'</span>'.PHP_EOL;
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
endif;

get_template_part('inc/paging');

echo '</div>';

get_footer();