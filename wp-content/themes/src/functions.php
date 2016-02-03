<?php

// JS detection
function twentyfifteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}

add_action( 'wp_head', 'twentyfifteen_javascript_detection', 0 );

/*Enqueue scripts and styles.*/

function theme_styles() {
	/* Core CSS -->*/
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '', true );

}

add_action( 'wp_enqueue_scripts', 'theme_js' );

add_theme_support( 'menus' );

// Navigation Menus
function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' )
		)
	);
}

/**
 * Display the post content. Optinally allows post ID to be passed
 * @uses the_content()
 *
 * @param int $id Optional. Post ID.
 * @param string $more_link_text Optional. Content for when there is more text.
 * @param bool $stripteaser Optional. Strip teaser content before the more text. Default is false.
 */

function show_the_content_by_id( $post_id = 0, $more_link_text = null, $stripteaser = false ) {
	global $post;
	$post = &get_post( $post_id );
	setup_postdata( $post, $more_link_text, $stripteaser );
	the_content();
	wp_reset_postdata( $post );
}

function show_the_content_by_id_with_title( $post_id = 0, $more_link_text = null, $stripteaser = false ) {
	global $post;
	$post = &get_post( $post_id );
	setup_postdata( $post, $more_link_text, $stripteaser );
	?>
	<h1><?php the_title(); ?><h1><?php
	the_content();
	wp_reset_postdata( $post );
}

/*Add theme support- theme format*/

function custom_theme_setup() {
	add_theme_support( 'post-formats', array( 'aside', 'link', 'quote' ) );
	// add featured image support
	add_theme_support( 'post-thumbnails' );
	//add search form support
	add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );


// add Widget Locations

function add_Widgets_Init() {

	register_sidebar( array(
		'name' => 'social',
		'id'   => 'sidebar1',
    ));
}

add_action( 'widgets_init', 'add_Widgets_Init' );

function my_meta_box() {
	add_meta_box(
		'my_meta_box', // Идентификатор(id)
		'Дополнительные поля', // Заголовок области с мета-полями(title)
		'show_my_metabox', // Вызов(callback)
		'post', // Где будет отображаться наше поле, в нашем случае в Записях
		'normal',
		'high');
}
add_action('add_meta_boxes', 'my_meta_box'); // Запускаем функцию

$meta_fields = array(
	array(
		'label' => 'Короткий заголовок для поста',
		'desc'  => ' ',
		'id'    => 'short_name', // даем идентификатор.
		'type'  => 'text'  // Указываем тип поля.
	),
	array(
		'label' => 'Большое текстовое поле',
		'desc'  => 'Описание для поля.',
		'id'    => 'mytextarea',  // даем идентификатор.
		'type'  => 'textarea'  // Указываем тип поля.
	),
	array(
		'label' => 'Чекбоксы (флажки)',
		'desc'  => 'Описание для поля.',
		'id'    => 'mycheckbox',  // даем идентификатор.
		'type'  => 'checkbox'  // Указываем тип поля.
	),
	array(
		'label' => 'Всплывающий список',
		'desc'  => 'Описание для поля.',
		'id'    => 'myselect',
		'type'  => 'select',
		'options' => array (  // Параметры, всплывающие данные
			'one' => array (
				'label' => 'Вариант 1',  // Название поля
				'value' => '1'  // Значение
			),
			'two' => array (
				'label' => 'Вариант 2',  // Название поля
				'value' => '2'  // Значение
			),
			'three' => array (
				'label' => 'Вариант 3',  // Название поля
				'value' => '3'  // Значение
			)
		)
	)
);

// Вызов метаполей
function show_my_metabox() {
	global $meta_fields; // Обозначим наш массив с полями глобальным
	global $post;  // Глобальный $post для получения id создаваемого/редактируемого поста
// Выводим скрытый input, для верификации. Безопасность прежде всего!
	echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

	// Начинаем выводить таблицу с полями через цикл
	echo '<table class="form-table">';
	foreach ($meta_fields as $field) {
		// Получаем значение если оно есть для этого поля
		$meta = get_post_meta($post->ID, $field['id'], true);
		// Начинаем выводить таблицу
		echo '<tr>
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
                <td>';
		switch($field['type']) {
			case 'text':
				echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
        <br /><span class="description">'.$field['desc'].'</span>';
				break;
			case 'textarea':
				echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" cols="60" rows="4">'.$meta.'</textarea>
        <br /><span class="description">'.$field['desc'].'</span>';
				break;
			case 'checkbox':
				echo '<input type="checkbox" name="'.$field['id'].'" id="'.$field['id'].'" ',$meta ? ' checked="checked"' : '','/>
        <label for="'.$field['id'].'">'.$field['desc'].'</label>';
				break;
// Всплывающий список
			case 'select':
				echo '<select name="'.$field['id'].'" id="'.$field['id'].'">';
				foreach ($field['options'] as $option) {
					echo '<option', $meta == $option['value'] ? ' selected="selected"' : '', ' value="'.$option['value'].'">'.$option['label'].'</option>';
				}
				echo '</select><br /><span class="description">'.$field['desc'].'</span>';
				break;
		}
		echo '</td></tr>';
	}
	echo '</table>';
}

// Пишем функцию для сохранения
function save_my_meta_fields($post_id) {
	global $meta_fields;  // Массив с нашими полями

	// проверяем наш проверочный код
	if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__)))
		return $post_id;
	// Проверяем авто-сохранение
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return $post_id;
	// Проверяем права доступа
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id))
			return $post_id;
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}

	// Если все отлично, прогоняем массив через foreach
	foreach ($meta_fields as $field) {
		$old = get_post_meta($post_id, $field['id'], true); // Получаем старые данные (если они есть), для сверки
		$new = $_POST[$field['id']];
		if ($new && $new != $old) {  // Если данные новые
			update_post_meta($post_id, $field['id'], $new); // Обновляем данные
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old); // Если данных нету, удаляем мету.
		}
	} // end foreach
}
add_action('save_post', 'save_my_meta_fields'); // Запускаем функцию сохранения

function wpb_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );

	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'wpb_imagelink_setup', 10);


//remove_action( 'wp_head', 'rsd_link' );
//remove_action( 'wp_head', 'generator' );
//remove_action( 'wp_head', 'wlwmanifest_link' );

//remove_filter('term_description','wpautop'); //echo the string with <p> tags around the paragraphs
//remove_filter( 'the_content', 'wpautop' );
//remove_filter( 'comment_text', 'wpautop' );

?>