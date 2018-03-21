<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */
?>
            <div class="container">
                <ul class="breadcrumbs">
                    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                </ul>
                <div class="wrap_catalog">
                    <div class="wrap_sidebar" id="wrap_sidebar">
                        <div class="mob_wrap_filter">
                            <a data-fancybox data-src="#modal_filter" class="open_filter" href="#">подобрать по параметрам</a>
                            <button class="reset_filter">Сбросить фильтры</button>
                        </div>
                        <div class="sidebar" id="sidebar">
						<?php if (is_active_sidebar( 'sidebar' )) { // если в сайдбаре есть что выводить ?>

	<?php dynamic_sidebar('sidebar'); // выводим сайдбар, имя определено в functions.php ?>

<?php } ?>
                            <div class="title_sidebar">
                                Фильтр по параметрам
                            </div>
                            <div class="wrap_filter">
                                <div class="title_filter">
                                    <p>Производитель</p>
                                </div>
                                <div class="item_filter checkbox">
                                    <label><input type="checkbox" /> Фея</label>
                                    <label><input type="checkbox" /> Фея</label>
                                    <label><input type="checkbox" /> Фея</label>
                                    <label><input type="checkbox" /> Фея</label>
                                    <label><input type="checkbox" /> Фея</label>
                                    <a href="#" class="more_info">Еще <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="wrap_filter">
                                <div class="title_filter">
                                    <p>Цена, бел. руб.</p>
                                </div>
                                <div class="item_filter">
                                    <div class="wrap_range">
                                        <div id="range" class="range"></div>
                                        <div class="wrap_range_inp">
                                            <div class="range_inp">
                                                от
                                                <label for="value-input6"></label><input id="value-input6">
                                            </div>
                                            <div class="range_inp">
                                                до
                                                <label for="value-input5"></label><input id="value-input5">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="wrap_filter">
                                <div class="title_filter">
                                    <p>     Тип</p>
                                    <div class="tooltip tooltip-effect-1">
                                        <span class="tooltip-item"><i class="fa fa-question-circle-o" aria-hidden="true"></i></span>
                                        <div class="tooltip-content">
                                            <div class="tooltip-text">
                                                <span>Тип</span>
                                                <p>Классическая кроватка - это кроватка с фиксированным размером спального места, в основном 120х60 см. Она рассчитана на детей от рождения до 4 лет.</p>
                                                <p>Люлькой называют небольшую закрытую кроватку для новорожденного, рассчитанную на ребенка до года. Она часто имеет плотные тканевые стенки, мягкие борта, большой капюшон.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item_filter checkbox">
                                    <label><input type="checkbox" />Классическая</label>
                                    <label><input type="checkbox" /> Люлька</label>
                                    <label><input type="checkbox" /> Приставная</label>
                                    <label><input type="checkbox" /> Трансформер</label>
                                    <label><input type="checkbox" /> Для дошкольника</label>
                                </div>
                            </div>
                            <div class="wrap_filter">
                                <div class="title_filter">
                                    <p>Цвет</p>
                                </div>
                                <div class="item_filter checkbox">
                                    <label><input type="checkbox" />Белый</label>
                                    <label><input type="checkbox" />Серый</label>
                                    <label><input type="checkbox" />Черный</label>
                                    <label><input type="checkbox" />Коричневый</label>
                                    <label><input type="checkbox" />Береза</label>
                                    <label><input type="checkbox" />Бежевый</label>
                                    <label><input type="checkbox" />Розовый</label>
                                    <a href="#" class="more_info">Свернуть</a>
                                </div>
                            </div>
                            <div class="wrap_filter">
                                <div class="title_filter">
                                    <p>Тип днища</p>
                                    <div class="tooltip tooltip-effect-1">
                                        <span class="tooltip-item"><i class="fa fa-question-circle-o" aria-hidden="true"></i></span>
                                        <div class="tooltip-content">
                                            <div class="tooltip-text">
                                                <span>Тип</span>
                                                <p>Классическая кроватка - это кроватка с фиксированным размером спального места, в основном 120х60 см. Она рассчитана на детей от рождения до 4 лет.</p>
                                                <p>Люлькой называют небольшую закрытую кроватку для новорожденного, рассчитанную на ребенка до года. Она часто имеет плотные тканевые стенки, мягкие борта, большой капюшон.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item_filter checkbox">
                                    <label><input type="checkbox" />Реечное</label>
                                    <label><input type="checkbox" />Сплошное</label>
                                </div>
                            </div>
                            <button class="reset_filter">Сбросить фильтры</button>
                        </div>
                    </div>
                    <div class="catalog" id="catalog">
                        <div class="title_page">
                            <img src="/wp-content/themes/tata/img/2.png" alt="" />
                            <p><?php woocommerce_page_title(); ?></p>
                        </div>
                        <div class="wrap_show">
                            <div class="wrap_view">
                                <button class="view1" id="grid"></button>
                                <button class="view2" id="list"></button>
                            </div>
                            <div class="sorting">
							<?php
