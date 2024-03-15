<?

add_theme_support('title-tag');
add_theme_support(
	'post-formats',
	array(
		'link',
		'aside',
		'gallery',
		'image',
		'quote',
		'status',
		'video',
		'audio',
		'chat',
	)
);
add_theme_support('post-thumbnails');
set_post_thumbnail_size(1568, 9999);
register_nav_menus(
	array(
		'primary' => esc_html__('Primary menu', 'twentytwentyone'),
		'footer' => esc_html__('Secondary menu', 'twentytwentyone'),
	)
);
add_theme_support(
	'html5',
	array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
		'navigation-widgets',
	)
);
register_sidebar(
	array(
		'name' => esc_html__('Footer', 'twentytwentyone'),
		'id' => 'sidebar-1',
		'description' => esc_html__('Add widgets here to appear in your footer.', 'twentytwentyone'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	)
);
