<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
            <div class="container">
                <ul class="breadcrumbs">
                    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                </ul>
				<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>
                <h4><?php the_title (); ?>
                    <span class="article">Артикул: <?php echo display_woo_sku(); ?></span>
                </h4>
                <div class="wrap_big_product">
                    <div class="big_product_photo">
                        <div class="swiper-container gallery-top">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#" data-src="/wp-content/themes/tata/img/3.png" data-fancybox="gallery">
                                        <img src="/wp-content/themes/tata/img/3.png" alt="" />
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" data-src="/wp-content/themes/tata/img/3.png" data-fancybox="gallery">
                                        <img src="/wp-content/themes/tata/img/3.png" alt="" />
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" data-src="/wp-content/themes/tata/img/3.png" data-fancybox="gallery">
                                        <img src="/wp-content/themes/tata/img/3.png" alt="" />
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" data-src="/wp-content/themes/tata/img/3.png" data-fancybox="gallery">
                                        <img src="/wp-content/themes/tata/img/3.png" alt="" />
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" data-src="/wp-content/themes/tata/img/3.png" data-fancybox="gallery">
                                        <img src="/wp-content/themes/tata/img/3.png" alt="" />
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" data-src="/wp-content/themes/tata/img/3.png" data-fancybox="gallery">
                                        <img src="/wp-content/themes/tata/img/3.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-button-next swiper-button-next4"></div>
                            <div class="swiper-button-prev swiper-button-prev4"></div>
                            <span class="resize"><img src="/wp-content/themes/tata/img/pin/resize.png" alt="" /></span>
                            <div class="pin_product">
                                <div class="discount_rate"><?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
 
global $post, $product;
 
?>
 
<?php if ($product->is_on_sale() && $product->product_type == 'variable') : ?>
 
<?php
 
$available_variations = $product->get_available_variations();
 
$maximumper = 0;
 
for ($i = 0; $i < count($available_variations); ++$i) {
 
$variation_id=$available_variations[$i]['variation_id'];
 
$variable_product1= new WC_Product_Variation( $variation_id );
 
$regular_price = $variable_product1 ->regular_price;
 
$sales_price = $variable_product1 ->sale_price;
 
$percentage= round((( ( $regular_price - $sales_price ) / $regular_price ) * 100),1) ;
 
if ($percentage > $maximumper) {
 
$maximumper = $percentage;
 
}
 
}
 
echo $price . sprintf( __('%s', 'woocommerce' ), $maximumper . '%' ); ?>
<?php elseif($product->is_on_sale() && $product->product_type == 'simple') : ?>
<?php
 
$percentage = round( ( ( $product->regular_price - $product->sale_price ) / $product->regular_price ) * 100 );
 