/**
 * Result Count
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $wp_query;

if ( ! woocommerce_products_will_display() )
	return;
?>
                                <p>	<?php
	$paged    = max( 1, $wp_query->get( 'paged' ) );
	$per_page = $wp_query->get( 'posts_per_page' );
	$total    = $wp_query->found_posts;
	$first    = ( $per_page * $paged ) - $per_page + 1;
	$last     = min( $total, $wp_query->get( 'posts_per_page' ) * $paged );

	if ( $total <= $per_page || -1 === $per_page ) {
		printf( _n( 'Показан единственный результат', 'Показаны все %d результатов', $total, 'woocommerce' ), $total );
	} else {
		printf( _nx( 'Показан единственный результат', 'Показано %1$d&ndash;%2$d из %3$d результатов', $total, '%1$d = first, %2$d = last, %3$d = total', 'woocommerce' ), $first, $last, $total );
	}
	?></p>

                                <select>
                                    <option value="<?php echo esc_attr( $id ); ?>">Сначала популярные</option>
                                    <option value="<?php echo esc_attr( $name ); ?>">Сначала непопулярные</option>
                                    <option>Сначала очень популярные</option>
                                    <option>Сначала чуть популярные</option>
                                    <option>Сначала популярные</option>
                                    <option>Сначала непопулярные</option>
                                    <option>Сначала очень популярные</option>
                                    <option>Сначала чуть популярные</option>
                                    <option>Сначала популярные</option>
                                    <option>Сначала непопулярные</option>
                                    <option>Сначала очень популярные</option>
                                    <option>Сначала чуть популярные</option>
                                    <option>Сначала популярные</option>
                                    <option>Сначала непопулярные</option>
                                    <option>Сначала очень популярные</option>
                                    <option>Сначала чуть популярные</option>
                                    <option>Сначала популярные</option>
                                    <option>Сначала непопулярные</option>
                                    <option>Сначала очень популярные</option>
                                    <option>Сначала чуть популярные</option>
                                </select>
                            </div>
                        </div>
                        <div class="smart_filter">
                            <div class="list_smart_filter">
                                <h5>Популярные</h5>
                                <ul>
                                    <li><a href="/dlya-novorozhdennyh/">Для новорожденных</a></li>
                                    <li><a href="/derevyannye-krovatki-transformery/">Деревянные кроватки трансформеры</a></li>
                                    <li><a href="/s-mayatnikovym-mehanizmom/">С маятниковым механизмом</a></li>
                                    <li><a href="/krovatki-kachalki/">Кроватки качалки</a></li>
                                </ul>
                            </div>
                            <div class="list_smart_filter">
                                <h5>готовые варианты</h5>
                                <ul>
                                    <li><a href="/dlya-novorozhdennyh/">Для новорожденных</a></li>
                                    <li><a href="/s-mayatnikom-i-kolesami-svetlye/">С маятником и колесами светлые</a></li>
                                    <li><a href="/s-prodolnym-mayatnikom-i-yashhikom/">С продольным маятником и ящиком</a></li>
                                    <li><a href="/s-poperechnym-mayatnikom/">С поперечным маятником</a></li>
                                </ul>
                            </div>
                            <div class="list_smart_filter">
                                <h5>По производителю</h5>
                                <ul>
                                    <li><a href="/brand/avent/">Avent</a></li>
                                    <li><a href="/brand/britax/">Britax</a></li>
                                    <li><a href="/brand/dr-browns/">Dr Brown’s</a></li>
                                    <li><a href="/brand/little-pony/">Little Pony</a></li>
                                </ul>
                            </div>
                        </div>						
<div class="wrap_product wrap_product_grid">			