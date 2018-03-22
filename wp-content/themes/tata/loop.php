<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 */ 
?>
 <div class="product">
    <div class="pin_product">
        <div class="discount_rate">
    <?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
		global $post, $product;
	?>
 
	<?php 
		/* Вариативный */
		if ($product->is_on_sale() && $product->product_type == 'variable') : 
	?>

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
					echo $price . sprintf( __('%s', 'woocommerce' ), $maximumper . '%' ); 
				?>

				</div>
			</div>
		</div><!-- end callout -->


		<?php 
			/* Простой */
			elseif($product->is_on_sale() && $product->product_type == 'simple') : 
		?>
			<div class="bubble">
				<div class="inside">
 					<div class="inside-text">
	 	<?php
			$percentage = round( ( ( $product->regular_price - $product->sale_price ) / $product->regular_price ) * 100 );
			echo $price . sprintf( __('-%s', 'woocommerce' ), $percentage . '%' ); 
		?>
					</div>
				</div>
	 		</div><!-- end bubble -->
			<?php endif;?>
			</div>

            <div class="hit_pin">
                ХИТ
            </div>
    </div>
        <a href="<?php the_permalink();?>" class="product_img">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
        </a>
        <a href="<?php the_permalink();?>" class="product_title"><?php the_title(); // (4.2) ?></a>
        <div class="stars norate">
            <span><?php rating(); ?></span>
        </div>
        
        <div class="old_price">
        <?php
			echo $product->regular_price;
		?> руб. 
		</div>
        <div class="actual_price">
        <?php
			echo $product->sale_price;
		?> руб. 
		</div>
       	
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