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
define( 'DB_NAME', 'graduationproject3' );

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
define( 'AUTH_KEY',         'x-)?/g14,[napQ/8n =n<owWc9bO.r>C_Cek@R`?6sjhUXd84O:/-PiZ8Rvbb~]#' );
define( 'SECURE_AUTH_KEY',  'L%mjAA$7xN`=dkIG~_ P9O&V5fsQPEXBTPH@N4+/]7-n5y(W<.xS^9m^kR|Pp?~{' );
define( 'LOGGED_IN_KEY',    'bMV9>l A~,e/WdQ*AtG$8Y7A5C!Gp9}0s5+t9x}G[/]cEt)TD~$]{k7DG&hS?Gsp' );
define( 'NONCE_KEY',        'f$<!^2mjV#:v&^QwqDw&2#LJu(2)n$?[YNw|`y]ezuJSPljUhv[$gFiA=&KNOxvK' );
define( 'AUTH_SALT',        'I5JOsEdgWL)9AAHF{/{vF8J#>jrtR(n)oxUz=Kx@krV-Eh=:&%YYISSdPwi6XO~&' );
define( 'SECURE_AUTH_SALT', 'Ul5g+(v;^~V|]H<fuiIF}t=rN7ZXk6xpYnQ88w*&[9]xv,@IOco[}a<.$DWU txJ' );
define( 'LOGGED_IN_SALT',   'b :+.He!TXQ5)[7~?<R[z/RG3o:dr&7:[1}KT($Z/rCkoOEu|-B0,<&InRc<cMLi' );
define( 'NONCE_SALT',       'ZV]niPVTN3%r[58BsVj=7fMT,v`((R5CBIRxqX{Ry2nltbSTGvFA5#(%iHt57ZvJ' );

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
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
