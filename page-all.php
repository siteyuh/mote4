<?php
/*
  Template Name: All
*/
get_header();

$paged = (int) get_query_var('paged');
$args = array(
 'posts_per_page' => 10003,
 'paged' => $paged,
 'orderby' => 'post_date',
 'order' => 'DESC',
 'post_type' => 'post',
 'post_status' => 'publish'
);
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ) :
  echo '<div class="allposts">';
  echo '<ul>';
  while ( $the_query->have_posts() ) : $the_query->the_post();
    echo '<li><a href="';
    echo the_permalink();
    echo '">';
    echo the_title();
    echo '</a></li>'.PHP_EOL;
  endwhile;
  echo '</ul>';
  echo '</div>';
endif;

wp_reset_postdata();

get_footer();