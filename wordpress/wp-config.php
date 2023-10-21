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
define( 'DB_NAME', 'petrovich' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Roman' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'giveme5' );

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
define( 'AUTH_KEY',         'S0xJbvN,-f~vlcTf.+uBK7dNUp(|~NfI!0ji9b`m3Is~LK&8d5d6_=/<IDLi[1M#' );
define( 'SECURE_AUTH_KEY',  'Ao._nQ|NCP8J<7(i!DcLC,6mXl+l= .>mG{HrQhin+5sSLyP{2R_=5%a%D^SoiG ' );
define( 'LOGGED_IN_KEY',    'd-z@bzs{2!`?Gt2HfDSqMUi;#q5OpJGfhzD 1qc+Fq_`|S}h6h@;Etg;w8$bYi=]' );
define( 'NONCE_KEY',        'TVBV/fO%]L(B-~8 zvnrz9y=u{Ju?2,L+r+&.)DmrPm5.echVXWt!n-9UTJ|;s$b' );
define( 'AUTH_SALT',        'L)#9Jo&(wXAqW$XO@k_vIl9:M9)E@`{T_GU}:@&!T1y.WoHgd@g& B6wcpX$MkG)' );
define( 'SECURE_AUTH_SALT', ',.U%Dk6c`#YA59*itj)ddpd?^bq)<^Q9?QAO(+hFC43Q(.7Ne=df<xRr~x|heJ?Z' );
define( 'LOGGED_IN_SALT',   'C4Vlmf%0ZhrSruEvZD2Vj+&k/+7<42J-@%LTx)>#JOx/6d_P1;LMqX#>NPR3@eO0' );
define( 'NONCE_SALT',       'COJ4&[n&zz(l,dKg!U)dp4]=tP]: jcl5NUPd`_d/pKZ1$.34>DZ=PeH)4VTt>Ow' );

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
