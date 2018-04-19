<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
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
	exit;
}

global $product, $woocommerce_loop;

if ( empty( $product ) || ! $product->exists() ) {
	return;
}

if ( ! $related = $product->get_related( $posts_per_page ) ) {
	return;
}

$args = apply_filters( 'woocommerce_related_products_args', array(
	'post_type'            => 'product',
	'ignore_sticky_posts'  => 1,
	'no_found_rows'        => 1,
	'posts_per_page'       => $posts_per_page,
	'orderby'              => $orderby,
	'post__in'             => $related,
	'post__not_in'         => array( $product->id )
) );

$products                    = new WP_Query( $args );
$woocommerce_loop['name']    = 'related';
$woocommerce_loop['columns'] = apply_filters( 'woocommerce_related_products_columns', $columns );

if ( $products->have_posts() ) : ?>



			<?php while ( $products->have_posts() ) : $products->the_post(); ?>

                            <div class="swiper-slide">
                                                                    <div class="product">
                                        <div class="pin_product">
                                            <div class="discount_rate"><?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
 
global $post, $product;
 
?>
 
<?php if ($product->is_on_sale() && $product->product_type == 'variable') : ?>
<div class="bubble">
 
<div class="inside">
 
<div class="inside-text">
 
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
 
echo $price . sprintf( __('%s', 'woocommerce' ), $maximumper . '%' ); ?></div>
 
</div>
 
</div><!-- end callout -->
<?php elseif($product->is_on_sale() && $product->product_type == 'simple') : ?>
<div class="bubble">
 
<div class="inside">
 
<div class="inside-text">
 
<?php
 
$percentage = round( ( ( $product->regular_price - $product->sale_price ) / $product->regular_price ) * 100 );
 
echo $price . sprintf( __('-%s', 'woocommerce' ), $percentage . '%' ); ?></div>
 
</div>
 
</div><!-- end bubble -->
<?php endif;?></div>
                                        </div>
                                        <a href="<?php the_permalink();?>" class="product_img">
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                                        </a>
                                        <a href="<?php the_permalink();?>" class="product_title"><?php the_title(); // (4.2) ?></a>
                                        <div class="stars">
                                            <span><?php rating(); ?></span>
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
                                    </div>
                            </div>

			<?php endwhile; // end of the loop. ?>



<?php endif;

wp_reset_postdata();
