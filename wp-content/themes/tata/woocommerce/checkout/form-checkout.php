<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
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
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<?php
wc_print_notices();

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}

?>

<form name="checkout" method="post" class="woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
 
	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
		
		<div class="woocommerce-billing-fields wrap_checkout">
		
    		<?php do_action( 'woocommerce_checkout_billing' ); ?>
	
			
		


			<div class="item_checkout is_open">
		        <div class="title_checkout">
		            <p>3  способ оплаты</p>
		            <a href="#" class="edit_checkout">Редактировать</a>
		        </div>
		        <div class="checkout">

					

		            <div class="ckeck_delivery_method paym_method">
		                <label><input type="radio" name="radio" />
		                    <div class="del_label">
		                        <span class="imp_paym_method"><img src="img/pin/p1.png" alt="" /></span>
		                        <h5>Наличными курьеру</h5>
		                        <p>После получения заказ от курьера</p>
		                    </div>
		                </label>
		                <label><input type="radio" name="radio" />
		                    <div class="del_label">
		                        <span class="imp_paym_method"><img src="img/pin/p2.png" alt="" /></span>
		                        <h5>Банковской картой</h5>
		                        <p>При помощи карт Visa, Mastercard или Белкарт</p>
		                    </div>
		                </label>
		                <label><input type="radio" name="radio" />
		                    <div class="del_label">
		                        <span class="imp_paym_method"><img src="img/pin/p3.png" alt="" /></span>
		                        <h5>Система ЕРИП</h5>
		                        <p>При помощи касс банков, платежных терминалов и интернет-банкиг</p>
		                    </div>
		                </label>


						<?php if ( WC()->cart->needs_payment() ) : ?>
							<ul class="wc_payment_methods payment_methods methods">
								<?php
									if ( ! empty( $available_gateways ) ) {
										foreach ( $available_gateways as $gateway ) {
											wc_get_template( 'checkout/payment-method.php', array( 'gateway' => $gateway ) );
										}
									} else {
										echo '<li class="woocommerce-notice woocommerce-notice--info woocommerce-info">' . apply_filters( 'woocommerce_no_available_payment_methods_message', WC()->customer->get_billing_country() ? __( 'Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.', 'woocommerce' ) : __( 'Please fill in your details above to see available payment methods.', 'woocommerce' ) ) . '</li>';
									}
								?>
							</ul>
						<?php endif; ?>


		            </div>

		        </div>
		    </div>
		</div>

		

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>

	<!-- 
		<h3 id="order_review_heading"><?php _e( 'Your order', 'woocommerce' ); ?></h3> 
	-->

	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="woocommerce-checkout-review-order wrap_checkout_total">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?> 







<!-- 

