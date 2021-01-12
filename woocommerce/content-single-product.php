<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
$upload_dir = wp_upload_dir();// lây url tới folder upload để lấy hình ảnh

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$image_ids = $product->get_gallery_image_ids();

$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();
$average      = $product->get_average_rating();
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );


/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" class="product-detail__right content-right" <?php wc_product_class( '', $product ); ?>>
	<h2 class="main-title">máy nén khí polo - máy nén khí chất lượng cao - bảo hành chính hãng</h2>

	<div class="product__infor">
		<div class="row">
			<div class="product-thumb col-lg-6">
				<div class=" gallery-top">
					<div class="swiper-wrapper">
						<?php 
							for($i = 0; $i < count($image_ids); $i++){
								$image_link = wp_get_attachment_url( $image_ids[$i] );
						?>
								<div class="swiper-slide"><img src="<?php echo $image_link; ?>" alt=""></div>
						<?php }  ?>
					</div>
					<!-- Add Arrows -->
					<div class="swiper-button-next swiper-button-white"></div>
					<div class="swiper-button-prev swiper-button-white"></div>
				</div>
				<div class=" gallery-thumbs">
					<div class="swiper-wrapper">
						<?php 
							for($i = 0; $i < count($image_ids); $i++){
								$image_link = wp_get_attachment_url( $image_ids[$i] );
						?>
								<div class="swiper-slide"><img src="<?php echo $image_link; ?>" alt=""></div>
						<?php }  ?>
					</div>
				</div>
			</div>
			<div class="product-text col-lg-6">
				<h1><?php the_title(); ?></h1>
				<div class="spec">
					<h3>Thông số kĩ thuật của máy:</h3>
					<div><?php echo $product->get_short_description(); ?></div>
				</div>
				<div class="product-text__btn">
					<a href="tel:0828039666">Liên hệ 0828.039.666 để mua sản phẩm</a>
				</div>
			</div>
		</div>
	</div>
	<div class="product-detail__content">
		<div class="row">
			<div class="col-lg-12 --top">
				<span>Thông tin sản phẩm</span>
				<div><?php the_content(); ?></div>
			</div>
			<div class="col-lg-12">
				<!-- sản phẩm liên quan -->
				<div class="special-products">
					<div class="title flex b-left bg-text">
						<h3>Sản phẩm liên quan</h3>
						<img src="<?php echo $upload_dir['url']; ?>/text-banner.png" alt="">
					</div>
					<div class="special-products__wrap">
						<div class="special-products__card card-infor">
							<a href=""> <img data-src="<?php echo $upload_dir['url']; ?>/blue1.png" alt="img-detail" class="lazyload"></a>

							<div class="text">
								<a href="">
									<h4 class="product-name">Máy nén khí không dầu  </h4>
								</a>

								<span class="price">12.800.000</span>
							</div>
						</div>
						<div class="special-products__card card-infor">
							<a href=""> <img data-src="<?php echo $upload_dir['url']; ?>/red1.png" alt="img-detail" class="lazyload"></a>

							<div class="text">
								<a href="">
									<h4 class="product-name">Máy nén khí không dầu 150 lít 6hp Polo </h4>
								</a>

								<span class="price">11.500.000</span>
							</div>
						</div>
						<div class="special-products__card card-infor">
							<a href=""> <img data-src="<?php echo $upload_dir['url']; ?>/blue1.png" alt="img-detail" class="lazyload"></a>

							<div class="text">
								<a href="">
									<h4 class="product-name">Máy nén khí không dầu 150 lít 6hp Polo </h4>
								</a>

								<span class="price">9.500.000</span>
							</div>
						</div>
						<div class="special-products__card card-infor">
							<a href=""> <img data-src="<?php echo $upload_dir['url']; ?>/blue1.png" alt="img-detail" class="lazyload"></a>

							<div class="text">
								<a href="">
									<h4 class="product-name">Máy nén khí không dầu  </h4>
								</a>

								<span class="price">Liên hệ</span>
							</div>
						</div>
						<div class="special-products__card card-infor">
							<a href=""> <img data-src="<?php echo $upload_dir['url']; ?>/red1.png" alt="img-detail" class="lazyload"></a>

							<div class="text">
								<a href="">
									<h4 class="product-name">Máy nén khí không dầu 150 lít 6hp Polo </h4>
								</a>

								<span class="price">Liên hệ</span>
							</div>
						</div>
						<div class="special-products__card card-infor">
							<a href=""> <img data-src="<?php echo $upload_dir['url']; ?>/blue1.png" alt="img-detail" class="lazyload"></a>

							<div class="text">
								<a href="">
									<h4 class="product-name">Máy nén khí không dầu 150 lít 6hp Polo </h4>
								</a>

								<span class="price">Liên hệ</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	// do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		// do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	// do_action( 'woocommerce_after_single_product_summary' );
	?>
	<?php
	// echo '<pre>';
	// echo 'abc';
	// print_r($product->get_short_description());
	// echo '</pre>';
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
