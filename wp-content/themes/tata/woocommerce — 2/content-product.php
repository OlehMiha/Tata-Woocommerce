<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<!-- ФАИЛ ДЛЯ ОДНОГО ТОВАРА -->
<div class="product">
	<?php do_action('woocommerce_before_shop_loop_item'); ?>
	<?php do_action('woocommerce_before_shop_loop_item_title'); ?>
	<?php do_action('woocommerce_shop_loop_item_title'); ?>

	<?php $currency_symbol = html_entity_decode( get_woocommerce_currency_symbol() ); ?>
		<div class="stars norate">
            <span><?php rating(); ?></span>
        </div>
    
    <?php if($product->sale_price) { ?>

        <div class="old_price">
        <?php
			echo $product->regular_price;
			echo " ".$currency_symbol;
		?>
		</div>
        <div class="actual_price">
        <?php
			echo $product->sale_price;
			echo " ".$currency_symbol;
		?>
		</div>

	<?php } else { ?>

		<div class="actual_price actual_price_one">
        <?php
			echo $product->regular_price;
			echo " ".$currency_symbol;
		?> 
		</div>

	<?php } ?>

	
	<?php //do_action('woocommerce_after_shop_loop_item_title'); ?>

	<?php do_action('woocommerce_after_shop_loop_item'); ?> 


</div>