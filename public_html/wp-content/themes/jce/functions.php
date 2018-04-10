<?php

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 385, 443, true );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 870, 445, true );
add_image_size( 'banner', 960, 500, true );
add_image_size( 'slider', 370, 170, true );
add_image_size( 'news', 140, 100, true );
add_image_size( 'practics', 270, 230, true );

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
	'top'  => __( 'Верхнє меню', 'OK' ),
	'bottom'  => __( 'Нижнє меню', 'OK' ),
) );


/*POSTS > News*/

function change_post_menu_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = 'Новини';
	$submenu['edit.php'][5][0] = 'Новини';
	$submenu['edit.php'][10][0] = 'Додати новину';
	$submenu['edit.php'][15][0] = 'Категорії'; // Change name for categories
	$submenu['edit.php'][16][0] = 'Ключові слова'; // Change name for tags
	echo '';
}

function change_post_object_label() {
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'Новини';
	$labels->singular_name = 'Новина';
	$labels->add_new = 'Додати новину';
	$labels->add_new_item = 'Додати новину';
	$labels->edit_item = 'Редагувати новину';
	$labels->new_item = 'Новина';
	$labels->view_item = 'Дивитись новину';
	$labels->search_items = 'Шукати ноивну';
	$labels->not_found = 'Новин не знайдено';
	$labels->not_found_in_trash = 'Новин не знайдено';
}

function post_adding()
{
	/*$labels = array(
		'name' => _x('Наша команда', 'post type general name', 'OK'),
		'singular_name' => _x('Особа', 'post type singular name', 'OK'),
		'add_new' => _x('Додати особу', 'infobox', 'OK'),
		'add_new_item' => __('Додати нову особу', 'OK'),
		'edit_item' => __('Редагувати особу', 'OK'),
		'new_item' => __('Нова особа', 'OK'),
		'view_item' => __('Дивитись особу', 'OK'),
		'search_items' => __('Шукати особу', 'OK'),
		'not_found' => __('Осіб не знайдено', 'OK'),
		'not_found_in_trash' => __('Осіб не знайдено', 'OK'),
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('thumbnail', 'editor', 'title', 'categories''author','comments')
	);
	register_post_type('team', $args);*/

	$labels = array(
		'name' => _x('Міні-Слайдер', 'post type general name', 'OK'),
		'singular_name' => _x('Слайд', 'post type singular name', 'OK'),
		'add_new' => _x('Додати Слайд', 'infobox', 'OK'),
		'add_new_item' => __('Додати новий Слайд', 'OK'),
		'edit_item' => __('Редагувати Слайд', 'OK'),
		'new_item' => __('Новий Слайд', 'OK'),
		'view_item' => __('Дивитись Слайд', 'OK'),
		'search_items' => __('Шукати Слайд', 'OK'),
		'not_found' => __('Слайдів не знайдено', 'OK'),
		'not_found_in_trash' => __('Слайдів не знайдено', 'OK'),
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('thumbnail', 'title' /*'author','comments'*/)
	);
	register_post_type('slider', $args);

	$labels = array(
		'name' => _x('Слайдер', 'post type general name', 'OK'),
		'singular_name' => _x('Слайд', 'post type singular name', 'OK'),
		'add_new' => _x('Додати Слайд', 'infobox', 'OK'),
		'add_new_item' => __('Додати новий Слайд', 'OK'),
		'edit_item' => __('Редагувати Слайд', 'OK'),
		'new_item' => __('Новий Слайд', 'OK'),
		'view_item' => __('Дивитись Слайд', 'OK'),
		'search_items' => __('Шукати Слайд', 'OK'),
		'not_found' => __('Слайдів не знайдено', 'OK'),
		'not_found_in_trash' => __('Слайдів не знайдено', 'OK'),
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('thumbnail', 'title', 'editor' /*'author','comments'*/)
	);
	register_post_type('slider2', $args);
/*
	$labels = array(
		'name' => _x('Партнери', 'post type general name', 'OK'),
		'singular_name' => _x('Партнер', 'post type singular name', 'OK'),
		'add_new' => _x('Додати партнера', 'infobox', 'OK'),
		'add_new_item' => __('Додати нового партнера', 'OK'),
		'edit_item' => __('Редагувати партнера', 'OK'),
		'new_item' => __('Новий партнер', 'OK'),
		'view_item' => __('Дивитись партнера', 'OK'),
		'search_items' => __('Шукати партнера', 'OK'),
		'not_found' => __('Партнерів не знайдено', 'OK'),
		'not_found_in_trash' => __('Партнерів не знайдено', 'OK'),
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('thumbnail', 'title' 'author','comments')
	);
	register_post_type('partners', $args);

	$labels = array(
		'name' => _x('Практики', 'post type general name', 'OK'),
		'singular_name' => _x('Практика', 'post type singular name', 'OK'),
		'add_new' => _x('Додати практику', 'infobox', 'OK'),
		'add_new_item' => __('Додати нову практику', 'OK'),
		'edit_item' => __('Редагувати практику', 'OK'),
		'new_item' => __('Нова Практика', 'OK'),
		'view_item' => __('Дивитись практику', 'OK'),
		'search_items' => __('Шукати практику', 'OK'),
		'not_found' => __('Практик не знайдено', 'OK'),
		'not_found_in_trash' => __('Практик не знайдено', 'OK'),
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('thumbnail', 'title','editor','tags' 'author','comments')
	);
	register_post_type('practics', $args);*/

}
add_action( 'init', 'change_post_object_label' );
flush_rewrite_rules();
add_action( 'admin_menu', 'change_post_menu_label' );
flush_rewrite_rules();
add_action('init', 'post_adding');
flush_rewrite_rules();

require_once ( get_stylesheet_directory() . '/theme-options.php' );


function numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<nav class="pagination"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link('Назад') );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link('Далі') );

	echo '</ul></nav>' . "\n";

}

function my_connection_types() {
	p2p_register_connection_type( array(
		'name' => 'team_to_practics',
		'from' => 'practics',
		'to' => 'team'
	) );
}
add_action( 'p2p_init', 'my_connection_types' );