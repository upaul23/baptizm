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
define('DB_NAME', 'baptizm');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '{m.Mn1HXHIYW:m0<M=H%Edk.S~xnmUcqM|t&Hi,^pt7y>$B^Bhh|Gi2)GpDIRRbo');
define('SECURE_AUTH_KEY',  '.>gbWz1y(^n$Ps;?>AdCUe/a^EBK,l-_6]$:RZfHrli-cI^^X@y~3 ~`0j*0*2Y*');
define('LOGGED_IN_KEY',    ';$!aF-E;fuNkLMGwR?N:*K <J:QXb|D]_&&H+HDCtXG1!Xw-.qt-Z|G3XA 5,3yN');
define('NONCE_KEY',        'k{|5RZe5q}}g%h)Ni=[Uxn-)j?hLE>p;e)IpL=.U|]6V&#4MwB}W(oKE8X74pQ7g');
define('AUTH_SALT',        'u1tn=8svjpu.iz-DyCB pFQF5$)LZ3gR^d7tL[NV~.Ewlu>si3n##g:t;2P$%kU{');
define('SECURE_AUTH_SALT', '`t?==c,;k[K/?z2ZQA;2,i:&|^i}vjj)r&aiC=IOEa-8ONt]GC5TtWCbAr~AuxM^');
define('LOGGED_IN_SALT',   'H$C:szoceJ%B5A1St,NPT{i%%,80IVi2SydCIb6m*(qn?!F055=#yS~),pOtNG9)');
define('NONCE_SALT',       '(o0|vD/B&D+Wo@fN.,zpFe8{BF 2Gv*RTKZp0Rs77/ucV</AG;~WBGd=$kPkNc=!');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'tfg_';

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
