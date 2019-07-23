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
define( 'DB_NAME', 'vt_socks' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '7JkR|N]MjvKlG@N+Ks3rOhSfaTGz(E?P>Q:K-M+nAQUdcBB>gT#:[Mxdzf9[d, D' );
define( 'SECURE_AUTH_KEY',  'gJ!%^mIdEG&Z9Wy5UqH$F6LhRjh{{&j#f*+*IO5`Lc/G)?7^XP5kAu-61B$^1#>{' );
define( 'LOGGED_IN_KEY',    '=3ZT> fbt.b]hP7vqmmq2rEd$38vaHNG#)oAZw&P#$H.^388NT]~=9Vs%|`g=Z?N' );
define( 'NONCE_KEY',        '`1<T70AqZqZ.NC}U*5yf$9ZsKDyyN8i:ZJ{1do2^D%ngm0zwf7j[$)(gw/<iA[yr' );
define( 'AUTH_SALT',        'Y,de)VQ3?a;Wz/WJ;}`.a+t}.Nyf+.y_q?HGu^Yx?x^njFuR7C9 lz_ZCGdHw(]k' );
define( 'SECURE_AUTH_SALT', 'F$QayUS(qFQ_TusFt&X*Zbu$wRjm%I?UE@{DZ.*]ad[Bf^:n~:>;r^{27A<XLDY3' );
define( 'LOGGED_IN_SALT',   'hvF))(KL_kf^=/%Z:cQC67XGigtKx*5~I{b),07<j0x~_sQ*4okojEVpqURXRzw$' );
define( 'NONCE_SALT',       '(nnF7g?[0tznvvPu--2r4y{WL&;xJb##n`AJI>xgv*/FAl9OC[7!bId/6{E59k;>' );

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
