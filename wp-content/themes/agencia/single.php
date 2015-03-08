<?php

$post = $wp_query->post;

if(get_post_type() == 'news-post')
	include(TEMPLATEPATH . '/single-news.php');
elseif(get_post_type() == 'event-post')
	include(TEMPLATEPATH . '/single-event.php');
?>