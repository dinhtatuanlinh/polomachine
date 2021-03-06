<?php
// tao hằng số lưu đường dẫn
define('POLOMACHINE_THEME_DIR', get_template_directory());// đường dẫn tới thư mục theme dẫn tới các khu vực chứa file
define('POLOMACHINE_THEME_URL', get_template_directory_uri());//
define('POLOMACHINE_THEME_INC_DIR', POLOMACHINE_THEME_DIR . '/inc');
define('POLOMACHINE_THEME_ASSETS_DIR', POLOMACHINE_THEME_DIR . '/assets');
define('POLOMACHINE_THEME_CUSTOMIZER_DIR', POLOMACHINE_THEME_INC_DIR . '/customizer');
define('POLOMACHINE_THEME_URL_IMG', get_template_directory_uri() . '/img');

// -----------------
// 10. add some action hooks
// -----------------
if ( ! function_exists( 'linh_woocommerce_template_loop_product_title' ) ) {

	/**
	 * Show the product title in the product loop. By default this is an H2.
	 */
	function linh_woocommerce_template_loop_product_title() {
		echo '<h4 class="product-name ' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . '">' . get_the_title() . '</h4>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}
add_action('woocommerce_shop_loop_item_title', 'linh_woocommerce_template_loop_product_title', 10); // content-product.php
// add_action('linh_related_products', 'woocommerce_output_related_products', 5);// content-single-product.php
// add_action('linh_rate', 'woocommerce_template_loop_rating', 5);// index.php
// add_action('linh_addtocart', 'woocommerce_template_loop_add_to_cart', 5);// index.php
// add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_price', 20 );// woocomerce/content-product.php
// ------------------
// 10. admin bar
// -----------------------------
// function admin_bar(){

//     if(is_user_logged_in()){
//       add_filter( 'show_admin_bar', '__return_true' , 1000 );
//     }
//   }
//   add_action('init', 'admin_bar' );
// ---------------------------------
// 9. remove một số thành phần ko cần thiết trong trang single product
// ----------------------------------
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 ); //content-product.php
// remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20);// woocommerce/archive-product.php
// remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 ); // woocommerce/content-product.php
remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );// woocommerce/archive-product.php
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 15 );
// // ----------------------------------
// 8. định nghĩa add woocommerce support to the theme
// ----------------------------
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
}   


// ----------------------------
// 7. quản lý các hàm hỗ trợ
// lấy url từ ảnh trong bài viết
// resize lại kích thước của ảnh để tối ưu tốc độ load website
// ----------------------------
require_once POLOMACHINE_THEME_INC_DIR . '/support-functions.php';


// ----------------------------
// 6. quản lý customizer
// ----------------------------
require_once POLOMACHINE_THEME_INC_DIR . '/customizer-manager.php';
global $CustomizeVal;// khai báo biến $DDNCustomize để có thể sử dụng ở mọi nơi trong website
$CustomizeVal = new dttl_Theme_Customizer_Manager();


// ----------------------------
// 5. 
// gọi class html trong tệp tin html.php vào
// trước tiên kiểm tra xem tệp tin ZendvnHtml đã tồn tại trong plugin nào chưa nếu rồi thì ko sử dụng lại nữa
// ----------------------------
if(!class_exists('ZendvnHtml') && is_admin()){
    require_once POLOMACHINE_THEME_INC_DIR . '/html.php';

}

// ----------------------------
// 4. quản lý menu
// ----------------------------
require_once POLOMACHINE_THEME_INC_DIR . '/menu-manager.php';

// ----------------------------
// 3. khai báo các dạng format và features
// ----------------------------
add_action('after_setup_theme', 'POLOMACHINE_THEME_post_format');
function POLOMACHINE_THEME_post_format(){
    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio') );
    add_theme_support( 'post-thumbnails');
}

// ----------------------------
// 2. nap tep tin js
// ----------------------------
require_once POLOMACHINE_THEME_ASSETS_DIR . '/js/js-manager.php';
// ----------------------------
// 1. nap tep tin css
// ----------------------------
require_once POLOMACHINE_THEME_ASSETS_DIR . '/css/css-manager.php';
// ----------------------------
// 0. đổi giao diện edit về giao diện cũ
// ----------------------------
add_filter('use_block_editor_for_post', '__return_false');



// $newImgUrl = aaget_new_img_url('http://localhost/OneDrive%20-%20hus.edu.vn/lythuyet/wordpress/ddn/wp-content/uploads/2020/10/ricoh-Ri-1000.jpg', 50, 50);
//     echo "<pre style='color: red;font-size: 14px'>";
//     	print_r($newImgUrl);
//     echo "</pre>";

