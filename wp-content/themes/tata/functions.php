<?php
/**
 * Функции шаблона (function.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
/* подключение js, css */
//Стили
function register_styles() {
    /* CSS */
    wp_register_style('tooltip-classic.css', get_template_directory_uri() . '/css/tooltip-classic.css');
    wp_enqueue_style('tooltip-classic.css');
    
    wp_register_style('nouislider.css', get_template_directory_uri() . '/css/nouislider.css');
    wp_enqueue_style('nouislider.css');

    wp_register_style('formstyler.css', get_template_directory_uri() . '/css/formstyler.css');
    wp_enqueue_style('formstyler.css');

    wp_register_style('fancybox.css', get_template_directory_uri() . '/css/fancybox.css');
    wp_enqueue_style('fancybox.css');

    wp_register_style('swiper', get_template_directory_uri() . '/css/swiper.css');
    wp_enqueue_style('swiper');

    wp_register_style('mCustomScrollbar', get_template_directory_uri() . '/css/mCustomScrollbar.css');
    wp_enqueue_style('mCustomScrollbar');

    wp_register_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('style');

    wp_register_style('style_index', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style_index');
    
    wp_register_style('responsive.css', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('responsive.css');

    wp_register_style('rating.css', get_template_directory_uri() . '/ratings/rating.css');
    wp_enqueue_style('rating.css');

    wp_register_style('googlefont', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext');
    wp_enqueue_style('googlefont');
    
    wp_register_style('font-awesome.min', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
    wp_enqueue_style('font-awesome.min');

    wp_register_style('font-awesome.min', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
    wp_enqueue_style('font-awesome.min');


    
}

function load_my_style_script_header() {
    /* JS */
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js');
    wp_enqueue_script('jquery');
}

function load_my_style_script_footer() {
    /* JS */
    
    wp_register_script('script.js', get_template_directory_uri() . '/js/script.js');
    wp_enqueue_script('script.js');
    
    wp_register_script('swiper.min.js', get_template_directory_uri() . '/js/swiper.min.js');
    wp_enqueue_script('swiper.min.js');

    wp_register_script('fancybox.min.js', get_template_directory_uri() . '/js/fancybox.min.js');
    wp_enqueue_script('fancybox.min.js');

    wp_register_script('formstyler.js', get_template_directory_uri() . '/js/formstyler.js');
    wp_enqueue_script('formstyler.js');

    wp_register_script('nouislider.min.js', get_template_directory_uri() . '/js/nouislider.min.js');
    wp_enqueue_script('nouislider.min.js');

    wp_register_script('mCustomScrollbar.concat.min.js', get_template_directory_uri() . '/js/mCustomScrollbar.concat.min.js');
    wp_enqueue_script('mCustomScrollbar.concat.min.js');

    wp_register_script('rating.js', get_template_directory_uri() . '/ratings/rating.js');
    wp_enqueue_script('rating.js');
}

//Регистрация Css и Js в footer для GoogleSpeed
add_action( 'wp_enqueue_scripts', 'register_styles' );
add_action( 'get_header', 'load_my_style_script_header' );
add_action( 'get_footer', 'load_my_style_script_footer');




/* Переопределенные Woo function */
function woocommerce_template_loop_product_link_open() {
    global $product;

    $link = apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product );
}

function woocommerce_template_loop_product_thumbnail() {
  echo '<a href="'. get_the_permalink() . '" class="product_img">';
  echo woocommerce_get_product_thumbnail();
  echo "</a>";
}

function woocommerce_template_loop_product_title() {
    echo '<a class="product_title" href="' . get_the_permalink(). '">' . get_the_title() . '</a>';
}

function woocommerce_template_loop_product_link_close() {
    
}

add_filter('woocommerce_add_to_cart_fragments', 'change_add_to_cart',35);
function change_add_to_cart($arr){
  $html = '<span>' . sprintf( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count()) . '
<script>
  $(".jq-number__spin").click(function(event) {

  var val = Number($(this).parent(".jq-number").find("input").val());
  if($(this).hasClass("minus"))
  {
    if(val>1){
      val = val - 1;
    }
  } 
  else if($(this).hasClass("plus"))
  {
    val = val + 1;
  }
  $(this).parent(".jq-number").find("input").val(Number(val));

  $("[name=update_cart]").removeAttr("disabled");
  $("[name=update_cart]").trigger("click");
});
</script></span>';

  return['div.basket span' => $html];
}


function woocommerce_form_field( $key, $args, $value = null ) {
    $defaults = array(
      'type'              => 'text',
      'label'             => '',
      'description'       => '',
      'placeholder'       => '',
      'maxlength'         => false,
      'required'          => false,
      'autocomplete'      => false,
      'id'                => $key,
      'class'             => array(),
      'label_class'       => array(),
      'input_class'       => array(),
      'return'            => false,
      'options'           => array(),
      'custom_attributes' => array(),
      'validate'          => array(),
      'default'           => '',
      'autofocus'         => '',
      'priority'          => '',
    );

    $args = wp_parse_args( $args, $defaults );
    $args = apply_filters( 'woocommerce_form_field_args', $args, $key, $value );

    if ( $args['required'] ) {
      $args['class'][] = 'validate-required';
      $required        = ' <b class="required" title="' . esc_attr__( 'required', 'woocommerce' ) . '">*</b>';
    } else {
      $required = '';
    }

    if ( is_string( $args['label_class'] ) ) {
      $args['label_class'] = array( $args['label_class'] );
    }

    if ( is_null( $value ) ) {
      $value = $args['default'];
    }

    // Custom attribute handling.
    $custom_attributes         = array();
    $args['custom_attributes'] = array_filter( (array) $args['custom_attributes'], 'strlen' );

    if ( $args['maxlength'] ) {
      $args['custom_attributes']['maxlength'] = absint( $args['maxlength'] );
    }

    if ( ! empty( $args['autocomplete'] ) ) {
      $args['custom_attributes']['autocomplete'] = $args['autocomplete'];
    }

    if ( true === $args['autofocus'] ) {
      $args['custom_attributes']['autofocus'] = 'autofocus';
    }

    if ( ! empty( $args['custom_attributes'] ) && is_array( $args['custom_attributes'] ) ) {
      foreach ( $args['custom_attributes'] as $attribute => $attribute_value ) {
        $custom_attributes[] = esc_attr( $attribute ) . '="' . esc_attr( $attribute_value ) . '"';
      }
    }

    if ( ! empty( $args['validate'] ) ) {
      foreach ( $args['validate'] as $validate ) {
        $args['class'][] = 'validate-' . $validate;
      }
    }

    $field           = '';
    $label_id        = $args['id'];
    $sort            = $args['priority'] ? $args['priority'] : '';
    $field_container = '%3$s';

    switch ( $args['type'] ) {
      case 'textarea':
        $field .= '<textarea name="' . esc_attr( $key ) . '" class="tp_txtarea input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" id="' . esc_attr( $args['id'] ) . '" placeholder="' . esc_attr( $args['placeholder'] ) . '" ' . ( empty( $args['custom_attributes']['rows'] ) ? ' rows="2"' : '' ) . ( empty( $args['custom_attributes']['cols'] ) ? ' cols="5"' : '' ) . implode( ' ', $custom_attributes ) . '>' . esc_textarea( $value ) . '</textarea>';

        break;
      case 'checkbox':
        $field = '<label class="checkbox ' . implode( ' ', $args['label_class'] ) . '" ' . implode( ' ', $custom_attributes ) . '>
            <input type="' . esc_attr( $args['type'] ) . '" class="input-checkbox ' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" value="1" ' . checked( $value, 1, false ) . ' /> ' . $args['label'] . $required . '</label>';

        break;
      case 'password':
      case 'text':
      case 'email':
      case 'tel':
      case 'number':
        $field .= '<input type="' . esc_attr( $args['type'] ) . '" class="tp_inp input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" placeholder="' . esc_attr( $args['placeholder'] ) . '"  value="' . esc_attr( $value ) . '" ' . implode( ' ', $custom_attributes ) . ' />';
        if($args['id'] == 'billing_address_1' || $args['id'] == 'billing_new_dom' || $args['id'] == 'billing_new_korpus'){
          $field .='</div>';
        } else if ($args['id'] == 'billing_new_kvartira') {
          $field .='</div>
                </div>
                <div><a href="checkout.html#" class="add_comm">Добавить комментарий к заказу</a></div>
                ';
        }
        break;
      case 'select':
        $field   = '';
        $options = '';

        if ( ! empty( $args['options'] ) ) {
          foreach ( $args['options'] as $option_key => $option_text ) {
            if ( '' === $option_key ) {
              // If we have a blank option, select2 needs a placeholder.
              if ( empty( $args['placeholder'] ) ) {
                $args['placeholder'] = $option_text ? $option_text : __( 'Choose an option', 'woocommerce' );
              }
              $custom_attributes[] = 'data-allow_clear="true"';
            }
            $options .= '<option value="' . esc_attr( $option_key ) . '" ' . selected( $value, $option_key, false ) . '>' . esc_attr( $option_text ) . '</option>';
          }

          $field .= '<div class="tp_select"><select name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" class="select ' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" ' . implode( ' ', $custom_attributes ) . ' data-placeholder="' . esc_attr( $args['placeholder'] ) . '">
              ' . $options . '
            </select></div>';
            if($args['id'] == 'billing_city'){
              $field .='</div>';
            }
        }

        break;
      case 'radio':
        $label_id = current( array_keys( $args['options'] ) );

        if ( ! empty( $args['options'] ) ) {
          foreach ( $args['options'] as $option_key => $option_text ) {
            $field .= '<input type="radio" class="input-radio ' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" value="' . esc_attr( $option_key ) . '" name="' . esc_attr( $key ) . '" ' . implode( ' ', $custom_attributes ) . ' id="' . esc_attr( $args['id'] ) . '_' . esc_attr( $option_key ) . '"' . checked( $value, $option_key, false ) . ' />';
            $field .= '<label for="' . esc_attr( $args['id'] ) . '_' . esc_attr( $option_key ) . '" class="radio ' . implode( ' ', $args['label_class'] ) . '">' . $option_text . '</label>';
          }
        }

        break;
    }

    if ( ! empty( $field ) ) {
      $field_html = '';

      if ( $args['label'] && 'checkbox' !== $args['type'] ) {
        if($args['id'] == 'billing_first_name'){

          $field_html .= '<div class="item_checkout  is_open">
        <div class="title_checkout">
            <p>1  Контактная информация</p>
            <a href="#" class="edit_checkout">Редактировать</a>
        </div>
        <div class="checkout">
            <div class="form_contacts">
                <div class="form">';
          $field_html .= '<p>' . $args['label'] . $required . '</p>';
        }
        else if($args['id'] == 'billing_city'){

          $field_html .= '<p><span>Ваш запрос будет обработан в рабочее время. Обязательные поля отмечены <b>*</b></span></p>
                    <input type="submit" class="orng_btn" value="Продолжить" />
                </div>
            </div>
        </div>
    </div>
    <div class="item_checkout  is_open">
        <div class="title_checkout">
            <p>2  способ доставки</p>
            <a href="#" class="edit_checkout">Редактировать</a>
        </div>
        <div class="checkout">
            <div class="delivery_method">
                <div class="city_del">';
          $field_html .= $args['label'] . $required;
        } 
        else if($args['id'] == 'billing_address_1'){

          $field_html .= '<div class="ckeck_delivery_method">
                    <label><input type="radio" name="radio" />
                        <div class="del_label">
                            <h5>Доставка курьером </h5>
                            <p>Ближайшая дата: <span>10.05</span></p>
                            <p>Стоимость: <span>10,80 руб.</span></p>
                        </div>
                    </label>
                    <label><input type="radio" name="radio" />
                        <div class="del_label">
                            <h5>Самовывоз </h5>
                            <p>Стоимость: <span>0 руб.</span></p>
                        </div>
                    </label>
                </div>
                <h5>Адрес доставки</h5>
                <div class="address_del">
                    <div class="inp_addr">';
          $field_html .= '<p>' . $args['label'] . $required . '</p>';
        }
        else if($args['id'] == 'billing_new_dom' || $args['id'] == 'billing_new_korpus' || $args['id'] == 'billing_new_kvartira'){

          $field_html .= '<div class="inp_addr">';
          $field_html .= '<p>' . $args['label'] . $required . '</p>';
        } 
        else {
          $field_html .= '<p>' . $args['label'] . $required . '</p>';
        }
      }

      $field_html .= $field;

      if ( $args['description'] ) {
        $field_html .= '<span class="description">' . esc_html( $args['description'] ) . '</span>';
      }

      $container_class = esc_attr( implode( ' ', $args['class'] ) );
      $container_id    = esc_attr( $args['id'] ) . '_field';
      $field           = sprintf( $field_container, $container_class, $container_id, $field_html );
    }

    $field = apply_filters( 'woocommerce_form_field_' . $args['type'], $field, $key, $args, $value );

    if ( $args['return'] ) {
      return $field;
    } else {
      echo $field; // WPCS: XSS ok.

      if($args['id'] == 'billing_new_kvartira'){
        do_action( 'woocommerce_checkout_shipping' );
      }
    }
  }













add_theme_support('title-tag'); // теперь тайтл управляется самим вп

register_nav_menus(array( // Регистрируем 2 меню
	'top' => 'Верхнее', // Верхнее
	'bottom' => 'Внизу' // Внизу
));
include('functions/settings.php');
add_theme_support('post-thumbnails'); // включаем поддержку миниатюр
set_post_thumbnail_size(250, 150); // задаем размер миниатюрам 250x150
add_image_size('big-thumb', 400, 400, true); // добавляем еще один размер картинкам 400x400 с обрезкой

register_sidebar(array( // регистрируем левую колонку, этот кусок можно повторять для добавления новых областей для виджитов
	'name' => 'Сайдбар', // Название в админке
	'id' => "sidebar", // идентификатор для вызова в шаблонах
	'description' => 'Обычная колонка в сайдбаре', // Описалово в админке
	'before_widget' => '<div id="%1$s" class="widget %2$s">', // разметка до вывода каждого виджета
	'after_widget' => "</div>\n", // разметка после вывода каждого виджета
	'before_title' => '<span class="widgettitle">', //  разметка до вывода заголовка виджета
	'after_title' => "</span>\n", //  разметка после вывода заголовка виджета
));

if (!class_exists('clean_comments_constructor')) { // если класс уже есть в дочерней теме - нам не надо его определять
	class clean_comments_constructor extends Walker_Comment { // класс, который собирает всю структуру комментов
		public function start_lvl( &$output, $depth = 0, $args = array()) { // что выводим перед дочерними комментариями
			$output .= '<ul class="children">' . "\n";
		}
		public function end_lvl( &$output, $depth = 0, $args = array()) { // что выводим после дочерних комментариев
			$output .= "</ul><!-- .children -->\n";
		}
	    protected function comment( $comment, $depth, $args ) { // разметка каждого комментария, без закрывающего </li>!
	    	$classes = implode(' ', get_comment_class()).($comment->comment_author_email == get_the_author_meta('email') ? ' author-comment' : ''); // берем стандартные классы комментария и если коммент пренадлежит автору поста добавляем класс author-comment
	        echo '<li id="comment-'.get_comment_ID().'" class="'.$classes.' media">'."\n"; // родительский тэг комментария с классами выше и уникальным якорным id
	    	echo '<div class="media-left">'.get_avatar($comment, 64, '', get_comment_author(), array('class' => 'media-object'))."</div>\n"; // покажем аватар с размером 64х64
	    	echo '<div class="media-body">';
	    	echo '<span class="meta media-heading">Автор: '.get_comment_author()."\n"; // имя автора коммента
	    	//echo ' '.get_comment_author_email(); // email автора коммента, плохой тон выводить почту
	    	echo ' '.get_comment_author_url(); // url автора коммента
	    	echo ' Добавлено '.get_comment_date('F j, Y в H:i')."\n"; // дата и время комментирования
	    	if ( '0' == $comment->comment_approved ) echo '<br><em class="comment-awaiting-moderation">Ваш комментарий будет опубликован после проверки модератором.</em>'."\n"; // если комментарий должен пройти проверку
	    	echo "</span>";
	        comment_text()."\n"; // текст коммента
	        $reply_link_args = array( // опции ссылки "ответить"
	        	'depth' => $depth, // текущая вложенность
	        	'reply_text' => 'Ответить', // текст
				'login_text' => 'Вы должны быть залогинены' // текст если юзер должен залогинеться
	        );
	        echo get_comment_reply_link(array_merge($args, $reply_link_args)); // выводим ссылку ответить
	        echo '</div>'."\n"; // закрываем див
	    }
	    public function end_el( &$output, $comment, $depth = 0, $args = array() ) { // конец каждого коммента
			$output .= "</li><!-- #comment-## -->\n";
		}
	}
}

if (!function_exists('pagination')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
	function pagination() { // функция вывода пагинации
		global $wp_query; // текущая выборка должна быть глобальной
		$big = 999999999; // число для замены
		$links = paginate_links(array( // вывод пагинации с опциями ниже
			'base' => str_replace($big,'%#%',esc_url(get_pagenum_link($big))), // что заменяем в формате ниже
			'format' => '?paged=%#%', // формат, %#% будет заменено
			'current' => max(1, get_query_var('paged')), // текущая страница, 1, если $_GET['page'] не определено
			'type' => 'array', // нам надо получить массив
			'prev_text'    => 'Назад', // текст назад
	    	'next_text'    => 'Вперед', // текст вперед
			'total' => $wp_query->max_num_pages, // общие кол-во страниц в пагинации
			'show_all'     => false, // не показывать ссылки на все страницы, иначе end_size и mid_size будут проигнорированны
			'end_size'     => 15, //  сколько страниц показать в начале и конце списка (12 ... 4 ... 89)
			'mid_size'     => 15, // сколько страниц показать вокруг текущей страницы (... 123 5 678 ...).
			'add_args'     => false, // массив GET параметров для добавления в ссылку страницы
			'add_fragment' => '',	// строка для добавления в конец ссылки на страницу
			'before_page_number' => '', // строка перед цифрой
			'after_page_number' => '' // строка после цифры
		));
	 	if( is_array( $links ) ) { // если пагинация есть
		    echo '<ul class="pagination">';
		    foreach ( $links as $link ) {
		    	if ( strpos( $link, 'current' ) !== false ) echo "<li class='active'>$link</li>"; // если это активная страница
		        else echo "<li>$link</li>"; 
		    }
		   	echo '</ul>';
		 }
	}
}

add_action('wp_footer', 'add_scripts'); // приклеем ф-ю на добавление скриптов в футер
if (!function_exists('add_scripts')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
	function add_scripts() { // добавление скриптов
	    if(is_admin()) return false; // если мы в админке - ничего не делаем
	    wp_deregister_script('jquery'); // выключаем стандартный jquery
	    wp_enqueue_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js','','',true); // добавляем свой
	    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js','','',true); // бутстрап
	    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js','','',true); // и скрипты шаблона
	}
}
function display_woo_sku() {
 
    global $product;
    return $product->get_sku();
 
}
add_shortcode( 'woo_sku', 'display_woo_sku' );

function display_woo_regprice() {
 
    global $product;
    return $product->get_regular_price();
 
}
add_shortcode( 'woo_regprice', 'display_woo_regprice' );

function display_woo_saleprice() {
 
    global $product;
    return $product->get_sale_price();
 
}
add_shortcode( 'woo_regprice', 'display_woo_saleprice' );


add_action('woocommerce_after_shop_loop_item', 'get_star_rating' );
function get_star_rating()
{
    global $woocommerce, $product;
    $average = $product->get_average_rating();

    echo '<div class="star-rating"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>';
}
/**
 * Auto update cart after quantity change
 *
 * @return  string
 **/
add_action( 'wp_footer', 'cart_update_qty_script' );
function cart_update_qty_script() {
    if (is_cart()) :
    ?>
    <script>
        jQuery('div.woocommerce').on('change', '.qty', function(){
            jQuery("[name='update_cart']").trigger("click"); 
        });
    </script>
    <?php
    endif;
}
/*
 * "Хлебные крошки" для WordPress
 * автор: Dimox
 * версия: 2017.01.21
 * лицензия: MIT
*/
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

function dimox_breadcrumbs() {

  /* === ОПЦИИ === */
  $text['home'] = 'Главная'; // текст ссылки "Главная"
  $text['category'] = '%s'; // текст для страницы рубрики
  $text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
  $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
  $text['author'] = 'Статьи автора %s'; // текст для страницы автора
  $text['404'] = 'Ошибка 404'; // текст для страницы 404
  $text['page'] = 'Страница %s'; // текст 'Страница N'
  $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'

  $wrap_before = ''; // открывающий тег обертки
  $wrap_after = ''; // закрывающий тег обертки
  $sep = ''; // разделитель между "крошками"
  $sep_before = ''; // тег перед разделителем
  $sep_after = ''; // тег после разделителя
  $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
  $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
  $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
  $before = '<li>'; // тег перед текущей "крошкой"
  $after = '</li>'; // тег после текущей "крошки"
  /* === КОНЕЦ ОПЦИЙ === */

  global $post;
  $home_url = home_url('/');
  $link_before = '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
  $link_after = '</li>';
  $link_attr = ' itemprop="item"';
  $link_in_before = '';
  $link_in_after = '';
  $link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
  $frontpage_id = get_option('page_on_front');
  $parent_id = ($post) ? $post->post_parent : '';
  $sep = ' ' . $sep_before . $sep . $sep_after . ' ';
  $home_link = $link_before . '<a href="' . $home_url . '"' . $link_attr . ' class="home">' . $link_in_before . $text['home'] . $link_in_after . '</a>' . $link_after;

  if (is_home() || is_front_page()) {

    if ($show_on_home) echo $wrap_before . $home_link . $wrap_after;

  } else {

    echo $wrap_before;
    if ($show_home_link) echo $home_link;

    if ( is_category() ) {
      $cat = get_category(get_query_var('cat'), false);
      if ($cat->parent != 0) {
        $cats = get_category_parents($cat->parent, TRUE, $sep);
        $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
        if ($show_home_link) echo $sep;
        echo $cats;
      }
      if ( get_query_var('paged') ) {
        $cat = $cat->cat_ID;
        echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
      }

    } elseif ( is_search() ) {
      if (have_posts()) {
        if ($show_home_link && $show_current) echo $sep;
        if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
      } else {
        if ($show_home_link) echo $sep;
        echo $before . sprintf($text['search'], get_search_query()) . $after;
      }

    } elseif ( is_day() ) {
      if ($show_home_link) echo $sep;
      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
      echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
      if ($show_current) echo $sep . $before . get_the_time('d') . $after;

    } elseif ( is_month() ) {
      if ($show_home_link) echo $sep;
      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
      if ($show_current) echo $sep . $before . get_the_time('F') . $after;

    } elseif ( is_year() ) {
      if ($show_home_link && $show_current) echo $sep;
      if ($show_current) echo $before . get_the_time('Y') . $after;

    } elseif ( is_single() && !is_attachment() ) {
      if ($show_home_link) echo $sep;
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        printf($link, $home_url . $slug['slug'] . '/', $post_type->labels->singular_name);
        if ($show_current) echo $sep . $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        $cats = get_category_parents($cat, TRUE, $sep);
        if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
        echo $cats;
        if ( get_query_var('cpage') ) {
          echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
        } else {
          if ($show_current) echo $before . get_the_title() . $after;
        }
      }

    // custom post type
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      if ( get_query_var('paged') ) {
        echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_current) echo $sep . $before . $post_type->label . $after;
      }

    } elseif ( is_attachment() ) {
      if ($show_home_link) echo $sep;
      $parent = get_post($parent_id);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      if ($cat) {
        $cats = get_category_parents($cat, TRUE, $sep);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
        echo $cats;
      }
      printf($link, get_permalink($parent), $parent->post_title);
      if ($show_current) echo $sep . $before . get_the_title() . $after;

    } elseif ( is_page() && !$parent_id ) {
      if ($show_current) echo $sep . $before . get_the_title() . $after;

    } elseif ( is_page() && $parent_id ) {
      if ($show_home_link) echo $sep;
      if ($parent_id != $frontpage_id) {
        $breadcrumbs = array();
        while ($parent_id) {
          $page = get_page($parent_id);
          if ($parent_id != $frontpage_id) {
            $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
          }
          $parent_id = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        for ($i = 0; $i < count($breadcrumbs); $i++) {
          echo $breadcrumbs[$i];
          if ($i != count($breadcrumbs)-1) echo $sep;
        }
      }
      if ($show_current) echo $sep . $before . get_the_title() . $after;

    } elseif ( is_tag() ) {
      if ( get_query_var('paged') ) {
        $tag_id = get_queried_object_id();
        $tag = get_tag($tag_id);
        echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
      }

    } elseif ( is_author() ) {
      global $author;
      $author = get_userdata($author);
      if ( get_query_var('paged') ) {
        if ($show_home_link) echo $sep;
        echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_home_link && $show_current) echo $sep;
        if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
      }

    } elseif ( is_404() ) {
      if ($show_home_link && $show_current) echo $sep;
      if ($show_current) echo $before . $text['404'] . $after;

    } elseif ( has_post_format() && !is_singular() ) {
      if ($show_home_link) echo $sep;
      echo get_post_format_string( get_post_format() );
    }

    echo $wrap_after;

  }
} // end of dimox_breadcrumbs()
add_action('wp_enqueue_scripts', 'true_peremeshhaem_jquery_v_futer'); 
require_once('ratings/rating.php');

add_filter('request', function( $vars ) {
	global $wpdb;
	if( ! empty( $vars['pagename'] ) || ! empty( $vars['category_name'] ) || ! empty( $vars['name'] ) || ! empty( $vars['attachment'] ) ) {
		$slug = ! empty( $vars['pagename'] ) ? $vars['pagename'] : ( ! empty( $vars['name'] ) ? $vars['name'] : ( !empty( $vars['category_name'] ) ? $vars['category_name'] : $vars['attachment'] ) );
		$exists = $wpdb->get_var( $wpdb->prepare( "SELECT t.term_id FROM $wpdb->terms t LEFT JOIN $wpdb->term_taxonomy tt ON tt.term_id = t.term_id WHERE tt.taxonomy = 'product_cat' AND t.slug = %s" ,array( $slug )));
		if( $exists ){
			$old_vars = $vars;
			$vars = array('product_cat' => $slug );
			if ( !empty( $old_vars['paged'] ) || !empty( $old_vars['page'] ) )
				$vars['paged'] = ! empty( $old_vars['paged'] ) ? $old_vars['paged'] : $old_vars['page'];
			if ( !empty( $old_vars['orderby'] ) )
	 	        	$vars['orderby'] = $old_vars['orderby'];
      			if ( !empty( $old_vars['order'] ) )
 			        $vars['order'] = $old_vars['order'];	
		}
	}
	return $vars;
});

add_filter( 'woocommerce_show_page_title' , 'woo_hide_page_title' );
function woo_hide_page_title() {
	return false;
}
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
add_theme_support( 'woocommerce' );
}
// Remove the sorting dropdown from Woocommerce
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_catalog_ordering', 30 );
// Remove the result count from WooCommerce
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 ); 
remove_action( 'woocommerce_after_shop_loop' , 'woocommerce_pagination', 10 ); 
 remove_action( 'woocommerce_archive_description' , 'woocommerce_taxonomy_archive_description', 10 ); 
 
function true_peremeshhaem_jquery_v_futer() {  
 	// снимаем стандартную регистрацию jQuery
        wp_deregister_script('jquery');  
 
        // регистрируем для подключения в футере, описание параметров - в документации функции (ссылка чуть выше)
        wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, null, true);  
 
	// подключаем
        wp_enqueue_script('jquery');  
 
}
add_filter( 'searchwp_live_search_hijack_get_search_form', '__return_false' )

?>
