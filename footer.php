      </div>
      <footer>
        <ul class="sns">
          <li><a href="https://instagram.com/siteyuh03/" target="_blank"><img src="/assets/instagram.svg" alt="yuhのインスタ"></a></li>
          <li><a href="https://twitter.com/siteyuh" target="_blank"><img src="/assets/twitter.svg" alt="yuhのツイッター"></a></li>
        </ul>
        <p>copyright 2021 yuh All Rights Reserved.</p>
      </footer>
    </div>
    <aside id="toggle_menu" class="menu">
      <div class="cat">
        <h3 class="title">categories</h3>
        <ul class="cat-item">
<?php
$categories = get_categories('pad_counts=1&hide_empty=1');
foreach( $categories as $category ) {
  echo '<li>';
  echo '<a href="'.get_category_link($category->term_id).'">';
  echo $category->name.'</a></li>'.PHP_EOL;
}
?>
        </ul>
      </div>
      <div class="tag">
        <h3 class="title">tag cloud</h3>
        <ul class="tag-item">
          <li>
<?php
wp_tag_cloud( 'smallest=8&largest=22' );
?>
          </li>
        </ul>
      </div>
      <div class="archivelink">
        <h3 class="title">archives</h3>
        <a href="https://motebody.siteyuh.com/archives">ポスト一覧</a>
      </div>
    </aside>
    <script src="/assets/main.js"></script>
  </body>
</html>