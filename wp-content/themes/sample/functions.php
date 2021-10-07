<?php

function custom_theme_assets() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );


function mytheme_breadcrumb() {
	// $sep = '>';
	// echo '<li><a href="'.get_bloginfo('url').'" >HOME</a></li>';
	echo '<li>HOME</li>';
	// echo $sep;
	if( is_singular() ) {
		if ( is_single() ) {
			$cats = get_the_category();
			if( isset($cats[0]->term_id) ) $cat_id = $cats[0]->term_id;
			$cat_list = array();
			while ($cat_id != 0){
				$cat = get_category( $cat_id );
				// $cat_link = get_category_link( $cat_id );
				// array_unshift( $cat_list, '<a href="'.$cat_link.'">'.$cat->name.'</a>' );
				array_unshift( $cat_list, $cat->name);
				$cat_id = $cat->parent;
			}
			foreach($cat_list as $value){
				echo '<li>'.$value.'</li>';
				// echo $sep;
			}
		}
		the_title('<li>', '</li>');
	}
}
?>

