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
                            <div id="grd" class="product">

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
                                    <div class="new_pin">NEW</div>
                                </div>
                                        <a href="<?php the_permalink();?>" class="product_img">
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                                        </a>
<a href="<?php the_permalink();?>" class="product_title"><?php the_title(); // (4.2) ?></a>
                                        <div class="stars">
                                            <span><?php rating(); ?></span>
                                        </div>
								<div class="info_product displaynone">
<?php
/**
 * Product attributes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$has_row    = false;
$alt        = 1;
$attributes = $product->get_attributes();

ob_start();

?>                                    <table class="characteristics">


	<?php if ( $product->enable_dimensions_display() ) : ?>

		<?php if ( $product->has_weight() ) : $has_row = true; ?>
			<tr class="<?php if ( ( $alt = $alt * -1 ) === 1 ) echo 'alt'; ?>">
				<th><?php _e( 'Weight', 'woocommerce' ) ?></th>
				<td class="product_weight"><?php echo wc_format_localized_decimal( $product->get_weight() ) . ' ' . esc_attr( get_option( 'woocommerce_weight_unit' ) ); ?></td>
			</tr>
		<?php endif; ?>

		<?php if ( $product->has_dimensions() ) : $has_row = true; ?>
			<tr class="<?php if ( ( $alt = $alt * -1 ) === 1 ) echo 'alt'; ?>">
				<th><?php _e( 'Dimensions', 'woocommerce' ) ?></th>
				<td class="product_dimensions"><?php echo $product->get_dimensions(); ?></td>
			</tr>
		<?php endif; ?>

	<?php endif; ?>

	<?php foreach ( $attributes as $attribute ) :
		if ( empty( $attribute['is_visible'] ) || ( $attribute['is_taxonomy'] && ! taxonomy_exists( $attribute['name'] ) ) ) {
			continue;
		} else {
			$has_row = true;
		}
		?>
                                        <tr>
                                            <td><span><?php echo wc_attribute_label( $attribute['name'] ); ?></span></td>
			<td><?php
				if ( $attribute['is_taxonomy'] ) {

					$values = wc_get_product_terms( $product->id, $attribute['name'], array( 'fields' => 'names' ) );
					echo apply_filters( 'woocommerce_attribute', wpautop( wptexturize( implode( ', ', $values ) ) ), $attribute, $values );

				} else {

					// Convert pipes to commas and display values
					$values = array_map( 'trim', explode( WC_DELIMITER, $attribute['value'] ) );
					echo apply_filters( 'woocommerce_attribute', wpautop( wptexturize( implode( ', ', $values ) ) ), $attribute, $values );

				}
			?></td>
	<?php endforeach; ?>
</tr>
</table>
                                </div>
                                        <div class="old_price"><?php
#the product must be instantiated above like $product = new WC_Product();
echo $product->regular_price;
?> руб. </div>
                                        <div class="actual_price"><?php
#the product must be instantiated above like $product = new WC_Product();
echo $product->sale_price;
?> руб. </div>
<?php global $product;

echo apply_filters( 'woocommerce_loop_add_to_cart_link',
	sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="orng_btn">В корзину</a>',
		esc_url( $product->add_to_cart_url() ),
		esc_attr( isset( $quantity ) ? $quantity : 1 ),
		esc_attr( $product->id ),
		esc_attr( $product->get_sku() ),
		esc_attr( isset( $class ) ? $class : 'button' ),
		esc_html( $product->add_to_cart_text() )
	),
$product );?>    

	<?php
	/**
	 * woocommerce_after_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
 </div>
 