<?php
/**
 * Страница 404 ошибки (404.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // Подключаем header.php ?>
<div class="content">
            <div class="container">
                <div class="wrap_404">
                    <div class="img_404">
                        <p>4 <img src="/wp-content/themes/tata/img/404.png" alt=""> 4</p>
                    </div>
                    <div class="txt_404">
                        <h5>Страница не найдена</h5>
                        <p>Данной страницы не существует. Для старта покупок, зайдите в <a href="/shop/"> Каталог</a> нашего интернет-магазина. Ассортимент товаров для кровли и строительства весьма широк.</p>
                        <a href="/shop/" class="blue_btn">Перейти в каталог</a>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); // подключаем footer.php ?>