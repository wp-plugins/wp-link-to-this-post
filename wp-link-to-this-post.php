<?php
/*
Plugin Name: WP Link To This Post
Plugin URI: http://en.ozhandonder.net/wp-link-to-this-post
Description: Make it easy for others to link back to your posts
Version: 1.0
Author: Ozhan Donder
Author URI: http://www.ozhandonder.net
*/



function link_data_code($content) {
	
	$my_post_title = get_the_title();
	$my_post_link =get_permalink();

if( is_single() ) {	
	$content .= '<h5>Link to this post:</h5>'.'<p style="border: 1px solid #ddd;padding: 10px 20px; background: #eee; border-radius: 4px;">'.'&lt;a href="'.$my_post_link.'"&gt;'.$my_post_title.'&lt;/a&gt;'.'</p>';

}	
	return $content;
}

add_filter( 'the_content', 'link_data_code' );

?>