<?php

/*
		検索結果に固定ページを含めない
*/
function SearchFilter($query) {
	if ($query->is_search) { //検索結果ページが表示されている場合
	 $query->set('post_type', 'post'); //投稿タイプが投稿のみ
	}
	return $query;
 }
 
 add_action('pre_get_posts','SearchFilter'); //アクションフック