<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'demo');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@`V&|uBJ;QJ~_5b?3{DO$,%weeo~#en#k<aor8?@,!tkOE$l0W/w!f=ZZ*3-s1y*');
define('SECURE_AUTH_KEY',  'AsXy?!OpGnz<Y?jVKv}7}$6bD+1ZtoP_q/vUG%Fp|~&3^])TgZELoQ~P0#,QT,od');
define('LOGGED_IN_KEY',    'Vgt.]u h*qnCH#NF:rBS0*}Iz)F@~dKWrnoMs6K)4jQ-Qr`Yn7n,ai?ZaN42u:5s');
define('NONCE_KEY',        '5q7-@Ch2Fl0Nf6*}D@Cdz[uADE;x0Jeo}QdCbGZV;{/PNNfn=$}(G$q7pl`Crgxq');
define('AUTH_SALT',        'KL_4f/W-OWp15TLT>SE&+f+.eW{]1yZw:n{DqV;yGz)],!zna(fCagFZV7c5YJhy');
define('SECURE_AUTH_SALT', '&|Np;Ful=bFp#^BE}4jyyVJfM*)V=sE4mOp@ML~Z-dt;():h3ZEr#{YYa0v3%%B%');
define('LOGGED_IN_SALT',   'kn|DaZB.-Da_md9_3/yg+/UtL3=jo>M*3~UiFH`|Q^},,zs0UB}M4#h]{ngj&>BL');
define('NONCE_SALT',       '#6B%&7{{Ko=oj4b|zWX#xg-&XfcKOg,o,m-QOcxN#6w(Xa2jCCNsMvT/ks&W,h-[');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
