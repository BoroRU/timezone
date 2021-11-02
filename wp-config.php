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
define( 'DB_NAME', 'timezon' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'B0HY,oKa/pR>7|#ZptS[X>LB*1)Yc,XV;3, &s[+1`BSCOE~kzU}5yRNr`MIG4Wp' );
define( 'SECURE_AUTH_KEY',  't%MXCrP9S%yNfU1f:%U13k>K,N#o=$;lVAm)(8#t+[?Xz)gr;6ECi,6np7U)SnGN' );
define( 'LOGGED_IN_KEY',    'gHgYxUDbh%2/knpz?D-I3Ns5:DnLNWgGE)*uxVaYFQa!X*Dsv/J]0?o~5*F!{YHV' );
define( 'NONCE_KEY',        'j5?s!T=&oR?EeEBUGQ5z-<DM$}(rB]o!?0pBH##%E@wBs3Tp7CY]S::rBH6hAmE1' );
define( 'AUTH_SALT',        'HE$lG@`Z`_?Hx.` L]dSdOnyp/CpV;c$XgIRE;]yJe`KK)gvd,AYM&sYHwq>xI8O' );
define( 'SECURE_AUTH_SALT', 'I*2>%EH,X@(N^cp`@9`4DDBA7OR&kH.h3Du/qI`T#n;ro0}UH9YDl~5dZv|ShXs(' );
define( 'LOGGED_IN_SALT',   '+Knc<k_]y5/NS()&idIn^}7rZoQb{zo&>6 d12G!hF}n:h7<uCYRMbgdN7}L*.n_' );
define( 'NONCE_SALT',       '>1cvC5MWxiVdg8/u$pU!$zisfm8P9vmT;0Xt@+xfp<a;QYCL~]_t-u2R<j&&4X2(' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
