<?php register_nav_menus( array(
	'pages' => __( 'Menu Pages')
));

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');