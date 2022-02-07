<?php
//禁止直接访问本php
if ( 'POST' != $_SERVER['REQUEST_METHOD'] ) {
        header('Allow: POST');
        header('HTTP/1.1 405 Method Not Allowed');
        header('Content-Type: text/plain');
        exit;
}
require( dirname(__FILE__) . '/../../../wp-load.php' );
nocache_headers();
 
$post_ID = $_POST['postviews_id'];
$post_views = (int)get_post_meta($post_ID, 'views', true);
update_post_meta($post_ID, 'views', ($post_views+1));
?>
