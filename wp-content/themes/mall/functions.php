<?

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'main_page');
function main_page()
{

	Container::make('post_meta', __('Контент для главной страницы'))
		->where('post_type', '=', 'page')
		->add_tab(
			__('Первый экран'),
			array(
				Field::make('complex', 'main_slider', 'Слайдер')
					->add_fields(
						array(
							Field::make('image', 'slider_photo', 'Изображение'),
						)
					),
				Field::make('text', 'first_screen_title', 'Заголовок'),
				Field::make('textarea', 'first_screen_text', 'Текст под заголовком'),
				Field::make('text', 'first_screen_title_2', 'Второй заголовок'),
				Field::make('rich_text', 'first_screen_rich_text', __('Текст')),
				Field::make('textarea', 'first_screen_text_2', 'Текст под списком'),
				Field::make('file', 'crb_file', __('Файл для скачивания'))
			)
		)
		->add_tab(
			__('Арендаторы'),
			array(
				Field::make('complex', 'slider_clients', 'Слайдер арендаторов')
					->add_fields(
						array(
							Field::make('image', 'slider_photo', 'Изображение'),
						)
					),
				Field::make('text', 'clients_title', 'Заголовок'),
				Field::make('rich_text', 'clients_rich_text', __('Текст')),
			)
		)
		->add_tab(
			__('Баннеры'),
			array(
				Field::make('complex', 'numbers', 'Цифры')
					->add_fields(
						array(
							Field::make('text', 'numbers_text', 'Текст'),
							Field::make('text', 'numbers_number', 'Цифра'),
						)
					),
				Field::make('image', 'banner_1', 'Баннер_1'),
				Field::make('image', 'banner_2', 'Баннер_2'),

			)
		)
		->add_tab(
			__('Галерея'),
			array(
				Field::make('image', 'banner_3', 'Баннер_3'),
				Field::make('image', 'banner_4', 'Баннер_4'),
				Field::make('image', 'banner_5', 'Баннер_5'),
			)
		);

}

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

add_filter( 'use_block_editor_for_post_type', '__return_false' );


// для дополнительных опций темы
// add_action('carbon_fields_register_fields', 'crb_attach_page_options');
// function crb_attach_page_options()
// {
// 	Container::make('theme_options', __('Theme Options'))
// 		->add_fields(
// 			array(
// 				Field::make('complex', 'slider_slider', 'Слайдер')
// 					->add_fields(
// 						array(
// 							Field::make('image', 'photo', 'Slide Photo'),
// 						)
// 					),
// 				Field::make('text', 'truemisha_h1', 'Заголовок'),
// 				Field::make('textarea', 'truemisha_p', 'Текст под заголовком'),
// 				Field::make('rich_text', 'crb_sidenote', __('Большой текст')),
// 				Field::make('checkbox', 'crb_show_content', 'Показать доп. контент'),
// 			)
// 		);
// }

// отключил пока. потому все работает на carbon fields
// add_theme_support('title-tag');
// add_theme_support(
// 	'post-formats',
// 	array(
// 		'link',
// 		'aside',
// 		'gallery',
// 		'image',
// 		'quote',
// 		'status',
// 		'video',
// 		'audio',
// 		'chat',
// 	)
// );
// add_theme_support('post-thumbnails');
// set_post_thumbnail_size(1568, 9999);
