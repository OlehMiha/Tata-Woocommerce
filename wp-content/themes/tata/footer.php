 <div class="footer">
        <div class="container">
            <div class="left_ftr">
                <a href="/" class="logo_ftr"><img src="/wp-content/themes/tata/img/logo.png" alt="" /></a>
                <div class="copyrighted"><?php echo $mytheme['copy']; ?></div>
            </div>
            <div class="catalog_nav">
                <h5>Каталог</h5>
                <ul>
                    <?php wp_nav_menu( array(
	'theme_location'  => '',
	'menu'            => 'footer1', 
	'container'       => '', 
	'container_class' => '', 
	'container_id'    => '',
	'menu_class'      => 'menu', 
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '%3$s',
	'depth'           => 0,
	'walker'          => '',
) ); ?>
                </ul>
                <ul>
                    <?php wp_nav_menu( array(
	'theme_location'  => '',
	'menu'            => 'footer2', 
	'container'       => '', 
	'container_class' => '', 
	'container_id'    => '',
	'menu_class'      => 'menu', 
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '%3$s',
	'depth'           => 0,
	'walker'          => '',
) ); ?>
                </ul>
            </div>
            <div class="service_nav">
                <h5>Сервис</h5>
                <ul>
                    <?php wp_nav_menu( array(
	'theme_location'  => '',
	'menu'            => 'topheader', 
	'container'       => '', 
	'container_class' => '', 
	'container_id'    => '',
	'menu_class'      => 'menu', 
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '%3$s',
	'depth'           => 0,
	'walker'          => '',
) ); ?>
                </ul>
            </div><?php global $mytheme; ?>
            <div class="right_ftr">
                <h5>Контакт-центр</h5>
                <div class="phone_ftr">
                    <a href="tel:<?php echo $mytheme['phone']; ?>"><?php echo $mytheme['phone']; ?></a>
                    <a href="tel:<?php echo $mytheme['phone2']; ?>"><?php echo $mytheme['phone2']; ?></a>
                </div>
                <a href="mailto:<?php echo $mytheme['email']; ?>" class="mail"><?php echo $mytheme['email']; ?></a>
                <div class="working_hours">
                    <p>
                        <b>Режим работы: </b>
                        <?php echo $mytheme['regim']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modal_call">
    <h5>Заказать обратный звонок</h5>
	<?php echo do_shortcode('[contact-form-7 id="90" title="Звонок"]'); ?>
</div>