<div class="wrap_checkout">
	<div class="item_checkout">
        <div class="title_checkout">
            <p>1  Контактная информация</p>
            <a href="checkout.html#" class="edit_checkout">Редактировать</a>
        </div>
        <div class="checkout">
            <div class="form_contacts">
                <div class="form">
                    <p>Ваше имя</p>
                    <input type="text" class="tp_inp" placeholder="" />
                    <p>Номер телефона <b>*</b></p>
                    <input type="tel" class="tp_inp" placeholder="" />
                    <p>Ваше сообщение <b>*</b></p>
                    <textarea class="tp_txtarea"></textarea>
                    <p><span>Ваш запрос будет обработан в рабочее время. Обязательные поля отмечены <b>*</b></span></p>
                    <input type="submit" class="orng_btn" value="Продолжить" />
                </div>
            </div>
        </div>
    </div>
    <div class="item_checkout">
        <div class="title_checkout">
            <p>2  способ доставки</p>
            <a href="checkout.html#" class="edit_checkout">Редактировать</a>
        </div>
        <div class="checkout">
            <div class="delivery_method">
                <div class="city_del">Город доставки:
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
                        </select>
                    </div>
                </div>
                <div class="ckeck_delivery_method">
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
                    <div class="inp_addr">
                        <p>Улица <span>*</span></p>
                        <input type="text" class="tp_inp" placeholder="" />
                    </div>
                    <div class="inp_addr">
                        <p>Дом <span>*</span></p>
                        <input type="text" class="tp_inp" placeholder="" />
                    </div>
                    <div class="inp_addr">
                        <p>Корпус</p>
                        <input type="text" class="tp_inp" placeholder="" />
                    </div>
                    <div class="inp_addr">
                        <p>Квартира</p>
                        <input type="text" class="tp_inp" placeholder="" />
                    </div>
                </div>
                <div><a href="checkout.html#" class="add_comm">Добавить комментарий к заказу</a></div>
                <a href="checkout.html#" class="orng_btn">Продолжить</a>
            </div>
        </div>
    </div>
    <div class="item_checkout">
        <div class="title_checkout">
            <p>3  способ оплаты</p>
            <a href="checkout.html#" class="edit_checkout">Редактировать</a>
        </div>
        <div class="checkout">
            <div class="ckeck_delivery_method paym_method">
                <label><input type="radio" name="radio" />
                    <div class="del_label">
                        <span class="imp_paym_method"><img src="img/pin/p1.png" alt="" /></span>
                        <h5>Наличными курьеру</h5>
                        <p>После получения заказ от курьера</p>
                    </div>
                </label>
                <label><input type="radio" name="radio" />
                    <div class="del_label">
                        <span class="imp_paym_method"><img src="img/pin/p2.png" alt="" /></span>
                        <h5>Банковской картой</h5>
                        <p>При помощи карт Visa, Mastercard или Белкарт</p>
                    </div>
                </label>
                <label><input type="radio" name="radio" />
                    <div class="del_label">
                        <span class="imp_paym_method"><img src="img/pin/p3.png" alt="" /></span>
                        <h5>Система ЕРИП</h5>
                        <p>При помощи касс банков, платежных терминалов и интернет-банкиг</p>
                    </div>
                </label>
            </div>

        </div>
    </div>
</div> -->


<!-- 

<div class="wrap_checkout_total">
    <div class="left_checkout_total">
        <div class="product_mod_bask">
            <a href="checkout.html#" class="product_mod_img"><img src="img/prod.png" alt="" /></a>
            <a href="checkout.html#" class="product_mod_title">Детская кровать-трансформер Daka Baby<br/>
                1 шт.
            </a>
            <div class="product_mod_price">
                102.30 руб.
            </div>
        </div>
        <div class="product_mod_bask">
            <a href="checkout.html#" class="product_mod_img"><img src="img/prod.png" alt="" /></a>
            <a href="checkout.html#" class="product_mod_title">Детская кровать-трансформер Daka Baby<br/>
                1 шт.
            </a>
            <div class="product_mod_price">
                102.30 руб.
            </div>
        </div>
        <div class="product_mod_bask">
            <a href="checkout.html#" class="product_mod_img"><img src="img/prod.png" alt="" /></a>
            <a href="checkout.html#" class="product_mod_title">Детская кровать-трансформер Daka Baby<br/>
                1 шт.
            </a>
            <div class="product_mod_price">
                102.30 руб.
            </div>
        </div>
    </div>
    <div class="checkout_total">
        <div class="item_checkout_total">
            <h5>Итого</h5>
            <table class="table_checkout_total">
                <tr>
                    <td>Товаров в корзине</td>
                    <td><p>17</p></td>
                </tr>
                <tr>
                    <td>Экономия</td>
                    <td><span>- 31.28 руб.</span></td>
                </tr>
                <tr>
                    <td>Стоимость доставки</td>
                    <td><p>10.80 руб.</p></td>
                </tr>
                <tr>
                    <td><p>Сумма заказа</p></td>
                    <td><b>2 095.10 руб.</b></td>
                </tr>
            </table>
        </div>
        <a href="checkout.html#" class="orng_btn">Оформить заказ</a>
    </div>
</div> -->
            
	

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