echo $price . sprintf( __('-%s', 'woocommerce' ), $percentage . '%' ); ?>
<?php endif;?></div>
                            </div>
                        </div>
                        <div class="swiper-container gallery-thumbs">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" style="background-image:url(/wp-content/themes/tata/img/3.png)"></div>
                                <div class="swiper-slide" style="background-image:url(/wp-content/themes/tata/img/2.png)"></div>
                                <div class="swiper-slide" style="background-image:url(/wp-content/themes/tata/img/3.png)"></div>
                                <div class="swiper-slide" style="background-image:url(/wp-content/themes/tata/img/2.png)"></div>
                                <div class="swiper-slide" style="background-image:url(/wp-content/themes/tata/img/3.png)"></div>
                                <div class="swiper-slide" style="background-image:url(/wp-content/themes/tata/img/2.png)"></div>
                            </div>
                            <div class="swiper-button-next swiper-button-next4"></div>
                            <div class="swiper-button-prev swiper-button-prev4"></div>
                        </div>
                    </div>
                    <div class="big_product_txt">
                        <div class="stars">
						<span><?php rating(); ?></span>
                        </div>
                        <div class="old_price"><?php echo display_woo_regprice(); ?> руб. </div>
                        <div class="actual_price"><?php echo display_woo_saleprice(); ?> руб. </div>
                        <div class="manufacturer">						
                            <p>Производитель <a href=""><?php $brands = wp_get_post_terms( $post->ID, 'pwb-brand', array("fields" => "all") );
  foreach( $brands as $brand ) {
  echo $brand->name; 
}?></a></p>
                        </div>
                        <p><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?> </p>
                        <ul class="wrap_dignity">
                            <li>
                                <span><img src="/wp-content/themes/tata/img/pin/d1.png" alt="" /></span>
                                <p>Гарантия качества</p>
                            </li>
                            <li>
                                <span><img src="/wp-content/themes/tata/img/pin/d2.png" alt="" /></span>
                                <p>Бесплатная доставка по Минску</p>
                            </li>
                            <li>
                                <span><img src="/wp-content/themes/tata/img/pin/d3.png" alt="" /></span>
                                <p>Сервис от производителя</p>
                            </li>
                            <li>
                                <span><img src="/wp-content/themes/tata/img/pin/d4.png" alt="" /></span>
                                <p>Скидка прикомплексной покупке</p>
                            </li>
                        </ul>
                        <div class="delivery_dignity">
                            <div>Доставка
                                <div class="tp_select">
                                    <select>
                                        <option>по Минску</option>
                                        <option>по Гомелю</option>
                                        <option>по Минску</option>
                                        <option>по Гомелю</option>
                                        <option>по Минску</option>
                                        <option>по Гомелю</option>
                                        <option>по Минску</option>
                                        <option>по Гомелю</option>
                                        <option>по Минску</option>
                                        <option>по Гомелю</option>
                                        <option>по Минску</option>
                                        <option>по Гомелю</option>
                                        <option>по Минску</option>
                                        <option>по Гомелю</option>
                                        <option>по Минску</option>
                                        <option>по Гомелю</option>
                                        <option>по Минску</option>
                                        <option>по Гомелю</option>
                                        <option>по Минску</option>
                                        <option>по Гомелю</option>
                                        <option>по Минску</option>
                                        <option>по Гомелю</option>
                                        <option>по Минску</option>
                                        <option>по Гомелю</option>
                                        <option>по Минску</option>
                                        <option>по Гомелю</option>
                                        <option>по Минску</option>
                                        <option>по Гомелю</option>
                                        <option>по Минску</option>
                                        <option>по Гомелю</option>
                                        <option>по Минску</option>
                                        <option>по Гомелю</option>
                                        <option>по Минску</option>
                                        <option>по Гомелю</option>
                                        <option>по Минску</option>
                                        <option>по Гомелю</option>
                                        <option>по Минску</option>
                                        <option>по Гомелю</option>
                                        <option>по Минску</option>
                                        <option>по Гомелю</option>
                                        <option>по Минску</option>
                                        <option>по Гомелю</option>
                                    </select>
                                </div>
                            </div>
                            <span>Курьером до прихожей: <b>завтра, 10,80 руб.</b></span>
                            <span>Самовывоз со склада в Минске: <b>завтра, бесплатно</b></span>
                        </div>
                        <div class="btn_big_product_txt">
            <?php 
    woocommerce_template_single_add_to_cart();
    ?>

                    </div>
                </div>

                <div class="tabs_big_product">
                    <div class="wrap_tabs">
                        <ul class="tabs_caption">
                            <li class="active">Обзор</li>
                            <li>характеристики</li>
                            <li>отзывы</li>
                        </ul>
                        <div class="wr_tabs">
                            <div class="tabs_content active">
                                <div class="textpage">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <div class="tabs_content">
                                <div class="wrap_characteristics">
                                    <?php
