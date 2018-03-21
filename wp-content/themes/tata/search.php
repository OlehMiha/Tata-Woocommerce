<?php
/**
 * Шаблон поиска (search.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 
<div class="content">
            <div class="container">
                <div class="wrap_textpage">
                <h1><?php printf('Поиск по строке: %s', get_search_query()); // заголовок поиска ?></h1>
				<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
					<?php get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php ?>
				<?php endwhile; // конец цикла
				else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>	 


		</div>
	</div>
	</div>
<?php get_footer(); // подключаем footer.php ?>