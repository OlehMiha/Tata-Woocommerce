<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
    <!-- Основной контент -->
	<div class="content">
        <?php woocommerce_content(); ?> 
    </div>	

<?php get_footer(); // подключаем footer.php ?>