/**
 * Additional Information tab
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

$heading = apply_filters( 'woocommerce_product_additional_information_heading', __( '', 'woocommerce' ) );

?>

<?php if ( $heading ): ?>
	<h2><?php echo $heading; ?></h2>
<?php endif; ?>

<?php $product->list_attributes(); ?>

                                </div>
                            </div>
                            <div class="tabs_content">
                                <div class="wrap_reviews">
                                    <h5>Все отзывы <b>(<?php comments_number('0', '1', '%'); ?>)</b></h5>
									<?php if (comments_open() || get_comments_number()) comments_template('', true); // если комментирование открыто - мы покажем список комментариев и форму, если закрыто, но кол-во комментов > 0 - покажем только список комментариев ?>
                                    <div class="review">
                                        <div class="top_review">
                                            <p>Дарья</p>
                                            <span>13.03.2017</span>
                                        </div>
                                        <div class="stars">
                                            <span><?php rating(); ?></span>
                                        </div>
                                        <p>Работой пылесоса довольны,удобный,мощный. Вот только насадки для мебели нет (при мне вскрывали коробку), хотя она заявлена в описании к пылесосу. Есть насадка пол/ковер, ламинат/паркет, щелевая, а для мебели нет и очень не хватает. Работой магазина и службой доставки очень довольна, пользуюсь не первый раз. Спасибо!</p>
                                    </div>
                                    <div class="form_contacts">
                                        <h5>Оставить отзыв</h5>
                                        <div class="form">
                                            <p>Рейтинг</p>
											<?php rating(); ?>
                                            <div class="stars">
                                                <span><?php rating(); ?></span>
                                            </div>
                                            <p>Ваше имя</p>
                                            <input type="text" class="tp_inp" placeholder="" />
                                            <p>Номер телефона <b>*</b></p>
                                            <input type="tel" class="tp_inp" placeholder="" />
                                            <p>Ваше сообщение <b>*</b></p>
                                            <textarea class="tp_txtarea"></textarea>
                                            <p><span>Ваш запрос будет обработан в рабочее время. Обязательные поля отмечены <b>*</b></span></p>
                                            <input type="submit" class="orng_btn" value="Отправить" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap_together">
                    <h5>вместе дешевле</h5>
                    <div class="together">
                        <div class="product">
                            <div class="plus_tog"><img src="/wp-content/themes/tata/img/pin/plus.png" alt="" /></div>
                            <div class="pin_product">
                                <div class="discount_rate">-15%</div>
                            </div>
                            <a href="#" class="product_img">
                                <img src="/wp-content/themes/tata/img/prod.png" alt="" />
                            </a>
                            <a href="#" class="product_title">Фея 101 белый </a>
                            <div class="actual_price">93 руб.</div>
                        </div>
                        <div class="product">
                            <div class="plus_tog"><img src="/wp-content/themes/tata/img/pin/plus.png" alt="" /></div>
                            <div class="pin_product">
                                <div class="discount_rate">-15%</div>
                            </div>
                            <a href="#" class="product_img">
                                <img src="/wp-content/themes/tata/img/prod.png" alt="" />
                            </a>
                            <a href="#" class="product_title">Фея 101 белый </a>
                            <div class="actual_price">93 руб.</div>
                        </div>
                        <div class="product">
                            <div class="plus_tog"><img src="/wp-content/themes/tata/img/pin/equally.png" alt="" /></div>
                            <div class="pin_product">
                                <div class="discount_rate">-15%</div>
                            </div>
                            <a href="#" class="product_img">
                                <img src="/wp-content/themes/tata/img/prod.png" alt="" />
                            </a>
                            <a href="#" class="product_title">Фея 101 белый </a>
                            <div class="actual_price">93 руб.</div>
                        </div>
                        <div class="together_summ">
                            <div class="old_price">115.30 руб.</div>
                            <div class="actual_price">93 руб.</div>
                            <a href="#" class="orng_btn">Купить комплекту</a>
                        </div>
                    </div>
                </div>

                <h5>рекомендуем</h5>
                <div class="wrap_recommendations wrap_recommendations1">
                    <div class="swiper-container swiper-container3">
                        <div class="swiper-wrapper">
                            <?php if ( !function_exists( 'woocommerce_output_related_products' ) ) { 
require_once '/includes/wc-template-functions.php'; }   
$result = woocommerce_output_related_products(); ?>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-button-next3"></div>
                    <div class="swiper-button-prev swiper-button-prev3"></div>
                </div>
            </div>
			<?php do_action( 'woocommerce_after_single_product' ); ?>