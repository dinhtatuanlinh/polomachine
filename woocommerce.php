

<?php

if ( is_singular( 'product' ) ) {
    get_header();
    get_sidebar(); 
 woocommerce_content();
}else{
//For ANY product archive.
//Product taxonomy, product search or /shop landing
get_header();
    get_sidebar();
 woocommerce_get_template( 'archive-product.php' );// woocommerce có lỗi khi gọi tệp tin archive-product.php nên phải thêm dòng này để fix
}
?>
<?php get_footer(); ?>