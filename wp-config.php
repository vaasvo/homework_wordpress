<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'test');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd7_bCmgzJsb${vNMSI;:X}$%<>#2#CCeBW!]&97)/NX2$8I6kq[7hB9=&$Fp~3T+');
define('SECURE_AUTH_KEY',  '-:,U}r3`%&] +c9BL*+79:U5yk[ #zemy9{lR6KaFXirG5xCV7u(e& h%>^%-zpb');
define('LOGGED_IN_KEY',    '&4j=>?W@IE#q%L9zrl<oHfoWU<Nl{u`A<mgcxtv-C&;s+u^$ d86o+)KvonhFQLO');
define('NONCE_KEY',        'fyMZzB+TiGf|pp]ZGlB&hl+[;TTbV&|kd6i7jKUt@{O3Kk+qEP|h7Mf,IB$,-5@U');
define('AUTH_SALT',        '%[}_8+oS20N6hKX5_+Xe=JG0&0AEn2gG_g+G:7Opkt]uc|<lpid@IhY[1qh-pE)Z');
define('SECURE_AUTH_SALT', ']PQr)Z/RC ciehj[=1TN}-yy,/%2e#I^.7W$@xn%LT!`?B]<NRv1BlKvr0E-c4WE');
define('LOGGED_IN_SALT',   ';s;b|{E5j0x}+WxoKy*upd10p^zHWR`T)>#a-[@O,o9W&sYng[8-C(zc[7_~~E@L');
define('NONCE_SALT',       ')R}YBH0jdg+3-sx?l~:ooA!|L]P5!CPsp VSSGYcEC-]q=7Ai6Ng`/ ([h90jw3:');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
