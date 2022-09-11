<?php 

// sidebars
if(function_exists('register_sidebar'))
{
	register_sidebar( 'name=Sidebar right&id=sideright');
}

// image sizes
if ( function_exists( 'add_theme_support' ) ) { 

add_theme_support( 'post-thumbnails' );

set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

add_image_size( 'full', 9999, 9999 );

add_image_size( 'full-screen', 1920, 1080, true );

add_image_size( 'thumb', 400, 9999, true );

add_image_size( 'page-title', 1920, 9999 );

add_image_size( 'single-img', 600, 600, true );


}

//admin css

function custom_colors() {
   echo '<style type="text/css">
         #menu-comments {
    display: none !important;
} 
         </style>';
}

add_action('admin_head', 'custom_colors');



if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}


?>