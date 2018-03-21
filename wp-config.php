<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'saharole_woo');

/** Имя пользователя MySQL */
define('DB_USER', 'saharole_woo');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '0lP1xZ&P');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bA8?e<+TiwN{?L9?2*;Lq/!I3+72/;->,m2I&]>}WJ~XFs||_a}8qI<(unN$l>F1');
define('SECURE_AUTH_KEY',  'Ud&lQaWfnYk|O_]C/5MP(#O83WqZ#Nx[J8Q*Y$LuHPq4nRkvI={$(pzaVP7~P+mm');
define('LOGGED_IN_KEY',    '-Z8?hEmk5jqAcw)uC[>zSi|+I^9nTsU}+<dw%=?c<8&+!.2?ZF~K[&JHb ~)tj+-');
define('NONCE_KEY',        '[D}=*DPaNe],8`mb-z+qOvud.)RGv?!uXZ%nk-}u^oQ{Lk+!I&U ~egP?a)Suem`');
define('AUTH_SALT',        '?Ii4^N#zNM%+r?ttYn@-Jjwx{p^{Sw/e;Fkc^I/Nys]&H jvaaX21aqN8ZB&ErYc');
define('SECURE_AUTH_SALT', 'aS0UZu5S;_fwlXyQcS@XvOI)s^d+7%)=|.?g64-5N#bta}<J>#Mhqa|H,IA*o G|');
define('LOGGED_IN_SALT',   'of$l:@>:V0vmsT{CR]Gx|K1FFq^^24I2NTbah._Vr/B4g(kd+;LmVv`ibS,g{p{<');
define('NONCE_SALT',       'sGCS--a.ntuQr@.rxU8kYa_q@-z<Y~/3ScU[i6Q}IB%&^TnwRnd)?|p/9G+D/-$ ');
/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
