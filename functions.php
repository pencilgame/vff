<?php





if ( function_exists('register_sidebars') )

register_sidebars(4);





function register_my_menus() {

  register_nav_menus(

    array( 'main-menu' => __( 'Main Menu' ), 'menu-1' => __( 'Menu 1' ), 'menu-2' => __( 'Menu 2' ), 'menu-3' => __( 'Menu 3' ), 'menu-4' => __( 'Menu 4' ))

  );

}



add_action( 'init', 'register_my_menus' );







if ( function_exists('register_sidebar') ) {

	register_sidebar(array(

		'before_widget' => '<li id="%1$s" class="widget %2$s">',

		'after_widget' => '</li>',

		'before_title' => '<h2>',

		'after_title' => '</h2>',

	));

}







if ( function_exists( 'add_theme_support' ) ) {

	add_theme_support( 'post-thumbnails' );

}



function new_excerpt_more($more) {

       global $post;

	return '...&nbsp;&nbsp;<a href="'. get_permalink($post->ID) . '">' . 'MORE>' . '</a>';

}

add_filter('excerpt_more', 'new_excerpt_more');



function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );







function excerpt($limit) {

  $excerpt = explode(' ', get_the_excerpt(), $limit);

  if (count($excerpt)>=$limit) {

    array_pop($excerpt);

    $excerpt = implode(" ",$excerpt).'...';

  } else {

    $excerpt = implode(" ",$excerpt);

  }

  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);

  return $excerpt;

}



function content($limit) {

  $content = explode(' ', get_the_content(), $limit);

  if (count($content)>=$limit) {

    array_pop($content);

    $content = implode(" ",$content).'...';

  } else {

    $content = implode(" ",$content);

  }

  $content = preg_replace('/[.+]/','', $content);

  $content = apply_filters('the_content', $content);

  $content = str_replace(']]>', ']]&gt;', $content);

  return $content;

}













// add category nicenames in body and post class

function category_id_class($classes) {

	global $post;

	foreach((get_the_category($post->ID)) as $category)

		$classes[] = $category->category_nicename;

	return $classes;

}

add_filter('post_class', 'category_id_class');

add_filter('body_class', 'category_id_class');





// CATEGORY SINGLE TEMPLATES :: single-{category_slug}.php
add_filter( 'single_template',
    create_function( '$t', 'foreach( (array) get_the_category() as $cat ) {
        if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-{$cat->slug}.php";
    } return $t;' ) );



// CATEGORY ARCHIVE TEMPLATES :: archive-{category_slug}.php
add_filter( 'archive_template',
    create_function( '$t', 'foreach( (array) get_the_category() as $cat ) {
        if ( file_exists(TEMPLATEPATH . "/archive-{$cat->slug}.php") ) return TEMPLATEPATH . "/archive-{$cat->slug}.php";
    } return $t;' ) );





?>