<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp-mall-test' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'SB%kFX^&R/TmL^`a)8r%-cAp]H/%{3O->b8$}oD]ePwK)-E0<0|na;b`B(BEtSc`' );
define( 'SECURE_AUTH_KEY',  'cV7^W(JVnpqtQdc#rjA%69Pdg7f.Z<e;v43<Z XUtLltE+`lM_5n@C68NB.Cj~b0' );
define( 'LOGGED_IN_KEY',    'y2u69N7Wj=pi+tNAHl%QY_|xQJG^{%$>WeDp%+(4>Ose*xD@GwRS]_meo:0+oegf' );
define( 'NONCE_KEY',        '^PC++PaANkoy*UY@L=&hVlLCdTUAdQPQ>!uE*w&FboO2dQb#~N2to,,&kZ2eeT!K' );
define( 'AUTH_SALT',        'wEv7jKY?]:O0yhU=>ff-Y<CPJ@wA_Gt[iH{]t$vzi-cq-K(f?bqoLaGmtC}&QH/e' );
define( 'SECURE_AUTH_SALT', 'MCv5}bY1Qj~,%rTxrR^qR+v!/JW,@`PI%2`;^kQRL5<G@1+.kj?t!|(.?))rj]-C' );
define( 'LOGGED_IN_SALT',   'Z`Ut[<4^krP|-kK,>7kE*12|{9/Mh%RmAx.Wm#5*1DDI| TQ]$J~OGQbLKhv-&fh' );
define( 'NONCE_SALT',       'Z/|R5sob(%oO/KP}!CuO%a(lgPR(58BmSPf&3Gn|bMCM82w8dJ<~/Mm,L,x>Q+y@' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
