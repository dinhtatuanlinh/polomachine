<?php 
$upload_dir = wp_upload_dir();// lây url tới folder upload để lấy hình ảnh

// echo '<pre>';
// print_r($upload_dir['url']);
// echo '</pre>';
get_header(); ?>
<?php

?>


<main class="homepage">
        <!--          Slider              -->
        <div class="swiper-container linh-mobile-hiden">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img data-src="<?php echo $upload_dir['url']; ?>/homebg.png" alt="img-detail" class="swiper-lazy">
                    <div class="swiper-lazy-preloader"></div>
                </div>
                <div class="swiper-slide">
                    <img data-src="<?php echo $upload_dir['url']; ?>/homebg.png" alt="img-detail" class="swiper-lazy">
                    <div class="swiper-lazy-preloader"></div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

        </div>
        <!--  -->
        <div class="container linh-space-for-top">
            <div class="homepage__wrap flex-content">
                <!--    Nội dung  trái    -->
                <div class="homepage__left content-left">
                    <!-- danh mục sản phẩm -->
                    <aside class="menu">
                        <h2 class="title">
                            danh mục sản phẩm
                        </h2>
                        <div class="menu-content" id="menu-content">
                            <a href=""><i class="demo-icon icon-right-dir"></i> Máy nén khí không dầu, giảm âm polo</a>
                            <a href=""><i class="demo-icon icon-right-dir"></i> Máy nén khí đầu tiên polo </a>
                            <a href=""><i class="demo-icon icon-right-dir"></i> Máy nén khí dây đai polo </a>
                            <a href=""><i class="demo-icon icon-right-dir"></i> áy nén khí trục vít polo</a>
                            <a href=""><i class="demo-icon icon-right-dir"></i> bình tích khí polo</a>
                            <a href=""><i class="demo-icon icon-right-dir"></i> phụ kiện máy nén khí polo</a>
                        </div>
                    </aside>

                    <!-- Hỗ trợ trục tuyến -->
                    <aside class="service-center">
                        <h2 class="title">
                            Hỗ trợ trực tuyến
                        </h2>
                        <div class="service-content">
                            <div class="hotline">
                                <h3>hotline</h3>
                                <a href="tel:+0828.039.666">0828.039.666</a>
                            </div>
                            <div class="retail">
                                <h3>liên hệ làm đại lí</h3>
                                <a href="tel:0974465436">Miss Thủy: 0974465436 </a>
                            </div>
                            <div class="warranty">
                                <h3>Liên hệ bảo hành</h3>
                                <a href="tel:+0828.039.666">0828.039.666</a>
                            </div>
                        </div>
                    </aside>
                    <!-- sản phẩm nổi bật-->
                    <aside class="special">
                        <h2 class="title">
                            Sản phẩm nổi bật
                        </h2>
                        <div class="special-content">

                            <div class="special-card">
                                <div class="special-card__img">
                                    <a href=""> <img data-src="<?php echo $upload_dir['url']; ?>/blue1.png" alt="special" class="lazyload"></a>

                                </div>
                                <div class="special-card__text">
                                    <a href="">
                                        <h3>Máy nén khí dây đai 1HP</h3>
                                    </a>
                                    <span class="price">12.800.000 đ</span>
                                </div>
                            </div>
                            <div class="special-card">
                                <div class="special-card__img">
                                    <a href=""> <img data-src="<?php echo $upload_dir['url']; ?>/red1.png" alt="special" class="lazyload"></a>

                                </div>
                                <div class="special-card__text">
                                    <a href="">
                                        <h3>Máy nén khí dây đai 1HP</h3>
                                    </a>
                                    <span class="price">Liên hệ</span>
                                </div>
                            </div>
                            <div class="special-card">
                                <div class="special-card__img">
                                    <a href=""><img data-src="<?php echo $upload_dir['url']; ?>/red2.png" alt="special" class="lazyload"></a>

                                </div>
                                <div class="special-card__text">
                                    <a href="">
                                        <h3>Máy nén khí dây đai 1HP</h3>
                                    </a>

                                    <span class="price">12.800.000 đ</span>
                                </div>
                            </div>
                            <div class="special-card">
                                <div class="special-card__img">
                                    <a href=""><img data-src="<?php echo $upload_dir['url']; ?>/green.png" alt="special" class="lazyload"></a>

                                </div>
                                <div class="special-card__text">
                                    <a href="">
                                        <h3>Máy nén khí dây đai 1HP</h3>
                                    </a>

                                    <span class="price">Liên hệ</span>
                                </div>
                            </div>
                            <div class="special-card">
                                <div class="special-card__img">
                                    <a href=""><img data-src="<?php echo $upload_dir['url']; ?>/red2.png" alt="special" class="lazyload"></a>

                                </div>
                                <div class="special-card__text">
                                    <a href="">
                                        <h3>Máy nén khí dây đai 1HP</h3>
                                    </a>

                                    <span class="price">12.800.000 đ</span>
                                </div>
                            </div>
                            <div class="special-card">
                                <div class="special-card__img">
                                    <a href=""><img data-src="<?php echo $upload_dir['url']; ?>/blue1.png" alt="special" class="lazyload"></a>

                                </div>
                                <div class="special-card__text">
                                    <a href="">
                                        <h3>Máy nén khí dây đai 1HP</h3>
                                    </a>

                                    <span class="price">12.800.000 đ</span>
                                </div>
                            </div>
                            <div class="special-card">
                                <div class="special-card__img">
                                    <a href=""><img data-src="<?php echo $upload_dir['url']; ?>/red1.png" alt="special" class="lazyload"></a>

                                </div>
                                <div class="special-card__text">
                                    <a href="">
                                        <h3>Máy nén khí dây đai 1HP</h3>
                                    </a>

                                    <span class="price">12.800.000 đ</span>
                                </div>
                            </div>
                            <div class="special-card">
                                <div class="special-card__img">
                                    <a href=""><img data-src="<?php echo $upload_dir['url']; ?>/yellow.png" alt="special" class="lazyload"></a>

                                </div>
                                <div class="special-card__text">
                                    <a href="">
                                        <h3>Máy nén khí dây đai 1HP</h3>
                                    </a>

                                    <span class="price">Liên hệ</span>
                                </div>
                            </div>
                            <div class="special-card">
                                <div class="special-card__img">
                                    <a href=""><img data-src="<?php echo $upload_dir['url']; ?>/red2.png" alt="special" class="lazyload"></a>

                                </div>
                                <div class="special-card__text">
                                    <a href="">
                                        <h3>Máy nén khí dây đai 1HP</h3>
                                    </a>

                                    <span class="price">Liên hệ</span>
                                </div>
                            </div>

                        </div>
                    </aside>
                </div>

                <!--    Nội dung  phải      -->
                <div class="homepage__right content-right">

                    <h2 class="main-title">máy nén khí polo - máy nén khí chất lượng cao - bảo hành chính hãng</h2>
                    <!-- sản phẩm mới -->
                    <div class="new-products ">
                        <div class="title flex b-left bg-text">
                            <h3>Sản phẩm mới</h3>
                            <p>0828.039.666</p>
                            <img src="<?php echo $upload_dir['url']; ?>/text-banner.png" alt="">
                        </div>
                        <div class="new-products__slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide card-infor">
                                    <a href=""><img data-src="<?php echo $upload_dir['url']; ?>/red1.png" alt="img-detail" class="lazyload"></a>

                                    <div class="text">
                                        <a href="">
                                            <h4 class="product-name">Máy nén khí đầu liền 2.5HP</h4>
                                        </a>

                                        <span class="price">12.800.000 đ</span>
                                    </div>
                                </div>
                                <div class="swiper-slide card-infor">
                                    <a href=""><img data-src="<?php echo $upload_dir['url']; ?>/blue1.png" alt="img-detail" class="lazyload"></a>

                                    <div class="text">
                                        <a href="">
                                            <h4 class="product-name">Máy nén khí không dầu 150 lít 6hp Polo </h4>
                                        </a>

                                        <span class="price">Liên hệ</span>
                                    </div>
                                </div>
                                <div class="swiper-slide card-infor">
                                    <a href=""><img data-src="<?php echo $upload_dir['url']; ?>/red1.png" alt="img-detail" class="lazyload"></a>

                                    <div class="text">
                                        <a href="">
                                            <h4 class="product-name">Máy nén khí không dầu 150 lít 6hp Polo </h4>
                                        </a>

                                        <span class="price">12.800.000 đ</span>
                                    </div>
                                </div>
                                <div class="swiper-slide card-infor">
                                    <a href=""> <img data-src="<?php echo $upload_dir['url']; ?>/blue1.png" alt="img-detail" class="lazyload"></a>

                                    <div class="text">
                                        <a href="">
                                            <h4 class="product-name">Máy nén khí không dầu 150 lít 6hp Polo </h4>
                                        </a>

                                        <span class="price">Liên hệ</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>

                        </div>
                    </div>
                    <!-- Sản phẩm nổi bật -->
                    <div class="special-products">
                        <div class="title flex b-left bg-text">
                            <h3>Sản phẩm nổi bật</h3>
                            <p>0828.039.666</p>
                            <img src="<?php echo $upload_dir['url']; ?>/text-banner.png" alt="">
                        </div>
                        <div class="special-products__wrap">
                            <div class="special-products__card card-infor">
                                <a href=""> <img data-src="<?php echo $upload_dir['url']; ?>/blue1.png" alt="img-detail" class="lazyload"></a>

                                <div class="text">
                                    <a href="">
                                        <h4 class="product-name">Máy nén khí không dầu </h4>
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
                                        <h4 class="product-name">Máy nén khí không dầu </h4>
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
                            <div class="special-products__card card-infor">
                                <a href=""> <img data-src="<?php echo $upload_dir['url']; ?>/red2.png" alt="img-detail" class="lazyload"></a>

                                <div class="text">
                                    <a href="">
                                        <h4 class="product-name">Máy nén khí không dầu </h4>
                                    </a>

                                    <span class="price">16.000.0000 đ</span>
                                </div>
                            </div>
                            <div class="special-products__card card-infor">
                                <a href=""> <img data-src="<?php echo $upload_dir['url']; ?>/red3.png" alt="img-detail" class="lazyload"></a>

                                <div class="text">
                                    <a href="">
                                        <h4 class="product-name">Máy nén khí không dầu 150 lít 6hp Polo </h4>
                                    </a>

                                    <span class="price">18.000.000 đ</span>
                                </div>
                            </div>
                            <div class="special-products__card card-infor">
                                <a href=""> <img data-src="<?php echo $upload_dir['url']; ?>/dau-nen-1.png" alt="img-detail" class="lazyload"></a>

                                <div class="text">
                                    <a href="">
                                        <h4 class="product-name">Máy nén khí không dầu 150 lít 6hp Polo </h4>
                                    </a>

                                    <span class="price">36.000.000 đ</span>
                                </div>
                            </div>
                            <div class="special-products__card card-infor">
                                <a href=""> <img data-src="<?php echo $upload_dir['url']; ?>/dau-nen-2.png" alt="img-detail" class="lazyload"></a>

                                <div class="text">
                                    <a href="">
                                        <h4 class="product-name">Máy nén khí không dầu </h4>
                                    </a>

                                    <span class="price">Liên hệ</span>
                                </div>
                            </div>
                            <div class="special-products__card card-infor">
                                <a href=""> <img data-src="<?php echo $upload_dir['url']; ?>/dau-nen-1.png" alt="img-detail" class="lazyload"></a>

                                <div class="text">
                                    <a href="">
                                        <h4 class="product-name">Máy nén khí không dầu 150 lít 6hp Polo </h4>
                                    </a>

                                    <span class="price">Liên hệ</span>
                                </div>
                            </div>
                            <div class="special-products__card card-infor">
                                <a href=""> <img data-src="<?php echo $upload_dir['url']; ?>/blue3.png" alt="img-detail" class="lazyload"></a>

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
    </main>




<?php get_footer(); ?>