<div class="modal" id="modal_basket">
    <div class="top_modal_basket">
        <h5>Товар добавлен в корзину</h5>
        <p>В вашей корзине <a href="#">1 товар</a></p>
        <div class="product_mod_bask">
            <a href="#" class="product_mod_img"><img src="/wp-content/themes/tata/img/prod.png" alt="" /></a>
            <a href="#" class="product_mod_title">Детская кровать-трансформер Daka Baby</a>
            <div class="number_inp">
                <input type="number" value="1"/>
            </div>
            <div class="product_mod_price">
                102.30 руб.
            </div>
        </div>
        <div class="btn_top_modal_basket">
            <a href="#" class="blue_btn">Продолжить покупки</a>
            <a href="#" class="orng_btn">Оформить заказ</a>
        </div>
    </div>
    <div class="btm_modal_basket">
        <h5>рекомендуем</h5>
        <div class="wrap_recommendations">
            <div class="swiper-container swiper-container3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product">
                            <div class="pin_product">
                                <div class="discount_rate">-15%</div>
                            </div>
                            <a href="#" class="product_img">
                                <img src="/wp-content/themes/tata/img/prod.png" alt="" />
                            </a>
                            <a href="#" class="product_title">Фея 101 белый </a>
                            <div class="stars">
                                <span><img src="/wp-content/themes/tata/img/pin/star_full.png" alt=""></span>
                                <span><img src="/wp-content/themes/tata/img/pin/star_full.png" alt=""></span>
                                <span><img src="/wp-content/themes/tata/img/pin/star_empty.png" alt=""></span>
                                <span><img src="/wp-content/themes/tata/img/pin/star_empty.png" alt=""></span>
                                <span><img src="/wp-content/themes/tata/img/pin/star_empty.png" alt=""></span>
                            </div>
                            <div class="old_price">115.30 руб.</div>
                            <div class="actual_price">93 руб.</div>
                            <a data-fancybox data-src="#modal_basket" href="#" class="orng_btn">В корзину</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <div class="pin_product">
                                <div class="discount_rate">-15%</div>
                            </div>
                            <a href="#" class="product_img">
                                <img src="/wp-content/themes/tata/img/prod.png" alt="" />
                            </a>
                            <a href="#" class="product_title">Фея 101 белый </a>
                            <div class="stars">
                                <span><img src="/wp-content/themes/tata/img/pin/star_full.png" alt=""></span>
                                <span><img src="/wp-content/themes/tata/img/pin/star_full.png" alt=""></span>
                                <span><img src="/wp-content/themes/tata/img/pin/star_empty.png" alt=""></span>
                                <span><img src="/wp-content/themes/tata/img/pin/star_empty.png" alt=""></span>
                                <span><img src="/wp-content/themes/tata/img/pin/star_empty.png" alt=""></span>
                            </div>
                            <div class="old_price">115.30 руб.</div>
                            <div class="actual_price">93 руб.</div>
                            <a data-fancybox data-src="#modal_basket" href="#" class="orng_btn">В корзину</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <div class="pin_product">
                                <div class="discount_rate">-15%</div>
                            </div>
                            <a href="#" class="product_img">
                                <img src="/wp-content/themes/tata/img/prod.png" alt="" />
                            </a>
                            <a href="#" class="product_title">Фея 101 белый </a>
                            <div class="stars">
                                <span><img src="/wp-content/themes/tata/img/pin/star_full.png" alt=""></span>
                                <span><img src="/wp-content/themes/tata/img/pin/star_full.png" alt=""></span>
                                <span><img src="/wp-content/themes/tata/img/pin/star_empty.png" alt=""></span>
                                <span><img src="/wp-content/themes/tata/img/pin/star_empty.png" alt=""></span>
                                <span><img src="/wp-content/themes/tata/img/pin/star_empty.png" alt=""></span>
                            </div>
                            <div class="old_price">115.30 руб.</div>
                            <div class="actual_price">93 руб.</div>
                            <a data-fancybox data-src="#modal_basket" href="#" class="orng_btn">В корзину</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <div class="pin_product">
                                <div class="discount_rate">-15%</div>
                            </div>
                            <a href="#" class="product_img">
                                <img src="/wp-content/themes/tata/img/prod.png" alt="" />
                            </a>
                            <a href="#" class="product_title">Фея 101 белый </a>
                            <div class="stars">
                                <span><img src="/wp-content/themes/tata/img/pin/star_full.png" alt=""></span>
                                <span><img src="/wp-content/themes/tata/img/pin/star_full.png" alt=""></span>
                                <span><img src="/wp-content/themes/tata/img/pin/star_empty.png" alt=""></span>
                                <span><img src="/wp-content/themes/tata/img/pin/star_empty.png" alt=""></span>
                                <span><img src="/wp-content/themes/tata/img/pin/star_empty.png" alt=""></span>
                            </div>
                            <div class="old_price">115.30 руб.</div>
                            <div class="actual_price">93 руб.</div>
                            <a data-fancybox data-src="#modal_basket" href="#" class="orng_btn">В корзину</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <div class="pin_product">
                                <div class="discount_rate">-15%</div>
                            </div>
                            <a href="#" class="product_img">
                                <img src="/wp-content/themes/tata/img/prod.png" alt="" />
                            </a>
                            <a href="#" class="product_title">Фея 101 белый </a>
                            <div class="stars">
                                <span><img src="/wp-content/themes/tata/img/pin/star_full.png" alt=""></span>
                                <span><img src="/wp-content/themes/tata/img/pin/star_full.png" alt=""></span>
                                <span><img src="/wp-content/themes/tata/img/pin/star_empty.png" alt=""></span>
                                <span><img src="/wp-content/themes/tata/img/pin/star_empty.png" alt=""></span>
                                <span><img src="/wp-content/themes/tata/img/pin/star_empty.png" alt=""></span>
                            </div>
                            <div class="old_price">115.30 руб.</div>
                            <div class="actual_price">93 руб.</div>
                            <a data-fancybox data-src="#modal_basket" href="#" class="orng_btn">В корзину</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-button-next3"></div>
            <div class="swiper-button-prev swiper-button-prev3"></div>
        </div>
    </div>
</div>

<script src="/wp-content/themes/tata/js/script.js"></script>
<script src="/wp-content/themes/tata/js/swiper.min.js"></script>
<script src="/wp-content/themes/tata/js/fancybox.min.js"></script>
<script src="/wp-content/themes/tata/js/formstyler.js"></script>
<script src="/wp-content/themes/tata/js/main.js"></script>
<script src="/wp-content/themes/tata/js/nouislider.min.js"></script>
<script src="/wp-content/themes/tata/js/mCustomScrollbar.concat.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/ratings/rating.js"></script>
<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>